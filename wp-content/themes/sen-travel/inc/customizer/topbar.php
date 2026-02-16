<?php

$default = sen_travel_get_default_theme_options();
/**
* Add Header Top Panel
*/
$wp_customize->add_panel( 'header_top_panel', array(
    'title'          => __( 'Header Top', 'sen-travel' ),
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
) );

/** Header contact info section */
$wp_customize->add_section(
    'top_bar_current_date_contact',
    array(
        'title'    => __( 'Date or Contact Information', 'sen-travel' ),
        'panel'    => 'header_top_panel',
        'priority' => 11,  
    )
); 

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[topbar_layout_option]', array(
    'default'           => $default['topbar_layout_option'],
    'sanitize_callback' => 'sen_travel_sanitize_select', 
    'type'              => 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[topbar_layout_option]', array(
    'label'             => esc_html__( 'Choose Date or Contact Information', 'sen-travel' ),
    'section'           => 'top_bar_current_date_contact',
    'type'              => 'radio',
    'choices'               => array( 
        'topbar-none'     => esc_html__( 'None', 'sen-travel' ), 
        'contact-info-option'     => esc_html__( 'Contact Info', 'sen-travel' ), 
        'current-date-option'     => esc_html__( ' Current Date ', 'sen-travel' ),
        )
) );

// Header contact enable control and setting
$wp_customize->add_setting( 'theme_options[show_current_date]', array(
    'default'           =>  $default['show_current_date'],
    'sanitize_callback' => 'sen_travel_sanitize_switch_control',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
) );

$wp_customize->add_control( new Sen_Travel_Switch_Control( $wp_customize, 'theme_options[show_current_date]', array(
    'label'             => __( 'Show Contact Info', 'sen-travel' ),
    'section'           => 'top_bar_current_date',
    'settings'         => 'theme_options[show_current_date]',
    'on_off_label'      => sen_travel_switch_options(),
    'active_callback' => 'topbar_current_date_option',
) ) );

// Header contact enable control and setting
$wp_customize->add_setting( 'theme_options[show_header_contact_info]', array(
    'default'           =>  $default['show_header_contact_info'],
    'sanitize_callback' => 'sen_travel_sanitize_switch_control',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
) );
$wp_customize->add_control( new Sen_Travel_Switch_Control( $wp_customize, 'theme_options[show_header_contact_info]', array(
    'label'             => __( 'Show Contact Info', 'sen-travel' ),
    'section'           => 'top_bar_current_date_contact',
    'settings'         => 'theme_options[show_header_contact_info]',
    'on_off_label'      => sen_travel_switch_options(),    
    'active_callback' => 'topbar_contact_info_option',
) ) );

/** Location */
$wp_customize->add_setting( 'theme_options[header_location]', array(
    'default'           => $default['header_location'],
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control(
    'theme_options[header_location]',
    array(
        'label'           => __( 'Location', 'sen-travel' ),
        'description'     => __( 'Enter Location.', 'sen-travel' ),
        'section'         => 'top_bar_current_date_contact',
        'active_callback' => 'topbar_contact_info_option',
    )
);

/** Phone */
$wp_customize->add_setting( 'theme_options[header_phone]', array(
    'default'           => $default['header_phone'],
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control(
    'theme_options[header_phone]',
    array(
        'label'           => __( 'Phone', 'sen-travel' ),
        'description'     => __( 'Enter phone number.', 'sen-travel' ),
        'section'         => 'top_bar_current_date_contact',
        'active_callback' => 'topbar_contact_info_option',
    )
);

/** Email */
$wp_customize->add_setting( 
    'theme_options[header_email]', 
    array(
        'default'           => $default['header_email'],
        'sanitize_callback' => 'sanitize_email',
    ) 
);
$wp_customize->add_control(
    'theme_options[header_email]',
    array(
        'label'           => __( 'Email', 'sen-travel' ),
        'description'     => __( 'Enter valid email address.', 'sen-travel' ),
        'section'         => 'top_bar_current_date_contact',
        'active_callback' => 'topbar_contact_info_option',
    )
);


/** Header social links section */
$wp_customize->add_section(
    'header_social_links_section',
    array(
        'title'    => __( 'Social Links', 'sen-travel' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);

/** Header social links control */
$wp_customize->add_setting( 'theme_options[show_header_social_links]',
    array(
        'default'           =>  $default['show_header_social_links'],
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sen_travel_sanitize_switch_control',
    )
);
$wp_customize->add_control( new Sen_Travel_Switch_Control( $wp_customize, 'theme_options[show_header_social_links]',
    array(
        'label'             => __('Show Social Links On Topbar', 'sen-travel'),
        'section'           => 'header_social_links_section',
         'settings'         => 'theme_options[show_header_social_links]',
        'on_off_label'      => sen_travel_switch_options(),
    )
) );

// Setting social_links.
$wp_customize->add_setting( 'theme_options[header_social_link]', array(
    'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new Sen_Travel_Multi_Input_Custom_Control( $wp_customize, 'theme_options[header_social_link]', array(
    'label'             => esc_html__( 'Social Links', 'sen-travel' ),
    'button_text'       => esc_html__( 'Add list.', 'sen-travel' ),
    'section'           => 'header_social_links_section',
    'type'              => 'url',
) ) );

/** Header social links section */
$wp_customize->add_section(
    'header_search_section',
    array(
        'title'    => __( 'Search Form/ Login Botton', 'sen-travel' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[search_login_layout]', array(
    'default'           => $default['search_login_layout'],
    'sanitize_callback' => 'sen_travel_sanitize_select', 
    'type'              => 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[search_login_layout]', array(
    'label'             => esc_html__( 'Choose Search or Login/Register', 'sen-travel' ),
    'section'           => 'header_search_section',
    'type'              => 'radio',
    'choices'               => array( 
        'search-login-none'     => esc_html__( 'None', 'sen-travel' ), 
        'search-form-option'     => esc_html__( 'Search Form', 'sen-travel' ), 
        'login-option'     => esc_html__( 'Login Button', 'sen-travel' ),
        )
) );


// Login Button Text
$wp_customize->add_setting('theme_options[top_login_text]', 
    array(
    'default'           => $default['top_login_text'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',    
    'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control('theme_options[top_login_text]', 
    array(
    'label'       => __('Login Text', 'sen-travel'),
    'section'     => 'header_search_section',   
    'settings'    => 'theme_options[top_login_text]',   
    'type'        => 'text'
    )
);
// Login Button Url
$wp_customize->add_setting('theme_options[top_login_url]', 
    array(
    'default'           => $default['top_login_url'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',    
    'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control('theme_options[top_login_url]', 
    array(
    'label'       => __('Login Links', 'sen-travel'),
    'section'     => 'header_search_section',   
    'settings'    => 'theme_options[top_login_url]',  
    'type'        => 'url'
    )
);

// Register Button Text
$wp_customize->add_setting('theme_options[top_register_text]', 
    array(
    'default'           => $default['top_register_text'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',    
    'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control('theme_options[top_register_text]', 
    array(
    'label'       => __('Register Text', 'sen-travel'),
    'section'     => 'header_search_section',   
    'settings'    => 'theme_options[top_register_text]',   
    'type'        => 'text'
    )
);
// Register Button Url
$wp_customize->add_setting('theme_options[top_register_url]', 
    array(
    'default'           => $default['top_register_url'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',    
    'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control('theme_options[top_register_url]', 
    array(
    'label'       => __('Register Links', 'sen-travel'),
    'section'     => 'header_search_section',   
    'settings'    => 'theme_options[top_register_url]',    
    'type'        => 'url'
    )
);

/** Header contact info section */
$wp_customize->add_section(
    'top_bar_color_options',
    array(
        'title'    => __( 'Top Bar Color Options', 'sen-travel' ),
        'panel'    => 'header_top_panel',
        'priority' => 10,
    )
);
/** Topbar links control */
$wp_customize->add_setting( 'theme_options[show_topbar]',
    array(
        'default'           =>  $default['show_topbar'],
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sen_travel_sanitize_switch_control',
    )
);
$wp_customize->add_control( new Sen_Travel_Switch_Control( $wp_customize, 'theme_options[show_topbar]',
    array(
        'label'             => __('Enable/Disable Topbar', 'sen-travel'),
        'section'           => 'top_bar_color_options',
         'settings'         => 'theme_options[show_topbar]',
        'on_off_label'      => sen_travel_switch_options(),
    )
) );

$wp_customize->add_setting( 'theme_options[topbar_color]', array(
    'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
    'default'           => $default['topbar_color'],
    
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[topbar_color]', array(
    'label'    => esc_html__( 'Topbar Font Color Scheme', 'sen-travel' ),
    'section'  => 'top_bar_color_options',
) ) );


$wp_customize->add_setting( 'theme_options[topbar_background_color]', array(
    'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
    'default'           => $default['topbar_background_color'],
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[topbar_background_color]', array(
    'label'    => esc_html__( 'Topbar Background Color Scheme', 'sen-travel' ),
    'section'  => 'top_bar_color_options',
) ) );