import Vue from 'vue';
import VueRouter from 'vue-router';
import index from './index.vue';
//import singlePostContainer from './singlePostContainer.vue';

Vue.use(VueRouter);

//const index = () => import(/* webpackChunkName: "index.vue" */ './index.vue');
const singlePostContainer = () => import(/* webpackChunkName: "singlePostContainer.vue"*/'./singlePostContainer.vue');
const routes = [
    {
        path: '/',
        component: index
    },
    {
        path: '/blog/:id',
        component: singlePostContainer
    }
];

const router = new VueRouter({
    routes
});

const app = new Vue({
    router
}).$mount('#app');

/**
 * Register service worker
 */
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('/serviceworker.js');
    });
}
