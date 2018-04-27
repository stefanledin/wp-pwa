<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="manifest" href="/manifest.json">
        <title>WP-PWA</title>
        <meta name="theme-color" content="#de751f">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
    </head>
    <body <?php body_class('bg-orange-lightest');?>>

        <header class="container mx-auto mb-8 shadow-lg">
            <img src="<?php echo asset('img/header.jpg');?>" alt="Atlantis the Palm" class="mx-auto block">
            <div class="bg-orange-dark mx-auto py-2 px-4">
                <h1 class="text-white font-sans font-semibold">My Dubai Travel Diary 🇦🇪</h1>
            </div>
        </header>

        <div id="app" class="container mx-auto px-4">
            <div class="block sm:flex">
                <blog-post v-for="post in posts" :key="post.id" :post="post"></blog-post>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!--
                    <article class="mb-4 w-full md:w-1/2 lg:w-1/3 sm:m-2 bg-white shadow-lg overflow-hidden">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('full', ['class' => 'h-auto']);
                        }
                        ?>
                        <header class="px-4 mt-4">
                            <h2><?php the_title();?></h2>
                        </header>
                        <div class="p-4 leading-normal">
                            <?php the_content();?>
                        </div>
                    </article>
                    -->
                <?php endwhile; endif; ?>
            </div>
        </div>

        <?php wp_footer();?>
    </body>
</html>