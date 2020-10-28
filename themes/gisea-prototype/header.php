<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="contenedor">
            <div class="barra-navegacion">
                <a href="<?php echo esc_url(site_url('/')); ?>"> <!--Nos lleva a la página principar-->
                    <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="logo sitio">
                </a>

                <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',//wordpress genera el nav del html
                        'container_class' => 'menu-principal'//el css del nav
                    );
                    wp_nav_menu($args);
                ?>
            </div>
        </div>
    </header>