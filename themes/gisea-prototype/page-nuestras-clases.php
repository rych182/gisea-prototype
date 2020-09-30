<?php get_header(); ?>
    <main class="contenedor pagina seccion no-sidebar">
        <div class="contenido-principal text-center">
            <?php get_template_part('template-parts/paginas'); ?>
            <?php echo gisea_prototype_clases(); ?>
        </div>
    </main>
<?php get_footer(); ?>