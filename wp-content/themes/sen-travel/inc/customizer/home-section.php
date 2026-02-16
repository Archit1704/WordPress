<?php
/**
 * Home Page Options.
 *
 * @package Sen Travel
 */

$default = sen_travel_get_default_theme_options();
$homepage_design_layout     = sen_travel_get_option( 'homepage_design_layout_options' );

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'sen-travel' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/
if ($homepage_design_layout=='home-main') {
	require get_template_directory() . '/inc/customizer/sections/header.php';
} 