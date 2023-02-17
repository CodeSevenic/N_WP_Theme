<?php

/**
 * Theme functions
 * 
 * @package purpleWeb
 */

if(!defined('PURPLEWEB_DIR_PATH')) {
    define('PURPLEWEB_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('PURPLEWEB_DIR_URI')) {
    define('PURPLEWEB_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once PURPLEWEB_DIR_PATH . '/inc/helpers/autoloader.php';
require_once PURPLEWEB_DIR_PATH . '/inc/helpers/template-tags.php';

function purpleweb_get_theme_instance() {
    \PURPLEWEB_THEME\Inc\PURPLEWEB_THEME::get_instance();
}

purpleweb_get_theme_instance();


function purpleweb_enqueue_scripts() {

}


function custom_rss_limit($length) {
    return 6;
}

// Function to render the custom logo 2
function nettel_custom_logo_2(): void
{
    $custom_logo_id_2 = get_theme_mod( 'custom_logo_2' );
    $custom_logo_2 = wp_get_attachment_image_src( $custom_logo_id_2 , 'full' );
    if ( has_custom_logo() && $custom_logo_id_2 ) {
        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="custom-logo-link" rel="home"><img src="' . esc_url( $custom_logo_2[0] ) . '" class="custom-logo-2" alt="' . get_bloginfo( 'name' ) . '"></a>';
    }
}
add_filter('pre_option_posts_per_rss', 'custom_rss_limit');