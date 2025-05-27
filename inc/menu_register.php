<?php 

// Register navigation menus
function custom_theme_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom_theme'),
        'footer' => __('Footer Menu', 'custom_theme')
    ));
}
add_action('after_setup_theme', 'custom_theme_menus');