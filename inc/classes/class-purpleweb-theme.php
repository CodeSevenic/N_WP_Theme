<?php
/**
 * Bootstraps the Theme
 *
 * @package PurpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;
use WP_Customize_Media_Control;

class PURPLEWEB_THEME
{

    use Singleton;

    protected function __construct()
    {
        // load class.
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
        add_action('customize_register', [$this, 'nettel_customize_register']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 400,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);
        add_theme_support('custom-logo-2', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 400,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);

        add_theme_support('custom-background', [
            'default-color' => '#ffffff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ]);

        add_theme_support('post-thumbnails');

        /**
        * Register image sizes
         */
        add_image_size( 'featured-thumbnail', 370, 223, true);

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style'
            ]
        );

        add_editor_style();
        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');

        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }
    }
    // Add custom logo options to the customizer
    function nettel_customize_register( $wp_customize ) {
        $wp_customize->add_setting( 'custom_logo_2', array(
            'default'           => '',
            'transport'         => 'refresh',
            'sanitize_callback' => 'absint',
        ) );

        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'custom_logo_2', array(
            'label'    => __( 'Logo 2' ),
            'section'  => 'title_tagline',
            'priority' => 9,
        ) ) );
    }
}
