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
    if (navigator.onLine) {
        e.respondWith(
            caches.match(e.request).then(function (r) {

                return fetch(e.request).then(function (response) {
                    return caches.open(cacheName).then(function (cache) {
                        if (e.request.method === 'GET' && e.request.url.indexOf('chrome-extension') !== 0) {
                            console.log(e.request);
                            cache.put(e.request, response.clone());
                        }

                        return response;
                    });
                });
            })
        );
    } else {
        e.respondWith(
            caches.match(e.request).then(function(r) {
                return r;
            })
        );
    }
});
