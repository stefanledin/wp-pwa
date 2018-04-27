<template>
    <article class="mb-4 w-full md:w-1/2 lg:w-1/3 sm:m-2 bg-white shadow-lg overflow-hidden">
        <header class="px-4 mt-4">
            <h2>{{ title.rendered }}</h2>
        </header>
        <div class="p-4 leading-normal" v-html="content.rendered"></div>
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

