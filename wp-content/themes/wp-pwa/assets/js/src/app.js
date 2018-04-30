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
                /**
                 * Remove the placeholders.
                 */
                document.querySelectorAll('.placeholder__article').forEach(article => article.remove());
                /**
                 * Parse the JSON response and add 
                 * the blog posts to the data object.
                 */
                response.json().then(data => this.posts = data);
            })
    }
});

/**
 * Register service worker
 */
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('/serviceworker.js');
    });
}