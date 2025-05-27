<?php 

// Theme Title
function custom_theme_title() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_title');



// Featured Image
function custom_featured_image() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_featured_image');