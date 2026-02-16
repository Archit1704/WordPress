<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Register Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function sen_travel_register_elementor_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/slider-widget.php' );

	$widgets_manager->register( new \Sen_Travel_Elementor_Slider_Widget() );

}
add_action( 'elementor/widgets/register', 'sen_travel_register_elementor_widget' );