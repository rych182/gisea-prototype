<?php while ( have_posts() ): the_post(); ?>
    <h1 class="text-center texto-primario"> <?php the_title(); ?> </h1>
    <!--el array hace que le des una clase específica a esa imagen destacada-->
    <?php the_post_thumbnail('blog',array('class' => ('imagen-destacada'))); ?>

<?php 
    //revisar que el custom post type es clases
    if (get_post_type() === 'gisea_clases') {
        //Este es el código de queries.php 
        $hora_inicio = get_field('hora_de_inicio');
        $hora_fin = get_field('hora_de_salida');
?>
    <p class="informacion-clase"><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
<?php } ?>

    <?php the_content(); ?>
<?php endwhile; ?>