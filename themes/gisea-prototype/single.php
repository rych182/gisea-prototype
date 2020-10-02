
<!-- singles.php aparece por la jerarquia de wordpress, por eso abriré 
por eso copias es slug de gisea_prototype_post_types.php y lo usas como nombre del achivo que crearas 
anteponiendo un "single, singe-gisea_clases.php , todo esto en la carpeta principal de tu tema, Y LAS ENTRADAS
siguen tomando el archivo de single.php
-->
<?php get_header(); ?>

    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas'); ?>
        </div>
        <?php get_sidebar(); ?>
    </main>

<?php get_footer(); ?>