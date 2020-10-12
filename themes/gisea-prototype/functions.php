<?php

/* CONSULTAS REUTILIZABLES- 
De esta manera podemos incluir un archivo dentro de estas funciones
 */
require get_template_directory() . '/inc/queries.php';

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
    

    # HOJA DE ESTILOS PRINCIPAL
    # el array() vacio es donde van las dependencias y se deja vacio cuando no las haya
    # Es importante poner una version ya que si instalas un plugin de cache y haces modificaciones, con que le pongas 1.0.1, te mostrara las modificaciones
    wp_enqueue_style('style',get_stylesheet_uri(),array('normalize','googleFont'),'1.0.0');


    //Así se cargan archivos JavaScript
    wp_enqueue_script('queryslicknav',get_template_directory_uri() . '/js/jquery.slicknav.min.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('scripts',get_template_directory_uri() . '/js/scripts.js',array('jquery','queryslicknav'),'1.0.0',true);
    
    wp_enqueue_script('lightboxJS',get_template_directory_uri() . '/js/lightbox.min.js',array('jquery'),'2.11.3',true);    
    
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

?>