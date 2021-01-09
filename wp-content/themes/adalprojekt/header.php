<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">

    <title>
        <?php wp_title('/', true, 'right'); bloginfo('name');
            if ( is_front_page() ) echo ' / ' . get_bloginfo('description');
        ?>
    </title>
    <?php wp_head(); ?>
</head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">A dál?</a>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                        </div>
                </div>
            </nav>
        </header>