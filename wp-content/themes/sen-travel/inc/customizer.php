<?php
/**
 * Sen Travel Theme Customizer
 *
 * @package Sen Travel
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function sen_travel_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$default = sen_travel_get_default_theme_options();
		// Register custom section types.
	$wp_customize->register_section_type( 'Sen_Travel_Customize_Section_Upsell' );
	$wp_customize->add_section(
		new Sen_Travel_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Sen Travel Pro', 'sen-travel' ),
				'pro_text' => esc_html__( 'Buy Pro', 'sen-travel' ),
				'pro_url'  => 'http://www.sensationaltheme.com/downloads/sen-travel-pro/',
				'priority'  => 1,
			)
		)
	);

	//For Menu Option
	$wp_customize->add_section('menu_logo_center_optons', array(    
	'title'       => __('Menu Logo Center', 'sen-travel'),
	'panel'       => 'nav_menus',
	'active_callback' => 'sen_travel_header_nine',   
	));

	// Add Single Header Image enable setting and control.
	$wp_customize->add_setting( 'theme_options[enable_center_logo]', array(
		'default'           => $default['enable_center_logo'],
		'sanitize_callback' => 'sen_travel_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'theme_options[enable_center_logo]', array(
		'label'             => esc_html__( 'Enable Logo Placed in Center', 'sen-travel' ),
		'section'           => 'menu_logo_center_optons',
		'type'              => 'checkbox',

	) );
	// Add Panel.
	$wp_customize->add_panel( 'theme_option_panel',
		array(
		'title'      => __( 'Theme Options', 'sen-travel' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		)
	);	
	$homepage_layout_options     = sen_travel_get_option( 'homepage_design_layout_options' );

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/sanitize.php';

	// Load customize options.
	include get_template_directory() . '/inc/customizer/options.php';

	// Load customize control.
	include get_template_directory() . '/inc/customizer/control.php';

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/active-callback.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-option/footer.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-option/general.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-option/header-image.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-option/archives.php';

	// Load Category Design option.
	include get_template_directory() . '/inc/customizer/theme-option/category-design.php';

	// Load Single Post sections option.
	include get_template_directory() . '/inc/customizer/theme-option/single-post.php';

	// Load Single Page sections option.
	include get_template_directory() . '/inc/customizer/theme-option/single-page.php';

	// Load home page sections option.
	include get_template_directory() . '/inc/customizer/home-section.php';


	
}
add_action( 'customize_register', 'sen_travel_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sen_travel_customize_preview_js() {
	wp_enqueue_script( 'sen_travel_customizer', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sen_travel_customize_preview_js' );
/**
 *
 */
function sen_travel_customize_backend_scripts() {

	wp_enqueue_style( 'sen-travel-admin-customizer-style', get_template_directory_uri() . '/inc/customizer/css/customizer-style.css' );
	wp_enqueue_script( 'sen-travel-admin-customizer', get_template_directory_uri() . '/inc/customizer/js/customizer-scipt.js', array( 'jquery', 'customize-controls' ), '20151215', true );
}
add_action( 'customize_controls_enqueue_scripts', 'sen_travel_customize_backend_scripts', 10 );
