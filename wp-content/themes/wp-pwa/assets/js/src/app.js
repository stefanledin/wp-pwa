import Vue from 'vue';
import blogPost from './blogPost.vue';

new Vue({
    el: '#app',
    data: {
        posts: []
    },
    components: {
        blogPost
    },
    mounted(){
        fetch('/wp-json/wp/v2/posts')
            .then(response => {
                response.json().then(data => this.posts = data);
            })
    }
});

if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('/serviceworker.js');
    });
}