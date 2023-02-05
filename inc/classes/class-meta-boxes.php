<?php
/**
 * Register Meta Boxes
 *
 * @package PurpleWeb
 */

namespace PURPLEWEB_THEME\Inc;


use PURPLEWEB_THEME\Inc\Traits\Singleton;

class Meta_Boxes {
    use Singleton;


    protected function __construct() {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);

    }

}
