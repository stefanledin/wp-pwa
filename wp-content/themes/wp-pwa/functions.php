<?php

/**
 * Clean up the <head>
 * The following has been copy/pasted from various sources accross the web =)
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_filter('the_generator', function() {
    return '';
});
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

/**
 * Script and styles
 */
add_action('wp_enqueue_scripts', function() {
    $assetsDir = get_template_directory_uri() . '/assets';

    /**
     * CSS
     */
    wp_enqueue_style('style', $assetsDir . '/css/style.css', null, bust_cache('/css/style.css'), null );

    /**
     * JavaScript
     */
    wp_deregister_script( 'wp-embed' );
    wp_enqueue_script( 'app', $assetsDir.'/js/dist/app.bundle.js', null, bust_cache('/js/dist/bundle.js'), true );
    
    if ( is_home() ) {
        wp_enqueue_script( 'index', $assetsDir.'/js/dist/index.bundle.js', null, bust_cache('/js/dist/index.bundle.js'), true );
    }
    if ( is_single() ) {
        wp_enqueue_script( 'single', $assetsDir.'/js/dist/single.bundle.js', null, bust_cache('/js/dist/single.bundle.js'), true );
    }
});

function bust_cache( $file_name ) {
    $assetsPath = get_stylesheet_directory() . '/assets';
    return filemtime( $assetsPath . $file_name );
}

/**
 * Modify the JSON API
 */
add_action('rest_api_init', function () {
    register_rest_field( 'post', 'thumbnail', array(
        'get_callback' => function( $post ) {
            $thumbnail = wp_get_attachment_image( $post['featured_media'], 'full' ); 
            return $thumbnail;
        }
    ) );
} );

/**
 * Helpers
 */
function asset( $path ) {
    return get_bloginfo('template_directory') . '/assets/' . $path;
}

/**
 * Enable thumbnails
 */
add_theme_support('post-thumbnails');