<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('resturent_logo_setting');  ?>" alt=""></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="menu_area">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'manu_id' => 'nav') ); ?>
            </div>
            </div>
            <div class="col-sm-3">
                <div class="login">
                    <?php wp_nav_menu( array('theme_location' => 'footer', 'manu_id' => 'login_menu') ); ?>
                </div>
            </div>
        </div>
    </div>
</header>





<?php wp_footer(); ?>
</body>
</html>