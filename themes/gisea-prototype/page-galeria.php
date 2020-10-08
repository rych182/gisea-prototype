<?php
/**
 * Template name: Template de galerias
 */

get_header(); ?>

    <main class="contenedor pagina seccion">
        <div class="contenido-principal">
            
            <?php while ( have_posts() ): the_post(); ?>
            <h1 class="text-center texto-primario"> <?php the_title(); ?> </h1>

            <?php 
                //get_post_gallery: Verifique el contenido de una publicación específica para la galería y, si está presente, devuelve el primero
                //obtener la galeria de la pagina actual
                //get_the_ID conseguimos el id de las imagenes
                $galeria = get_post_gallery( get_the_ID(),false );
                //explode: quita el caracter que le digas y lo guarda en un array
                $galeria_imagenes_ID = explode(',',$galeria['ids']);
            ?>

            <ul class="galeria-imagenes">
                <?php
                    $i = 1;
                    foreach ($galeria_imagenes_ID as $id):
                        //Le indicas que cuando el id pase por los ids 4 y 6 cambie el tamaño de la imagen
                        $size = ($i == 4 || $i == 6) ? 'portrait' : 'square';
                        //Recupera una imagen para representar un archivo adjunto, lo pones el tamaño square que pusiste en el archivo functions.php y le pones [0] porque te devuelve un array con el url de la imagen, su tamaño y un valor booleano por si encontro la imagen
                        $imagenThumb = wp_get_attachment_image_src($id,$size)[0];
                        //Genero una imagen grande
                        $imagen = wp_get_attachment_image_src($id,'full')[0];
                ?>
                    <li>
                        <a href="<?php echo $imagen; ?>" data-lightbox="galeria">
                            <img src="<?php echo $imagenThumb;?>" alt="Imagen">
                        </a> 
                    </li>
                <?php $i++; endforeach; ?>
            </ul>

            <?php endwhile; ?>

        </div>
    </main>

<?php get_footer(); ?>