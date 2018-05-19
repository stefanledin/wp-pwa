<template>
    <article class="mb-4 w-full md:w-1/2 lg:w-1/3 sm:m-2 bg-white shadow-lg overflow-hidden">
        <a v-if="thumbnail" v-html="thumbnail" :href="link"></a>
        <header class="px-4 mt-4">
            <h2><a :href="link" class="text-black no-underline hover:underline">{{ title.rendered }}</a></h2>
        </header>
        <div class="p-4 leading-normal">
            <div v-html="content.rendered"></div>
            <router-link :to="/blog/+id">Read more</router-link>
        </div>
    </article>
</template>

<script>
export default {
    data() {
        return this.post;
    },
    props: ['post']
}
</script>

