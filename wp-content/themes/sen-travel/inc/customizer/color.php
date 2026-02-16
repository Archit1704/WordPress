<?php
/*-----Color Options-----*/
$default = sen_travel_get_default_theme_options();
$homepage_design_layout     = sen_travel_get_option( 'homepage_design_layout_options' );

/*-----Theme Primary Color Options-----*/
$wp_customize->add_setting( 'theme_options[colorscheme_hue]', array(
	'default'		=> $default['colorscheme_hue'],
	'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
	
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[colorscheme_hue]', array(
	'label'    => esc_html__( 'Color Scheme(Theme Color)', 'sen-travel' ),
	'section'  => 'colors',
) ) );

if ($homepage_design_layout != 'home-five') {
	// Add arrow enable setting and control.
	$wp_customize->add_setting( 'theme_options[homepage_color_layout_options]', array(
		'default'           => $default['homepage_color_layout_options'],
		'sanitize_callback' => 'sen_travel_sanitize_select',
		'type'				=> 'theme_mod',
	) );

	$wp_customize->add_control( 'theme_options[homepage_color_layout_options]', array(
		'label'             => esc_html__( 'Choose HomePage Color Layout', 'sen-travel' ),
		'section'           => 'colors',
		'type'              => 'radio',
		'choices'				=> array( 
			'lite-layout'     => esc_html__( 'Lite HomePage', 'sen-travel' ), 
			'dark-layout'     => esc_html__( 'Dark HomePage', 'sen-travel' ),
			)
	) );
}
