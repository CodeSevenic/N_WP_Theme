<?php
/**
 * Bootstraps the Theme
 *
 * @package PurpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;

class PURPLEWEB_THEME {

    use Singleton;

    protected function __construct() {
        // load class.

        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions.
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);


    }

    public function setup_theme() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', [
            'header-text'          => ['site-title', 'site-description' ],
            'height'               => 400,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
        ]);
        add_theme_support( 'custom-background', [
            'default-color' => '#ffffff',
            'default-image' => '',
        ] );

        add_theme_support('post-thumbnails');
    }


}
