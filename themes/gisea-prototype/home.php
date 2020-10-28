<?php get_header(); ?>
<!--TEMPLATE BLOG, aquí jalas el archivo de loop-blog.php-->

    <main class="pagina seccion no-sidebars contenedor">
        <ul class="listado-blog">
        <!--Con este loop utilizamos el esqueleto de loop-blog.php-->
            <?php while (have_posts()): the_post();?>
            <?php get_template_part('template-parts/loop','blog'); ?>
            <?php endwhile; ?>
        </ul>
    </main>

<?php get_footer(); ?>