<?php 

/**
 * Theme Options.
 *
 * @package Sen Travel
 */

$default = sen_travel_get_default_theme_options();

	/** Header Image Settings */
$wp_customize->add_section( 
    'custom_header_image_settings',
    array(
        'capability'  => 'edit_theme_options',
        'title'       => esc_html__( 'Header Image For Inner Pages', 'sen-travel' ),
        'panel'       => 'theme_option_panel',
    ) 
);

/** Header Image */
$wp_customize->add_setting( 'theme_options[archive_header_image]',
    array(
        'default'           => get_template_directory_uri() . '/assets/images/default-header.jpg',
        'sanitize_callback' => 'sen_travel_sanitize_image',
    )
);

$wp_customize->add_control( 
    new WP_Customize_Image_Control( $wp_customize, 'theme_options[archive_header_image]',
        array(
            'label'         => esc_html__( 'Header Image For Archive Page', 'sen-travel' ),
            'description'   => esc_html__( 'Choose Header Image of your choice for Archive Pages. Recommended size for this image is 1920px by 500px.', 'sen-travel' ),
            'section'       => 'custom_header_image_settings',
            'type'          => 'image',
        )
    )
);

 ?>