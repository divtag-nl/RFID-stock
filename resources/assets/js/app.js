import './bootstrap';
import Vue from 'vue';
import routes from './routes';
import VueRouter from 'vue-router';

if('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js', { scope: '/' });
};

Vue.use(VueRouter);

let router = new VueRouter({
    routes,
});

new Vue({
    router,
}).$mount('#app');
