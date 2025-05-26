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
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(). '/img/logo.png'  ?>" alt="">Hello</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="menu_area">
                <?php wp_nav_menu( array('theme_location' => 'main_manu', 'manu_id' => 'nav') ); ?>
            </div>
            </div>
            <div class="col-sm-3">
                <div class="search">
                    <form action="<?php echo home_url(); ?>" method="get">
                        <input type="text" name="s" placeholder="Search...">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>





<?php wp_footer(); ?>
</body>
</html>