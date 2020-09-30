<?php
/*
    Plugin Name: Gisea Prototype - Post Type
    Plugin URI:
    Description: Añade Post Types al sitio web Gisea Prototype
    Version: 1.0.0
    Author: Ricardo Garrido
    Author URI: https://twitter.com/Rych182
    Text Domain: Gisea-Prototype
 */

 // Registrar Custom Post Type
 /*
function gymfitness_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Clases', 'gymfitness' ),
		'name_admin_bar'        => __( 'Clase', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Clase Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Clases', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Clase', 'gymfitness' ),
		'add_new'               => __( 'Agregar Clase', 'gymfitness' ),
		'new_item'              => __( 'Nueva Clase', 'gymfitness' ),
		'edit_item'             => __( 'Editar Clase', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Clase', 'gymfitness' ),
		'view_item'             => __( 'Ver Clase', 'gymfitness' ),
		'view_items'            => __( 'Ver Clases', 'gymfitness' ),
		'search_items'          => __( 'Buscar Clase', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'gymfitness' ),
		'items_list'            => __( 'Lista de Clases', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'gymfitness' ),
		'description'           => __( 'Clases para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gymfitness_clases', $args );

}
add_action( 'init', 'gymfitness_clases_post_type', 0 );
*/ 

if (!defined('ABSPATH')) die();
function gisea_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'giseaPrototype' ),//Cambias el titulo dentro del plugin
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'giseaPrototype' ),
		'menu_name'             => __( 'Clases', 'giseaPrototype' ),//CAMBIAS el nombre del plugin
		'name_admin_bar'        => __( 'Clase', 'giseaPrototype' ),
		'archives'              => __( 'Archivo', 'giseaPrototype' ),
		'attributes'            => __( 'Atributos', 'giseaPrototype' ),
		'parent_item_colon'     => __( 'Clase Padre', 'giseaPrototype' ),
		'all_items'             => __( 'Todas Las Clases', 'giseaPrototype' ),
		'add_new_item'          => __( 'Agregar Clase', 'giseaPrototype' ),
		'add_new'               => __( 'Agregar Clase', 'giseaPrototype' ),
		'new_item'              => __( 'Nueva Clase', 'giseaPrototype' ),
		'edit_item'             => __( 'Editar Clase', 'giseaPrototype' ),
		'update_item'           => __( 'Actualizar Clase', 'giseaPrototype' ),
		'view_item'             => __( 'Ver Clase', 'giseaPrototype' ),
		'view_items'            => __( 'Ver Clases', 'giseaPrototype' ),
		'search_items'          => __( 'Buscar Clase', 'giseaPrototype' ),
		'not_found'             => __( 'No Encontrado', 'giseaPrototype' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'giseaPrototype' ),
		'featured_image'        => __( 'Imagen Destacada', 'giseaPrototype' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'giseaPrototype' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'giseaPrototype' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'giseaPrototype' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'giseaPrototype' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'giseaPrototype' ),
		'items_list'            => __( 'Lista de Clases', 'giseaPrototype' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'giseaPrototype' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'giseaPrototype' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'gisea_prototype' ),
		'description'           => __( 'Clases para el Sitio Web', 'gisea_prototype' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,//true = post, false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6, //posición de donde se veran la pestaña del plugin en el panel de administrador
        'menu_icon'             => 'dashicons-welcome-learn-more', //icono de wordpress que se verá en el panel
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,//las entradas se pueden colocar en el menú
		'can_export'            => true,
		'has_archive'           => true,// es un archivo donde se van almacenando las diferentes entradas
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gisea_clases', $args );

}
add_action( 'init', 'gisea_clases_post_type', 0 );
