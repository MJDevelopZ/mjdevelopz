<?php

//Enqueque Parent Theme CSS
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Create and register sidebar TOH

function TOH_sidebar_init() {
  register_sidebar( array(
    'name'          => __( 'Trades of Hope', 'dazzling-child' ),
    'id'            => 'sidebar-2',
    'description' => __( 'Widgets in this area will be shown on only categories of Trades of Hope.', 'dazzling-child'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'TOH_sidebar_init' );

//Create and register sidebar TOH

function Life_sidebar_init() {
  register_sidebar( array(
    'name'          => __( 'Life', 'dazzling-child' ),
    'id'            => 'sidebar-3',
    'description' => __( 'Widgets in this area will be shown on only categories of Life.', 'dazzling-child'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'Life_sidebar_init' );

//Create and register sidebar MJDevelopZ

function MJDevelopZ_sidebar_init() {
  register_sidebar( array(
    'name'          => __( 'MJDevelopZ', 'dazzling-child' ),
    'id'            => 'sidebar-4',
    'description' => __( 'Widgets in this area will be shown on only categories of MJDevelopZ.', 'dazzling-child'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'MJDevelopZ_sidebar_init' );

//Create and register sidebar SeraphinaKnits

function SeraphinaKnits_sidebar_init() {
  register_sidebar( array(
    'name'          => __( 'SeraphinaKnits', 'dazzling-child' ),
    'id'            => 'sidebar-5',
    'description' => __( 'Widgets in this area will be shown on only categories of SeraphinaKnits.', 'dazzling-child'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'SeraphinaKnits_sidebar_init' );


?>