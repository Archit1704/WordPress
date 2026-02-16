<?php
/**
 * Load files.
 *
 * @package Sen Travel
 */
/**
 * Include default theme options.
 */
require get_template_directory() . '/inc/customizer/default.php';

/**
 * Load hooks.
 */
require get_template_directory() . '/inc/hook/structure.php';
require get_template_directory() . '/inc/hook/custom.php'; 
require get_template_directory() . '/inc/hook/basic.php';



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Svg Icons Fuction
 */
require get_template_directory() . '/inc/svg-functions.php';

// Load home page sections option.
include get_template_directory() . '/inc/tgm-plugin/tgm-hook.php';

// Load home page sections option.
require get_template_directory() . '/inc/elementor/elementor-widget.php';