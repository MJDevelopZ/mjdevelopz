<?php

//Enqueque Parent Theme CSS
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

//Remove parent theme function for post-thumbnail size
function remove_parent_theme_features() {
    remove_theme_support( 'post-thumbnails' );
}

//Create new post-thumbnail size
// Override parent theme thumbnail size
function twentythirteenchild_setup() {
    global $cap, $content_width;

    // This theme uses post thumbnails
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(400, 300, true);
        add_image_size('post-thumbnails', 400, 300, true);
    }
}

//Add Sidebars for each Category
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Trades of Hope', 'theme-slug' ),
        'id' => 'sidebar-3',
        'description' => __( 'Widgets in this area will be shown on posts with the category of Trades of Hope.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
?>