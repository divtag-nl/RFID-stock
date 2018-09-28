import './bootstrap';
import Vue from 'vue';
import routes from './routes';
import VueRouter from 'vue-router';

let router = new VueRouter({
    routes,
});

new Vue({
    router,
}).$mount('#app');
