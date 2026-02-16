<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sen Travel
 */
get_header(); 
$sen_travel_latest_post_column = sen_travel_get_option( 'number_of_latest_posts_column' );
$sen_travel_latest_section_posts_title = sen_travel_get_option( 'latest_section_posts_title' );
$sen_travel_blog_layout_content_type = sen_travel_get_option( 'blog_layout_content_type' ); ?>
	<div class="wrapper page-section">
		<?php if( !empty($sen_travel_latest_section_posts_title) && 'posts' == get_option( 'show_on_front' )):?>
			<div class="section-header">
			   <?php if( !empty($sen_travel_latest_section_posts_title)):?>
	                <h2 class="section-title blog-page-title"><?php echo esc_html($sen_travel_latest_section_posts_title);?></h2>
	            <?php endif;?>
	        </div>
		<?php endif;?>
		<div id="primary" class="content-area clear">
			<main id="main" class="site-main blog-posts-wrapper" role="main">
				<div id="infinite-post-wrap" class="
					<?php if($sen_travel_blog_layout_content_type == 'blog-one'|| $sen_travel_blog_layout_content_type == 'blog-five') { ?>
						col-<?php echo esc_attr($sen_travel_latest_post_column) ?>
			 			<?php if(($sen_travel_latest_post_column > 1) && $sen_travel_blog_layout_content_type == 'blog-one') { ?> 
			 				grid 
			 			<?php }
			 		} elseif($sen_travel_blog_layout_content_type == 'blog-two'|| $sen_travel_blog_layout_content_type == 'blog-three'|| $sen_travel_blog_layout_content_type == 'blog-four'){ ?> 
			 			col-1 
			 		<?php } elseif($sen_travel_blog_layout_content_type == 'blog-six'){ ?> 
			 			col-2
			 		<?php } elseif($sen_travel_blog_layout_content_type == 'blog-seven'){ ?> 
			 			grid
			 		<?php } ?>
				">
				
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!-- .blog-archive-wrapper -->
				<?php 	/**
			* Hook - sen_travel_pagination_action.
			*
			* @hooked sen_travel_pagination 
			*/
			 do_action('sen_travel_pagination_action');?>
			</main><!-- #main -->
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
	</div><!-- .wrapper/.page-section-->
<?php 
get_footer();