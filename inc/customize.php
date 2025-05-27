<?php 


// Logo Upload
function resturent_logo($wp_customize) {
  $wp_customize->add_section('resturent_logo_section',array(
    'title' => __('Logo Update', 'reasturent_theme'),
    'property' => 10,
  ));

  $wp_customize-> add_setting('resturent_logo_setting', array(
    'default' => '',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'resturent_logo_setting', array(
    'label' => 'Logo Update',
    'setting' => 'resturent_logo_setting',
    'section' =>'resturent_logo_section',
  )));



 //* Coppyright Area
  $wp_customize-> add_section('coppyright_section', array(
    'title' =>__('Coppyright', 'mytheme'),
  ));

  $wp_customize-> add_setting('resturent_setting_coppy', array(
    'default' => '&COPPY; Coppyright 2025',
  ));

  $wp_customize-> add_control('resturent_setting_coppy', array(
    'label' => 'Coppyright',
    'setting' => 'resturent_setting_coppy',
    'section' => 'coppyright_section', 
  ));


}
add_action('customize_register', 'resturent_logo');