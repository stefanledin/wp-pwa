<template>
    <single-post :post="post"></single-post>
</template>

<script>
import singlePost from './singlePost.vue';

export default {
    props: ['id'],
    data() {
        return {
            post: {}
        }
    },
    components: {
        singlePost
    },
    mounted() {
        fetch(`/wp-json/wp/v2/posts/${this.id}`)
            .then(response => {
                return response.json()
            })
            .then(data => this.post = data);
    }
}
</script>
