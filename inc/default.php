<?php 

// Theme Title
function custom_theme_title() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_title');

