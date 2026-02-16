<?php
/**
 * Sen Travel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sen Travel
 */


if ( ! function_exists( 'sen_travel_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sen_travel_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sen Travel, use a find and replace
	 * to change 'sen-travel' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sen-travel', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'sen-travel-gallery', 500, 500, true);
	add_image_size( 'sen-travel-team', 400, 450, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'sen-travel' ),
	) );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo' , array(
		'height'		=>45,	
		'width'			=>45,	
		'flex-height'	=>true,	
		'flex-width'	=>true,
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sen_travel_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, icons, and column width.
	*/
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	add_editor_style( array( '/assets/css/editor-style' . $min . '.css', sen_travel_fonts_url() ) );

	// Gutenberg support
	add_theme_support( 'editor-color-palette', array(
       	array(
			'name' => esc_html__( 'Tan', 'sen-travel' ),
			'slug' => 'tan',
			'color' => '#E6DBAD',
       	),
       	array(
           	'name' => esc_html__( 'Yellow', 'sen-travel' ),
           	'slug' => 'yellow',
           	'color' => '#FDE64B',
       	),
       	array(
           	'name' => esc_html__( 'Orange', 'sen-travel' ),
           	'slug' => 'orange',
           	'color' => '#ED7014',
       	),
       	array(
           	'name' => esc_html__( 'Red', 'sen-travel' ),
           	'slug' => 'red',
           	'color' => '#D0312D',
       	),
       	array(
           	'name' => esc_html__( 'Pink', 'sen-travel' ),
           	'slug' => 'pink',
           	'color' => '#b565a7',
       	),
       	array(
           	'name' => esc_html__( 'Purple', 'sen-travel' ),
           	'slug' => 'purple',
           	'color' => '#A32CC4',
       	),
       	array(
           	'name' => esc_html__( 'Blue', 'sen-travel' ),
           	'slug' => 'blue',
           	'color' => '#3A43BA',
       	),
       	array(
           	'name' => esc_html__( 'Green', 'sen-travel' ),
           	'slug' => 'green',
           	'color' => '#3BB143',
       	),
       	array(
           	'name' => esc_html__( 'Brown', 'sen-travel' ),
           	'slug' => 'brown',
           	'color' => '#231709',
       	),
       	array(
           	'name' => esc_html__( 'Grey', 'sen-travel' ),
           	'slug' => 'grey',
           	'color' => '#6C626D',
       	),
       	array(
           	'name' => esc_html__( 'Black', 'sen-travel' ),
           	'slug' => 'black',
           	'color' => '#000000',
       	),
   	));

	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-font-sizes', array(
	   	array(
	       	'name' => esc_html__( 'small', 'sen-travel' ),
	       	'shortName' => esc_html__( 'S', 'sen-travel' ),
	       	'size' => 12,
	       	'slug' => 'small'
	   	),
	   	array(
	       	'name' => esc_html__( 'regular', 'sen-travel' ),
	       	'shortName' => esc_html__( 'M', 'sen-travel' ),
	       	'size' => 16,
	       	'slug' => 'regular'
	   	),
	   	array(
	       	'name' => esc_html__( 'larger', 'sen-travel' ),
	       	'shortName' => esc_html__( 'L', 'sen-travel' ),
	       	'size' => 36,
	       	'slug' => 'larger'
	   	),
	   	array(
	       	'name' => esc_html__( 'huge', 'sen-travel' ),
	       	'shortName' => esc_html__( 'XL', 'sen-travel' ),
	       	'size' => 48,
	       	'slug' => 'huge'
	   	)
	));
	add_theme_support('editor-styles');
	add_theme_support( 'wp-block-styles' );

	/**
	 * Load init.
	 */
	require_once get_template_directory() . '/inc/init.php';

	require get_template_directory() . '/inc/customizer/widgets/widgets.php';
	// Load Jetpack compatibility file.
	if ( defined( 'JETPACK__VERSION' ) ) {
		require get_parent_theme_file_path() . '/inc/jetpack.php';
	}

	if ( class_exists( 'WooCommerce' ) ) {
		// Load home page sections option.
		include get_template_directory() . '/inc/woocommerce/template-functions.php';

		// Load home page sections option.
		include get_template_directory() . '/inc/woocommerce/woocommerce.php';
	}
	/**
	 * Webfont Loader.
	 */
	require get_template_directory() . '/inc/wptt-webfont-loader.php';
}
endif;
add_action( 'after_setup_theme', 'sen_travel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sen_travel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sen_travel_content_width', 640 );
}
add_action( 'after_setup_theme', 'sen_travel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sen_travel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sen-travel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sen-travel' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'sen-travel' ), 1 ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'sen-travel' ), 2 ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'sen-travel' ), 3 ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'sen-travel' ), 4 ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sen_travel_widgets_init' );

/**
 * Register custom fonts.
 */
function sen_travel_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Rajdhani, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Rajdhani font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Rajdhani';
	}
	
	/* translators: If there are characters in your language that are not supported by Bad Script, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Bad Script font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Bad Script';
	}
	
	/* translators: If there are characters in your language that are not supported by Righteous, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Righteous font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Righteous';
	}
	/* translators: If there are characters in your language that are not supported by EB Garamond, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'EB Garamond font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'EB Garamond';
	}
	/* translators: If there are characters in your language that are not supported by Roboto, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Roboto:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Dosis, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Dosis font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Dosis';
	}

	/* translators: If there are characters in your language that are not supported by Orbitron, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Orbitron font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Orbitron';
	}

	/* translators: If there are characters in your language that are not supported by Gloria Hallelujah, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Gloria Hallelujah font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Gloria Hallelujah';
	}

	/* translators: If there are characters in your language that are not supported by Dancing Script, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Dancing Script font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Dancing Script';
	}
	/* translators: If there are characters in your language that are not supported by Cinzel Decorative, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Cinzel Decorative font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Cinzel Decorative';
	}

	/* translators: If there are characters in your language that are not supported by Fredericka the Great, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Fredericka the Great font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Fredericka the Great';
	
	}
	
	/* translators: If there are characters in your language that are not supported by Roboto Slab, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Gilda Display: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Gilda Display:300,400,500,600,700';
	}

	// Header Options

	/* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Poppins';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Montserrat:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Quicksand, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Quicksand font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Quicksand:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Open Sans';
	}

	/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Lato:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Ubuntu, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Ubuntu font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Ubuntu';
	}

	/* translators: If there are characters in your language that are not supported by Maven Pro, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Maven Pro font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Maven Pro';
	}

	/* translators: If there are characters in your language that are not supported by Cairo, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Cairo font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Cairo';
	}

	/* translators: If there are characters in your language that are not supported by Oxygen, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Oxygen font: on or off', 'sen-travel' ) ) {
		$fonts[] = 'Oxygen';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function sen_travel_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	$fonts_url = sen_travel_fonts_url();
	$primary_color = sen_travel_get_option( 'primary_color' );
	
		wp_enqueue_style( 'sen-travel-google-fonts', $fonts_url, array(), null );
	
	wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/assets/css/all' . $min . '.css', '', '4.7.0' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome' . $min . '.css', '', '4.7.0' );

	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() .'/assets/css/slick-theme' . $min . '.css', '', 'v2.2.0');

	wp_enqueue_style( 'slick-css', get_template_directory_uri() .'/assets/css/slick' . $min . '.css', '', 'v1.8.0');

	wp_enqueue_style( 'sen-travel-blocks', get_template_directory_uri() . '/assets/css/blocks' . $min . '.css' );

	wp_enqueue_style( 'sen-travel-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/js/slick' . $min . '.js', array('jquery'), '2017417', true );

	wp_enqueue_script( 'jquery-match-height', get_template_directory_uri() . '/assets/js/jquery.matchHeight' . $min . '.js', array('jquery'), '2017417', true );
 
	wp_enqueue_script( 'imagesloaded' );
	
	wp_enqueue_script( 'jquery-packery', get_template_directory_uri() . '/assets/js/packery.pkgd' . $min . '.js', array('jquery'), '2017417', true );

	wp_enqueue_script( 'sen-travel-navigation', get_template_directory_uri() . '/assets/js/navigation' . $min . '.js', array(), '20151215', true );

	wp_enqueue_script( 'sen-travel-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . $min . '.js', array(), '20151215', true );

	wp_enqueue_script( 'sen-travel-custom-js', get_template_directory_uri() . '/assets/js/custom' . $min . '.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sen_travel_scripts' );
function sen_travel_enqueue_slick_assets() {
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() .'/assets/css/slick-theme.min.css', '', 'v2.2.0');

	wp_enqueue_style( 'slick-css', get_template_directory_uri() .'/assets/css/slick.min.css', '', 'v1.8.0');
	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '2017417', true );
}
add_action( 'wp_enqueue_scripts', 'sen_travel_enqueue_slick_assets' );

// Load in Elementor Preview
add_action( 'elementor/frontend/after_enqueue_styles', 'sen_travel_enqueue_slick_assets' );
add_action( 'elementor/frontend/after_register_scripts', 'sen_travel_enqueue_slick_assets' );

function sen_travel_enqueue_custom_slick_script() {
    wp_enqueue_script(
        'custom-slick-init',
        get_template_directory_uri() . '/assets/js/custom-slick-init.js',
        array( 'jquery', 'jquery-slick' ), // important!
        '2017417',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'sen_travel_enqueue_custom_slick_script' );
add_action( 'elementor/frontend/after_register_scripts', 'sen_travel_enqueue_custom_slick_script' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since Safar Lite 1.0.0
 */
function sen_travel_block_editor_styles() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Block styles.
	wp_enqueue_style( 'sen-travel-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks' . $min . '.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'sen-travel-fonts', sen_travel_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'sen_travel_block_editor_styles' );

function sen_travel_ocdi_import_files() {
    return array(
        array(
            'import_file_name'           => esc_html__( 'Sen Travel', 'sen-travel' ),
            'import_file_url'            => 'http://www.demo.sensationaltheme.com/demo/sen/sen-travel/free/contents.xml',
            'import_widget_file_url'     => 'http://www.demo.sensationaltheme.com/demo/sen/sen-travel/free/widgets.wie',
            'import_customizer_file_url' => 'http://www.demo.sensationaltheme.com/demo/sen/sen-travel/free/customizer.dat',
            'import_preview_image_url'   => 'http://www.demo.sensationaltheme.com/demo/sen/sen-travel/free/screenshot.png',
            'preview_url'                => 'http://demo.sensationaltheme.com/sen-travel/',
        ),

    );
}
add_filter( 'pt-ocdi/import_files', 'sen_travel_ocdi_import_files' );

/**
 * 
 * Automatically assign "Front page", "Posts page" and menu locations after the importer is done
 * 
 */
function sen_travel_ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Header Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Front Page' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'sen_travel_ocdi_after_import_setup' );

// Disable the ProteusThemes branding notice after successful demo import
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';