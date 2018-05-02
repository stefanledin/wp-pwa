<template>
    <article v-if="post.id" :id="'post-'+post.id" class="mb-8 bg-white shadow-lg">
        <figure v-if="post.thumbnail" v-html="post.thumbnail"></figure>
        <header class="px-4 mt-4">
            <h1 class="text-center">{{ post.title.rendered }}</h1>
        </header>
        <div v-html="post.content.rendered" class="p-4 leading-normal"></div>
    </article>
</template>

<script>
export default {
    props: ['post']
}
</script>

