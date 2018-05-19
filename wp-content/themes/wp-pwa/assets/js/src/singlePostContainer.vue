<template>
    <single-post :post="post"></single-post>
</template>

<script>
import singlePost from './singlePost.vue';

export default {
    data() {
        return {
            post: {}
        }
    },
    components: {
        singlePost
    },
    mounted() {
        fetch(`/wp-json/wp/v2/posts/${this.$route.params.id}`)
            .then(response => {
                //document.querySelector('article.placeholder__article').remove();
                return response.json()
            })
            .then(data => this.post = data);
    }
}
</script>
