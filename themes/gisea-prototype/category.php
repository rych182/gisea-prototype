<?php get_header(); ?>

    <main class="pagina seccion no-sidebars contenedor">
        <!-- get_queried_object(); nos dice la ultima query que se realizo, por eso cuando clickeamos una categoria nos dice cual clickeamos en el titulo-->
        <?php 
            $categoria = get_queried_object(); 
            //echo "<pre>";
            //var_dump($categoria);
            //echo "</pre>";
        ?>
        <h2 class="text-center texto-primario">Categoria: <?php echo $categoria->name; ?></h2>

        <ul class="listado-blog">
            <?php get_template_part('template-parts/loop','blog'); ?>
        </ul>
    </main>

<?php get_footer(); ?>