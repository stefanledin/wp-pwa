importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.0.0/workbox-sw.js');

workbox.routing.registerRoute(/.*\.(?:js|css)/, workbox.strategies.cacheFirst({
    cacheName: 'dubai-travel-diary'
}));

workbox.routing.registerRoute('/', workbox.strategies.cacheFirst({
    cacheName: 'dubai-travel-diary'
}));
/*
var cacheName = 'dubai-travel-diary';

self.addEventListener('install', function (event) {
    console.log('install');
    event.waitUntill(precache());
})

var precache = function () {
    return caches.open(cacheName).then(function (cache) {
        return cache.addAll([
            '/wp-content/themes/wp-pwa/assets/'
        ]);
    })
}
*/