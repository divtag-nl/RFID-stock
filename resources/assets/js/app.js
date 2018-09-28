import './bootstrap';
import Vue from 'vue';
import routes from './routes';
import VueRouter from 'vue-router';

if('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/js/sw.js');
};

Vue.use(VueRouter);

let router = new VueRouter({
    routes,
});

new Vue({
    router,
}).$mount('#app');
