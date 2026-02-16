<?php
/**
 * The template for displaying home page.
 * @package Sen Travel
 */


    get_header();
    if('posts' == get_option( 'show_on_front' )){ ?>
      <div class="wrapper">
       <?php include( get_home_template() ); ?>
    </div>
    <?php } elseif('posts' != get_option( 'show_on_front' )) { ?>
        <div class="wrapper">
           <?php include( get_page_template() ); ?>
        </div>
     <?php  }
    get_footer();
  ?>