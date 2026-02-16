<?php
/**
 * Header options.
 *
 * @package Sen Travel
 */

$default = sen_travel_get_default_theme_options();

// Header panel
    $wp_customize->add_panel(
        'sen_travel_header_panel',
        array(
            'title' => esc_html__( 'Header', 'sen-travel' ),
            'priority' => 11
        )
    );

    $wp_customize->get_section( 'header_image' )->panel         = 'sen_travel_header_panel';
// Header Author Section
$wp_customize->add_section( 'section_home_header', 
	array(
		'title'      => __( 'Header Options', 'sen-travel' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'sen_travel_header_panel',
		)
);
// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[header_layout_options]', array(
	'default'           => $default['header_layout_options'],
	'sanitize_callback' => 'sen_travel_sanitize_select',
	'type'				=> 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[header_layout_options]', array(
	'label'             => esc_html__( 'Choose Header Layout', 'sen-travel' ),
	'section'           => 'section_home_header',
	'type'              => 'radio',
	'choices'				=> array( 
		'header-one'     => esc_html__( 'Header One(Normal)', 'sen-travel' ),  
		'header-five'     => esc_html__( 'Header Two(Header Contact)', 'sen-travel' ), 
		)
) );
// Login Button Text
$wp_customize->add_setting('theme_options[menu_btn_text]', 
    array(
    'default'           => $default['menu_btn_text'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',    
    'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control('theme_options[menu_btn_text]', 
    array(
    'label'       => __('Button Text', 'sen-travel'),
    'section'     => 'section_home_header',   
    'settings'    => 'theme_options[menu_btn_text]',   
    'type'        => 'text'
    )
);
// Login Button Url
$wp_customize->add_setting('theme_options[menu_btn_url]', 
    array(
    'default'           => $default['menu_btn_url'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',    
    'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control('theme_options[menu_btn_url]', 
    array(
    'label'       => __('Button Link', 'sen-travel'),
    'section'     => 'section_home_header',   
    'settings'    => 'theme_options[menu_btn_url]',  
    'type'        => 'url'
    )
);
$wp_customize->add_control( new Sen_Travel_Switch_Control( $wp_customize, 'theme_options[show_header_contact_info]', array(
    'label'             => __( 'Show Contact Info', 'sen-travel' ),
    'section'           => 'section_home_header',
    'settings'         => 'theme_options[show_header_contact_info]',
    'on_off_label'      => sen_travel_switch_options(),
) ) );

/** Location */
$wp_customize->add_setting( 'theme_options[header_location_text]', array(
    'default'           => $default['header_location_text'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_location_text]',
    array(
        'label'           => __( 'Location Title Text', 'sen-travel' ),
        'section'         => 'section_home_header',
        'active_callback' => 'sen_travel_header_five',
    )
);
$wp_customize->add_setting( 'theme_options[header_location_address]', array(
    'default'           => $default['header_location_address'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_location_address]',
    array(
        'label'           => __( 'Address', 'sen-travel' ),
        'description'     => __( 'Enter Location.', 'sen-travel' ),
        'section'         => 'section_home_header',
        'active_callback' => 'sen_travel_header_five',
    )
);

/** Phone */
$wp_customize->add_setting( 'theme_options[header_phone_text]', array(
    'default'           => $default['header_phone_text'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_phone_text]',
    array(
        'label'           => __( 'Phone Title Text', 'sen-travel' ),
        'section'         => 'section_home_header',
        'active_callback' => 'sen_travel_header_five',
    )
);

$wp_customize->add_setting( 'theme_options[header_phone_contact]', array(
    'default'           => $default['header_phone_contact'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_phone_contact]',
    array(
        'label'           => __( 'Contact', 'sen-travel' ),
        'description'     => __( 'Enter phone number.', 'sen-travel' ),
        'section'         => 'section_home_header',
        'active_callback' => 'sen_travel_header_five',
    )
);

/** Email */
$wp_customize->add_setting( 
    'theme_options[header_email_text]', 
    array(
        'default'           => $default['header_email_text'],
        'sanitize_callback' => 'sanitize_email',
    ) 
);

$wp_customize->add_control(
    'theme_options[header_email_text]',
    array(
        'label'           => __( 'Email Title Text', 'sen-travel' ),
        'section'         => 'section_home_header',
        'active_callback' => 'sen_travel_header_five',
    )
);
$wp_customize->add_setting( 
    'theme_options[header_email_address]', 
    array(
        'default'           => $default['header_email_address'],
        'sanitize_callback' => 'sanitize_email',
    ) 
);

$wp_customize->add_control(
    'theme_options[header_email_address]',
    array(
        'label'           => __( 'Email', 'sen-travel' ),
        'description'     => __( 'Enter valid email address.', 'sen-travel' ),
        'section'         => 'section_home_header',
        'active_callback' => 'sen_travel_header_five',
    )
);
