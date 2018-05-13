<?php get_header();?>
    
    <single-post-container :id="<?php echo $post->ID;?>"></single-post-container>

    <article class="placeholder__article mb-8 bg-white shadow-lg overflow-hidden">
        <header class="px-4 mt-4">
            <h2 class="block bg-grey w-1/2 mx-auto h-12 block"></h2>
        </header>
        <div class="p-4 leading-normal">
            <p class="bg-grey-light w-full h-12 block"></p>
        </div>
    </article>

<?php  get_footer();?>