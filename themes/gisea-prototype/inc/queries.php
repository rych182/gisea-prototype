<?php
// $cantidad = -1 es para que muestre todas las clases que hay en el gym
function gisea_prototype_clases($cantidad = -1){ ?>
    <ul class="lista-clases">
    <!--Haciendo una consulta a la base de datos para traer los resultados que traemos en nuestro Custom Post type
    el nombre del post type lo encuentras en gisea_prototype_post_types.php y en la parte donde dice register_post_type( 'gisea_clases', $args );
-->
        <?php 
            $args = array(
                //La documentacion de Wordpress es muy buena
                //Las clases del gym que vamos a consultar
                'post_type' => 'gisea_clases',
                //El número de páginas que queremos mostrar
                //Por default se ordenan de manera descendente y por fecha, osea que te muestra los últimos en haber sido creados
                'posts_per_page' => $cantidad
            );
            $clases = new WP_Query($args);
            while ($clases ->have_posts() ): $clases->the_post();?> 

            <li class="clase card gradient">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                
                    <?php 
                        $hora_inicio = get_field('hora_de_inicio');
                        $hora_fin = get_field('hora_de_salida');
                    ?>
                    <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
                </div>
            </li>
            <!-- al usar wp_query debes de resetear -->
        <?php endwhile; wp_reset_postdata();?>
    </ul>
    
<?php
}
