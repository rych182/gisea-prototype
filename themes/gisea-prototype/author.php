<?php get_header(); ?>

    <main class="pagina seccion no-sidebars contenedor">
        <!-- get_queried_object(); nos dice la ultima query que se realizo, por eso cuando clickeamos una categoria nos dice cual clickeamos en el titulo-->
        <?php
            $author = get_queried_object();
            //echo "<pre>";
            //var_dump($author);
            //echo "</pre>";
        ?>
        <h2 class="text-center texto-primario">Autor: <?php echo $author->data->display_name; ?></h2>
        <!--
            https://developer.wordpress.org/reference/functions/get_the_author_meta/
            ahí puedes ver todo lo que puedes mostrar del autor, de ahí saque data->display_name; y data->ID; 
        -->
        <p class="text-center"><?php echo get_the_author_meta('description',$author->data->ID); ?></p>

        <ul class="listado-blog">
            <?php get_template_part('template-parts/loop','blog'); ?>
        </ul>
    </main>

<?php get_footer(); ?>