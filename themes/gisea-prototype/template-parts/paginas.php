<?php while ( have_posts() ): the_post(); ?>
    <h1 class="text-center texto-primario"> <?php the_title(); ?> </h1>
    <!--el array hace que le des una clase específica a esa imagen destacada-->
    <?php the_post_thumbnail('blog',array('class' => ('imagen-destacada'))); ?>

    <?php the_content(); ?>
<?php endwhile; ?>