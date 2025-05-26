<?php 

// Enqueue styles and scripts
function custom_theme_enqueue(){
   wp_enqueue_style('style', get_stylesheet_uri());
   wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array(), '5.0.2', 'all');
   wp_register_style('main', get_template_directory_uri(). '/css/main.css', array(), '1.0.0', 'all');
   wp_enqueue_style('bootstrap');
   wp_enqueue_style('main');


// Enqueue scripts
   wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '5.0.2', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);

   // font awesome
   wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.csss', array(), '6.7.2', 'all');


}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue');


// Theme Title
function custom_theme_title() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_title');



// Register navigation menus
function custom_theme_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom_theme'),
        'footer' => __('Footer Menu', 'custom_theme')
    ));
}
add_action('after_setup_theme', 'custom_theme_menus');