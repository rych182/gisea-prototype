<?php

/* CONSULTAS REUTILIZABLES- 
De esta manera podemos incluir un archivo dentro de estas funciones
 */
require get_template_directory() . '/inc/queries.php';
require get_template_directory() . '/inc/shortcodes.php';

/*Cuando el tema es activado*/ 
function gisea_prototype_setup(){
    //Habilitar imágenes destacadas
    add_theme_support('post-thumbnails');

    //Titulos SEO de las pestañas
    add_theme_support('title-tag');

    //Agregar imagenes de tamaño distinto
    add_image_size('square',350,350,true);
    add_image_size('portrait',350,724,true);
    add_image_size('cajas',400,375,true);
    add_image_size('mediano',700,400,true);
    add_image_size('blog',966,644,true);
}
add_action('after_setup_theme','gisea_prototype_setup');

//Menús de navegación
function gisea_prototype_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal','Gisea'),
        'menu-principal 2' => __('Menu Principal 2','Gisea'),
        'menu-principal 3' => __('Tercer menú','Gisea')
    ));
}
add_action('init','gisea_prototype_menus');

//Scripts y styles
//Nos permite cargar hojas de estilo y librerias de Javascript, incluso Angular, react y vue
function gisea_prototype_scripts_style(){

    //El normalize se carga antes del style porque resetea los estilos
    wp_enqueue_style('normalize',get_template_directory_uri() . '/css/normalize.css',array(),'8.0.1');
    wp_enqueue_style('slicknav',get_template_directory_uri() . '/css/slicknav.css',array(),'1.0.0');

    wp_enqueue_style('googleFont','https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Raleway:wght@400;700;900&family=Staatliches&display=swap"',array(),'1.0.0');
    
    wp_enqueue_style('lightbox',get_template_directory_uri() . '/css/lightbox.min.css',array(),'2.11.3');    
    
    wp_enqueue_style('leafletCSS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css',array(),'1.7.1');

    wp_enqueue_style('bxSliderCSS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css',array(),'4.2.12');
    # HOJA DE ESTILOS PRINCIPAL
    # el array() vacio es donde van las dependencias y se deja vacio cuando no las haya
    # Es importante poner una version ya que si instalas un plugin de cache y haces modificaciones, con que le pongas 1.0.1, te mostrara las modificaciones
    wp_enqueue_style('style',get_stylesheet_uri(),array('normalize','googleFont'),'1.0.0');

    //Así se cargan archivos JavaScript
    wp_enqueue_script('queryslicknav',get_template_directory_uri() . '/js/jquery.slicknav.min.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('scripts',get_template_directory_uri() . '/js/scripts.js',array('jquery','queryslicknav'),'1.0.0',true);
    
    wp_enqueue_script('lightboxJS',get_template_directory_uri() . '/js/lightbox.min.js',array('jquery'),'2.11.3',true); 
    wp_enqueue_script('leafletJS','https://unpkg.com/leaflet@1.7.1/dist/leaflet.js',array(),'1.7.1',true);   
    wp_enqueue_script('bxSliderJS','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js',array('jquery'),'4.2.12',true);   
    
}
//Este hook quiere decir que va a cargar hojas de estilo en la parte frontal de la web
add_action('wp_enqueue_scripts','gisea_prototype_scripts_style');


//WIDGETS

function gisea_prototype_widgets(){
    //El widget se registra con esta función porque nunca se le cambió el nombre
    register_sidebar(array(
        'name' => 'Sidebar 1',//Nombre que se verá en el panel de administración
        'id' => 'sidebar_1',//la manera en la que Wordpress reconoce el widget
        'before_widget' => '<div class="widget">',//Contenido que vendrá antes del widget
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar 2',//Nombre que se verá en el panel de administración
        'id' => 'sidebar_2',//la manera en la que Wordpress reconoce el widget
        'before_widget' => '<div class="widget">',//Contenido que vendrá antes del widget
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init','gisea_prototype_widgets');

/* ------- IMAGEN HERO --------*/

function gisea_hero_image(){
    //obtener el id pagina principal
    //con get_option obtenemos el id que wordpress haya creado de manera dinamica
    //Con esto le decimos de que página tiene que traer ese valor
    $front_page_id = get_option('page_on_front');
    $id_imagen = get_field('imagen_hero', $front_page_id );
    //obtener la imagen, esto te regresa un arreglo de 4 cajas, por eso el [0]
    $imagen = wp_get_attachment_image_src($id_imagen,'full')[0];

    //style CSS
    wp_register_style('custom',false);
    //Hoja de estilos personalizada que no existe pero quetiene el codigo que puse abajo
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        body.home .site-header {
            background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url($imagen);
        }
    ";
    //esta funcion agrega el codigo css
    wp_add_inline_style('custom',$imagen_destacada_css);
}
add_action('init','gisea_hero_image');


?>