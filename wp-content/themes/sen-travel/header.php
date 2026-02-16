<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sen Travel
 */
/**
* Hook - sen_travel_action_doctype.
*
* @hooked sen_travel_doctype -  10
*/
do_action( 'sen_travel_action_doctype' );
?>
<head>
<?php
/**
* Hook - sen_travel_action_head.
*
* @hooked sen_travel_head -  10
*/
do_action( 'sen_travel_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php

/**
* Hook - sen_travel_action_before.
*
* @hooked sen_travel_page_start - 10
*/
do_action( 'sen_travel_action_before' );

/**
*
* @hooked sen_travel_header_start - 10
*/
do_action( 'sen_travel_action_before_header' );

/**
*
*@hooked sen_travel_site_branding - 10
*@hooked sen_travel_header_end - 15 
*/
do_action('sen_travel_action_header');

/**
*
* @hooked sen_travel_content_start - 10
*/
do_action( 'sen_travel_action_before_content' );

/**
 * Banner start
 * 
 * @hooked sen_travel_banner_header - 10
*/
do_action( 'sen_travel_banner_header' );  
