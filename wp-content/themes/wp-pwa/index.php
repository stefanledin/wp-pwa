<?php get_header();?>
    <div class="block sm:flex">
        <router-view></router-view>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!--<article class="placeholder__article mb-4 w-full md:w-1/2 lg:w-1/3 sm:m-2 bg-white shadow-lg overflow-hidden">
                <header class="px-4 mt-4">
                    <h2 class="block bg-grey w-1/2 h-4 block"></h2>
                </header>
                <div class="p-4 leading-normal">
                    <p class="bg-grey-light w-full h-12 block"></p>
                </div>
            </article>-->
        <?php endwhile; endif; ?>
    </div>
<?php get_footer();?>