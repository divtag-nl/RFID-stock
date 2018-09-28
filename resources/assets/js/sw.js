var cacheName = 'rfid-stock-v1';
var contentToCache = [];

self.addEventListener('install', function (e) {
    console.log('[Service Worker] Installed!');
});

self.addEventListener('activate', function (e) {
    e.waitUntil(
        caches.keys().then(function(keyList) {
            return Promise.all(keyList.map(function (key) {
                if (cacheName.indexOf(key) === -1) {
                    return caches.delete(key);
                }
            }));
        })
    );
});

self.addEventListener('fetch', function (e) {
    console.log('[Service Worker] Fetching resource: ' + e.request.url);

    if (navigator.onLine) {
        e.respondWith(
            caches.match(e.request).then(function (r) {
                console.log('[Service Worker] Fetching resource: ' + e.request.url);

                return fetch(e.request).then(function (response) {
                    return caches.open(cacheName).then(function (cache) {
                        console.log('[Service Worker] Caching new resource: ' + e.request.url);

                        cache.put(e.request, response.clone());

                        return response;
                    });
                });
            })
        );
    } else {
        e.respondWith(
            caches.match(e.request).then(function(r) {
                console.log('[Service Worker] Fetching resource: '+e.request.url);

                return r;
            })
        );
    }
});
