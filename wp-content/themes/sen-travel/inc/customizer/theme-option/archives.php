<?php
/**
 * Home Page Options.
 *
 * @package Sen Travel
 */

$default = sen_travel_get_default_theme_options();

// Latest Latest Posts Section
$wp_customize->add_section( 'section_home_latest_posts',
	array(
		'title'      => __( 'Blog And Archive', 'sen-travel' ),
		'priority'   => 110,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
		)
);
$wp_customize->add_setting('theme_options[blog_layout_content_type]', 
	array(
	'default' 			=> $default['blog_layout_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sen_travel_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[blog_layout_content_type]', 
	array(
	'label'       => __('Blog And Archive page layout Content Type', 'sen-travel'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[blog_layout_content_type]',		
	'type'        => 'select',
	'choices'	  => array(
			'blog-one'	  => __('Design One','sen-travel'),
			'blog-two'	  => __('Design Two','sen-travel'),
		),
	)
);
// Latest Posts title
$wp_customize->add_setting('theme_options[latest_posts_title]', 
	array(
	'default'           => $default['latest_posts_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_posts_title]', 
	array(
	'label'       => __('Static Blog Page Header Title', 'sen-travel'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_posts_title]',		
	'type'        => 'text'
	)
);

// Latest Posts title
$wp_customize->add_setting('theme_options[latest_section_posts_title]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_section_posts_title]', 
	array(
	'label'       => __('Blog Page Header Title', 'sen-travel'),
	'description' => __('This Setting works on the Latest posts option chosen as the Homepage Setting.', 'sen-travel'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_section_posts_title]',		
	'type'        => 'text'
	)
);

// Setting excerpt_length.
$wp_customize->add_setting( 'theme_options[excerpt_length]', array(
	'default'           => $default['excerpt_length'],
	'sanitize_callback' => 'sen_travel_sanitize_positive_integer',
) );
$wp_customize->add_control( 'theme_options[excerpt_length]', array(
	'label'       => esc_html__( 'Excerpt Length', 'sen-travel' ),
	'description' => esc_html__( 'in words', 'sen-travel' ),
	'section'     => 'section_home_latest_posts',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 1, 'max' => 200, 'style' => 'width: 55px;' ),
) );

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[archive_content_align]', array(
	'default'           => $default['archive_content_align'],
	'sanitize_callback' => 'sen_travel_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[archive_content_align]', array(
	'label'             => esc_html__( 'Choose Content Align', 'sen-travel' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'radio',
	'choices'				=> array( 
		'content-right'     => esc_html__( 'Right Side', 'sen-travel' ), 
		'content-center'     => esc_html__( 'Center Side', 'sen-travel' ), 
		'content-left'     => esc_html__( 'Left Side', 'sen-travel' ), 
		'content-justify'     => esc_html__( 'Justify', 'sen-travel' ),
		)
) );


// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_content_enable]', array(
	'default'           => $default['latest_content_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_content_enable]', array(
	'label'             => esc_html__( 'Enable Content', 'sen-travel' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );
// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_category_enable]', array(
	'default'           => $default['latest_category_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_category_enable]', array(
	'label'             => esc_html__( 'Enable Category', 'sen-travel' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );
// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_author_enable]', array(
	'default'           => $default['latest_author_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_author_enable]', array(
	'label'             => esc_html__( 'Enable Author', 'sen-travel' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );
// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_comment_enable]', array(
	'default'           => $default['latest_comment_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_comment_enable]', array(
	'label'             => esc_html__( 'Enable Comment', 'sen-travel' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );
// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_read_more_text_enable]', array(
	'default'           => $default['latest_read_more_text_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_read_more_text_enable]', array(
	'label'             => esc_html__( 'Enable Read More Text', 'sen-travel' ),
	'description' => __('Enable read more text inside content and disable read more button.', 'sen-travel'),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );

// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_posted_on_enable]', array(
	'default'           => $default['latest_posted_on_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_posted_on_enable]', array(
	'label'             => esc_html__( 'Enable Date', 'sen-travel' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_video_enable]', array(
	'default'           => $default['latest_video_enable'],
	'sanitize_callback' => 'sen_travel_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_video_enable]', array(
	'label'             => esc_html__( 'Enable Featured Video', 'sen-travel' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );


$wp_customize->add_setting('theme_options[latest_readmore_text]', 
	array(
	'default'           => $default['latest_readmore_text'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_readmore_text]', 
	array(
	'label'       => __('Button Label', 'sen-travel'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_readmore_text]',	
	'type'        => 'text'
	)
);

$wp_customize->add_setting('theme_options[pagination_type]', 
	array(
	'default' 			=> $default['pagination_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sen_travel_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[pagination_type]', 
	array(
	'label'       => __('Pagination Type', 'sen-travel'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[pagination_type]',		
	'type'        => 'select',
	'choices'	  => array(
		'default' 		=> esc_html__( 'Default', 'sen-travel' ),
		'numeric' 		=> esc_html__( 'Numeric', 'sen-travel' ),
		),
	)
);