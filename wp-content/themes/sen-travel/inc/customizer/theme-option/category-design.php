<?php
/**
 * Catgeory Design Options.
 *
 * @package Sen Travel
 */

$default = sen_travel_get_default_theme_options();

// Catgeory Design Options
$wp_customize->add_section( 'section_home_category_design',
	array(
		'title'      => __( 'Catgeory Design', 'sen-travel' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
		)
);
$wp_customize->add_setting('theme_options[category_design_content_type]', 
	array(
	'default' 			=> $default['category_design_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sen_travel_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[category_design_content_type]', 
	array(
	'label'       => __('Category Design Options', 'sen-travel'),
	'section'     => 'section_home_category_design',   
	'settings'    => 'theme_options[category_design_content_type]',		
	'type'        => 'select',
	'choices'	  => array(
			'category-one'	  => __('No Background','sen-travel'),
			'category-two'	  => __('Theme Color Background','sen-travel'),
		),
	)
);

// Add category icon enable setting and control.
$wp_customize->add_setting( 'theme_options[enable_category_icon]', array(
	'default'           => $default['enable_category_icon'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[enable_category_icon]', array(
	'label'             => esc_html__( 'Enable Category Icon', 'sen-travel' ),
	'section'           => 'section_home_category_design',
	'type'              => 'checkbox',

) );