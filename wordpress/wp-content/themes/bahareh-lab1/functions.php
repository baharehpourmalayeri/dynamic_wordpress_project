<?php

function my_theme_setup()
{
    add_theme_support('custom-header', [
        'width' => 1920,
        'height' => 1080,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => false,
    ]);
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'my_theme_setup');


function register_my_menus()
{
    register_nav_menus([
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
        'sidebar' => 'Sidebar Menu',
        'social' => 'Social Media Menu'
    ]);
}
add_action('init', 'register_my_menus');


function load_theme_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', [], false, true); // Load JS in the footer
}
add_action('wp_enqueue_scripts', 'load_theme_styles');

function mytheme_register_sidebars()
{

    $footers = [
        'footer-about' => 'Footer Om oss',
        'footer-contact' => 'Footer Kontakt',
        'footer-social' => 'Footer Social Media',
    ];

    foreach ($footers as $id => $name) {
        register_sidebar([
            'name'          => $name,
            'id'            => $id,
            'before_widget' => "<div class='footer-widget-$id'>",
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ]);
    }

    register_sidebar([
        'name'          => __('Main Sidebar', 'your-theme'),
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
}

add_action('widgets_init', 'mytheme_register_sidebars');

function my_theme_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer_widget_area',
        'before_widget' => '<div class="widget %2$s" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Contact Us Widget',
        'id'            => 'footer_contact_us_widget',
        'before_widget' => '<div class="widget %2$s" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Social Media Widget',
        'id'            => 'footer_social_media_widget',
        'before_widget' => '<div class="widget-social-media">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');
