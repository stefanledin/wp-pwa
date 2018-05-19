<template>
    <div>
        <blog-post v-for="post in posts" :key="post.id" :post="post"></blog-post>
        <article class="placeholder__article mb-4 w-full md:w-1/2 lg:w-1/3 sm:m-2 bg-white shadow-lg overflow-hidden">
                <header class="px-4 mt-4">
                    <h2 class="block bg-grey w-1/2 h-4 block"></h2>
                </header>
                <div class="p-4 leading-normal">
                    <p class="bg-grey-light w-full h-12 block"></p>
                </div>
            </article>
    </div>
</template>

<script>
import blogPost from './blogPost.vue';

export default {
    data() {
        return {
            posts: []
        }
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
                //document.querySelectorAll('.placeholder__article').forEach(article => article.remove());
                /**
                 * Parse the JSON response and add 
                 * the blog posts to the data object.
                 */
                response.json().then(data => this.posts = data);
            })
    }

}
</script>

