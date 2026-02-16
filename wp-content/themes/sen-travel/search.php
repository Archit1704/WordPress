<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sen Travel
 */

get_header(); 
$sen_travel_latest_post_column = sen_travel_get_option( 'number_of_latest_posts_column' );
$sen_travel_blog_layout_content_type = sen_travel_get_option( 'blog_layout_content_type' );?>
<div class="wrapper page-section">
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
				if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		<?php 	/**
			* Hook - sen_travel_pagination_action.
			*
			* @hooked sen_travel_pagination 
			*/
			 do_action('sen_travel_pagination_action'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php

get_footer();
