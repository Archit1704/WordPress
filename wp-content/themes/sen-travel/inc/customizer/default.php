<?php
/**
 * Default theme options.
 *
 * @package Sen Travel
 */

if ( ! function_exists( 'sen_travel_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	
	function sen_travel_get_default_theme_options() {

		$theme_data = wp_get_theme();
		$defaults = array();

		$defaults['show_header_contact_info'] 	= true;
		$defaults['menu_btn_text'] 	= __( 'Hire Me','sen-travel' );
	    $defaults['menu_btn_url'] 	='#';
		$defaults['disable_homepage_content_section'] 			= false;
		$defaults['show_topbar'] 			= true;
		$defaults['topbar_layout_option'] 			= 'contact-info-option';
	    $defaults['header_email']             	= __( 'info@example.com','sen-travel' );
	    $defaults['header_phone' ]            	= __( '+1-541-754-3010','sen-travel' );
	    $defaults['header_location' ]           = __( 'London, UK','sen-travel' );
	    $defaults['enable_header_contact_info'] 	= true;
	    $defaults['header_email_text']             	= __( 'Email ID','sen-travel' );
	    $defaults['header_phone_text' ]            	= __( 'Free Call','sen-travel' );
	    $defaults['header_location_text' ]           = __( 'Visit Us','sen-travel' );
	    $defaults['header_email_address']             	= __( 'info@example.com','sen-travel' );
	    $defaults['header_phone_contact' ]            	= __( '+1-541-754-3010','sen-travel' );
	    $defaults['header_location_address' ]           = __( 'London, UK','sen-travel' );
	    $defaults['show_header_social_links'] 	= true;
	    $defaults['show_menu_social_links'] 	= true;
	    $defaults['header_social_links']		= array();
	    $defaults['disable_header_background_section'] = false;
	    $defaults['show_header_search'] 	= true;
	    $defaults['show_current_date'] 	= true;
	    $defaults['top_login_text'] 	= __( 'Login','sen-travel' );
	    $defaults['top_login_url'] 	='#';
	    $defaults['top_register_text'] 	= __( 'Register','sen-travel' );
	    $defaults['top_register_url'] 	= '#';
	    $defaults['search_login_layout'] 	= 'login-option';
	    $defaults['colorscheme_hue'] 	= '#ff4f00';
	    $defaults['medi_text_color'] 	= '#191B1D';
	    $defaults['medi_secondary_color'] 	= '#14457B';
	    $defaults['topbar_background_color'] 	= '#000';
	    $defaults['topbar_color'] 	= '#ffffff';
	    $defaults['enable_center_logo'] 	= true;
	    $defaults['enable_menu_social_links'] 	= false;


	    $defaults['menu_background_color'] 	= '#fff';
	    $defaults['menu_text_hover'] 	= 'menu-hover-none';
	    $defaults['header_text_hover'] 	= 'title-hover-none';
	    $defaults['number_of_menu_items'] 	= 6;
	    $defaults['preloader_loader_enable'] 	= false;
	    $defaults['preloader_loader_options'] 	= 'loader-1';
	    $defaults['header_text_transform_options'] 	= 'none';
	    $defaults['header_text_decoration_options'] 	= 'none';
	    $defaults['header_font_style_options'] 	= 'none';
	    $defaults['header_text_design'] 	= false;
	    $defaults['homepage_color_layout_options']			= 'lite-layout';
	    $defaults['header_layout_options']			= 'header-five';
	    $defaults['homepage_design_layout_options']			= 'home-main';
	    $defaults['homepage_sidebar_position']			= 'home-right-sidebar';
	    $defaults['header_top_buttom_padding']			= 10;

	    //Slider Section
		$defaults['disable_slider_section']	= true;
		$defaults['slider_title']	   	 		= esc_html__( 'Explore latest slider articles', 'sen-travel' );
		$defaults['slider_subtitle']	   	 	= esc_html__( 'Every sunrise brings a new opportunity to rewrite your story, to chase your dreams, and to embrace the magic of possibilities.', 'sen-travel' );
		$defaults['slider_see_all_txt']			= esc_html__( 'See All', 'sen-travel' );
		$defaults['number_of_slider_items']			= 6;
		$defaults['number_of_slider_column']			= 1;
		$defaults['slider_excerpt_length']			= 10;
		$defaults['slider_content_type']			= 'slider_category';
		$defaults['slider_content_align']			= 'content-left';
		$defaults['slider_background_color']			= '#F7A839';
		$defaults['slider_category_enable']		= false;
		$defaults['slider_posted_on_enable']		= true;
		$defaults['slider_author_enable']		= false;
		$defaults['slider_content_enable']		= false;

		// Latest News Section
		$defaults['latest_posts_title']	   	 	= esc_html__( 'Latest News', 'sen-travel' );
		$defaults['number_of_latest_posts_column']	= 2;
		$defaults['pagination_type']		= 'numeric';
		$defaults['latest_category_enable']		= true;
		$defaults['latest_author_enable']		= true;
		$defaults['latest_comment_enable']		= true;
		$defaults['latest_content_enable']		= true;
		$defaults['latest_read_more_text_enable']		= true;
		$defaults['latest_posted_on_enable']		= true;
		$defaults['latest_video_enable']		= false;
		$defaults['blog_layout_content_type']		= 'blog-one';
		$defaults['archive_content_align']		= 'content-left';
		$defaults['archive_post_header_title_enable']		= true;
		$defaults['archive_post_header_image_enable']		= false;
		$defaults['remove_category_text_archive_page']		= true;
		$defaults['blog_post_header_image_enable']		= false;
		$defaults['blog_post_header_title_enable']		= true;
		$defaults['background_image_enable']		= true;
		
		// Decoration Option
		$defaults['decoration_side_enable']		= true;
		

		// Category Design Option
		$defaults['category_design_content_type']		= 'category-six';
		$defaults['enable_category_icon']		= false;

		// Image Option
		$defaults['image_design_type']		= 'o-image';
		$defaults['enable_image_radius']		= false;
		

		// Single News Option
		$defaults['single_post_category_enable']		= true;
		$defaults['single_post_posted_on_enable']		= true;
		$defaults['single_post_video_enable']		= true;
		$defaults['single_post_comment_enable']		= true;
		$defaults['single_post_author_enable']		= true;
		$defaults['single_post_pagination_enable']		= true;
		$defaults['single_post_image_enable']		= true;
		$defaults['single_post_header_image_enable']		= false;
		$defaults['single_post_header_title_enable']		= true;
		$defaults['single_post_header_image_as_header_image_enable']		= false;
		$defaults['sen_travel_single_related_posts']		= true;
		$defaults['single_post_content_align']		= 'content-left';
		$defaults['sen_travel_single_related_post_title']		= esc_html__( 'Related Newss', 'sen-travel' );

		// Single Page Option
		$defaults['single_page_video_enable']		= true;
		$defaults['single_page_image_enable']		= true;
		$defaults['single_page_header_image_enable']		= false;
		$defaults['single_page_header_title_enable']		= true;
		$defaults['single_page_header_image_as_header_image_enable']		= false;
		$defaults['single_page_content_align']		= 'content-left';
		
		$defaults['theme_typography']			=  'default';
		$defaults['body_theme_typography']		=  'default';		
		$defaults['archive_typography']			=  'default';
		$defaults['body_archive_typography']		=  'default';		
		$defaults['page_typography']			=  'default';
		$defaults['body_page_typography']		=  'default';		
		$defaults['post_typography']			=  'default';
		$defaults['body_post_typography']		=  'default';		
		$defaults['site_title_typography']			=  'default';
		$defaults['site_tagline_typography']		=  'default';

		// animation
		$defaults['animation_slide_type']		= 'animation-b-t';
		$defaults['enable_animation']		= false;

		//Site Layout
		$defaults['site_layout_theme_options']			= 'default-site-layout';
		
		//General Section
		$defaults['latest_readmore_text']			= esc_html__('Read More','sen-travel');
		$defaults['excerpt_length']					= 30;
		$defaults['layout_options_blog']			= 'right-sidebar';
		$defaults['layout_options_archive']			= 'right-sidebar';
		$defaults['layout_options_page']			= 'right-sidebar';	
		$defaults['layout_options_single']			= 'right-sidebar';	

		//Footer section 
		$defaults['scroll_top_visible']		= true;		
		$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'sen-travel' );
		$defaults['powered_by_text']			= esc_html__( 'Sen Travel by Sensational Theme', 'sen-travel' );
		$defaults['enable_footer_background_image'] 	= true;
		$defaults['footer_copyright_font_color'] 	= '#fff';
		$defaults['footer_copyright_background_color'] 	= '#000';

		// Pass through filter.
		$defaults = apply_filters( 'sen_travel_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;


/**
*  Get theme options
*/
if ( ! function_exists( 'sen_travel_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function sen_travel_get_option( $key ) {

			$default_options = sen_travel_get_default_theme_options();
		
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;