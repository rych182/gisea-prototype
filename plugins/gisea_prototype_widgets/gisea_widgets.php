<?php

/*
    Plugin Name: Gisea Prototype - Widgets
    Plugin URI:
    Description: Añade Widgets personalizados al sitio web Gisea Prototype
    Version: 1.0.0
    Author: Ricardo Garrido
    Author URI: https://twitter.com/Rych182
    Text Domain: Gisea-Prototype
 */
if (!defined('ABSPATH')) die();

/**
 * Adds Gisea_Prototype_Clases_Widget widget.
 */
class Gisea_Prototype_Clases_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Gisea clases', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Agrega las clases como Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        ?>
        <ul>
            <?php
                $args = array(
                    'post_type' => 'gisea_clases',//El slug de gisea_prototype_post_types.php
                    'posts_per_page' => 3, //Solo muestra 3 post
                    'orderby' => 'rand'//Muestra las publicaciones en orden aleatorio
                );
                $clases = new WP_Query($args);
                while ($clases-> have_posts()): $clases->the_post();
            ?>

            <li class="clase-sidebar">
                <div class="imagen">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>

                <div class="contenido-clase">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
                <!--Para que te muestre las publicaciones-->
                <?php //El codigo es el mismo que esta en queries.php
                    $hora_inicio = get_field('hora_de_inicio');
                    $hora_fin = get_field('hora_de_salida');
                    ?>
                <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
            </li>

            <?php endwhile; wp_reset_postdata();?>
        </ul>
        
        <?php
        echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

// register Foo_Widget widget
function gisea_prototype_registro_Widget() {
    register_widget( 'Gisea_Prototype_Clases_Widget' );
}
add_action( 'widgets_init', 'gisea_prototype_registro_Widget' );
 ?>