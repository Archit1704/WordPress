<?php 
/**
 * Theme Options.
 *
 * @package Sen Travel
 */

$default = sen_travel_get_default_theme_options();

// Single Page Setting Section starts
$wp_customize->add_section('section_single_page', 
	array(    
	'title'       => __('Single Page Option', 'sen-travel'),
	'panel'       => 'theme_option_panel'    
	)
);

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'default'           => $default['single_page_header_image_as_header_image_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image As Header Image', 'sen-travel' ),
	'description' => __('If this option is Enable then Display Header Image as Header Image Otherwise display Featured Image as Header Image  ', 'sen-travel'),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_title_enable]', array(
	'default'           => $default['single_page_header_title_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_title_enable]', array(
	'label'             => esc_html__( 'Enable Header Title', 'sen-travel' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );
// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_enable]', array(
	'default'           => $default['single_page_header_image_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image', 'sen-travel' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_video_enable]', array(
	'default'           => $default['single_page_video_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_video_enable]', array(
	'label'             => esc_html__( 'Enable Featured Video', 'sen-travel' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_image_enable]', array(
	'default'           => $default['single_page_image_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_image_enable]', array(
	'label'             => esc_html__( 'Enable Featured Image', 'sen-travel' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );


// Content align setting and control.
$wp_customize->add_setting( 'theme_options[single_page_content_align]', array(
	'default'           => $default['single_page_content_align'],
	'sanitize_callback' => 'sen_travel_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[single_page_content_align]', array(
	'label'             => esc_html__( 'Choose Content Align', 'sen-travel' ),
	'section'           => 'section_single_page',
	'type'              => 'radio',
	'choices'				=> array( 
		'content-right'     => esc_html__( 'Right Side', 'sen-travel' ), 
		'content-center'     => esc_html__( 'Center Side', 'sen-travel' ), 
		'content-left'     => esc_html__( 'Left Side', 'sen-travel' ), 
		'content-justify'     => esc_html__( 'Justify', 'sen-travel' )
		)
) );