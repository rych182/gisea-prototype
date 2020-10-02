<?php get_header(); ?>

    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas'); ?>
        </div>
        <!--ya espera que el archivo se llame sidebar, por eso solo pones gisea_clases-->
        <?php get_sidebar('gisea_clases'); ?>
    </main>

<?php get_footer(); ?>