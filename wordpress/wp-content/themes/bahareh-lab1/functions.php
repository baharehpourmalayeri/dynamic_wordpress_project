<?php
    function my_theme_setup() {
        add_theme_support('custom-header', array(
            'width' => 1920,
            'height' => 1080,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => false,
        ));
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
    }
    add_action('after_setup_theme', 'my_theme_setup');


    function register_my_menus() {
        register_nav_menus(array(
            'header-menu' => ('Header Menu'),
            'footer-menu' => ('Footer Menu'),
        ));
    }

    add_action('init', 'register_my_menus');


    function load_theme_styles() {
        wp_enqueue_style('main-styles', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'load_theme_styles');


?>
