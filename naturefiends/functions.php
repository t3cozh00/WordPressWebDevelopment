<?php

register_nav_menus( [ 'primary' => 'Primary menu'] );

function naturefriends_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('naturefriends-script', get_template_directory_uri() . '/js/naturefriends.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'naturefriends_assets');

function naturefriends_widgets_init(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'naturefriends_widgets_init');

function naturefriends_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'naturefriends_theme_setup');

function naturefriends_read_more($more) {
    global $post;
    return ' <a href="' . get_permalink($post->ID) . '">Read more &raquo;</a>';
}
add_filter('excerpt_more', 'naturefriends_read_more');

?>