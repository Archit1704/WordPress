<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Sen Travel
 */

if ( ! function_exists( 'sen_travel_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
function sen_travel_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
}
endif;

add_action( 'sen_travel_action_doctype', 'sen_travel_doctype', 10 );


if ( ! function_exists( 'sen_travel_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
function sen_travel_head() {
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php
}
endif;
add_action( 'sen_travel_action_head', 'sen_travel_head', 10 );

if ( ! function_exists( 'sen_travel_page_start' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function sen_travel_page_start() { 
		$loader_enable = sen_travel_get_option( 'preloader_loader_enable' );
	?><div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'sen-travel' ); ?>
		</a>
		<?php if ($loader_enable==true): ?>
			<div id="loader">
				<div class="loader-container">
					<div id="preloader">
						<?php sen_travel_preloader(); ?>
					</div>
				</div>
			</div>
		<?php endif ?>
	<?php
	}
endif;

add_action( 'sen_travel_action_before', 'sen_travel_page_start', 10 );

if ( ! function_exists( 'sen_travel_header_start' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function sen_travel_header_start() { ?>
		<header id="masthead" class="site-header nav-shrink" role="banner">
	<?php }
endif;
add_action( 'sen_travel_action_before_header', 'sen_travel_header_start' );

if ( ! function_exists( 'sen_travel_header_end' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function sen_travel_header_end() {

		?></header> <!-- header ends here --><?php
	}
endif;
add_action( 'sen_travel_action_header', 'sen_travel_header_end', 15 );

if ( ! function_exists( 'sen_travel_content_start' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function sen_travel_content_start() { 
	?>
	<div id="content" class="site-content">
	<?php 

	}
endif;

add_action( 'sen_travel_action_before_content', 'sen_travel_content_start', 10 );

if ( ! function_exists( 'sen_travel_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function sen_travel_footer_start() {
		if( !(is_home() || is_front_page()) ){  
			echo '</div>';
		} ?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			
		<?php if ( true === sen_travel_get_option('scroll_top_visible') ) : ?>
			<div class="backtotop"><i class="fa fa-chevron-up"></i></div>
		<?php endif;
	} 
endif;
add_action( 'sen_travel_action_before_footer', 'sen_travel_footer_start' );


if ( ! function_exists( 'sen_travel_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function sen_travel_footer_end() {?>

		</footer><?php
	}
endif;
add_action( 'sen_travel_action_after_footer', 'sen_travel_footer_end', 100 );

