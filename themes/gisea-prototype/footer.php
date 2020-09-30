        <footer class="site-footer contenedor">
        <!--Agregue la clase contenedor para que se centre todo un poco-->
            <hr>
            <div class="contenido-footer">
            <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',//wordpress genera el nav del html
                        'container_class' => 'menu-principal'//el css del nav
                    );
                    wp_nav_menu($args);
                ?>

                <p class="copyright">Todos los derechos reservados <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>