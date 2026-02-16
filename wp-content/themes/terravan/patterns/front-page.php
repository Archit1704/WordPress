<?php
/**
 * Title: front-page
 * Slug: terravan/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#fff8f2"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<main class="wp-block-group has-background" style="background-color:#fff8f2;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Split Hero"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-right:0;padding-left:0;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/water-sky-boardwalk-track-sunset-bridge-1071720-pxhere.com_.jpg","dimRatio":0,"customOverlayColor":"#a7a3a0","isUserOverlayColor":false,"minHeight":690,"isDark":false,"sizeSlug":"full","align":"center","style":{"border":{"radius":{"topLeft":"22px","topRight":"22px","bottomLeft":"22px","bottomRight":"22px"}}}} -->
<div class="wp-block-cover aligncenter is-light" style="border-top-left-radius:22px;border-top-right-radius:22px;border-bottom-left-radius:22px;border-bottom-right-radius:22px;min-height:690px"><img class="wp-block-cover__image-background  size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/water-sky-boardwalk-track-sunset-bridge-1071720-pxhere.com_.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a7a3a0"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"},"border":{"radius":{"topLeft":"26px","topRight":"26px","bottomLeft":"26px","bottomRight":"26px"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="border-top-left-radius:26px;border-top-right-radius:26px;border-bottom-left-radius:26px;border-bottom-right-radius:26px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);flex-basis:50%"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontStyle":"normal","fontWeight":"500"}},"textColor":"additional-brown","fontSize":"small"} -->
<p class="has-additional-brown-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e('Building brands', 'terravan');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.05","fontSize":"4.5rem"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}},"fontFamily":"eb-garamond"} -->
<h1 class="wp-block-heading has-eb-garamond-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40);font-size:4.5rem;line-height:1.05"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the start of a 'strong' HTML element, 3. is the end of a 'strong' HTML element, 4. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( 'We design digital experiences that turn %1$s%2$sattention into trust%3$s%4$s', 'terravan' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-additional-brown-color">', '<strong>', '</strong>', '</mark>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"primary-second","fontSize":"medium","fontFamily":"dmsans"} -->
<p class="has-primary-second-color has-text-color has-dmsans-font-family has-medium-font-size" style="line-height:1.7"><?php esc_html_e('Your website is often the first conversation people have with your brand. We help businesses shape clear, confident, and meaningful experiences that connect, communicate, and convert naturally.', 'terravan');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('3250+ clients', 'terravan');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary-second","fontSize":"small"} -->
<p class="has-primary-second-color has-text-color has-small-font-size"><?php esc_html_e('Helped By Us', 'terravan');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"additional-light","className":"is-style-outline","style":{"color":{"background":"#462a08"},"elements":{"link":{"color":{"text":"var:preset|color|additional-light"}}},"border":{"radius":{"topLeft":"37px","topRight":"37px","bottomLeft":"37px","bottomRight":"37px"}}},"fontSize":"medium"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-additional-light-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" href="#work" style="border-top-left-radius:37px;border-top-right-radius:37px;border-bottom-left-radius:37px;border-bottom-right-radius:37px;background-color:#462a08"><?php esc_html_e('Start your project', 'terravan');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Services"},"style":{"spacing":{"padding":{"top":"5.6rem","bottom":"5.6rem","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:5.6rem;padding-right:0;padding-bottom:5.6rem;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"xx-large","fontFamily":"eb-garamond"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-eb-garamond-font-family has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--20);font-style:normal;font-weight:600"><?php esc_html_e('A thoughtful approach to building digital presence', 'terravan');?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"additional-light","className":"is-style-outline","style":{"color":{"background":"#462a08"},"elements":{"link":{"color":{"text":"var:preset|color|additional-light"}}},"border":{"radius":{"topLeft":"37px","topRight":"37px","bottomLeft":"37px","bottomRight":"37px"}}},"fontSize":"medium"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-additional-light-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" href="#work" style="border-top-left-radius:37px;border-top-right-radius:37px;border-bottom-left-radius:37px;border-bottom-right-radius:37px;background-color:#462a08"><?php esc_html_e('Learn more about us', 'terravan');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional-brown"}}},"typography":{"lineHeight":"1.6"}},"textColor":"additional-brown","fontSize":"large","fontFamily":"dmsans"} -->
<p class="has-additional-brown-color has-text-color has-link-color has-dmsans-font-family has-large-font-size" style="line-height:1.6"><?php esc_html_e('We believe strong digital work starts with understanding, not assumptions. Before design or development begins, we take time to learn how your business works, what matters to your audience, and where clarity is missing. This process allows us to create websites and digital platforms that feel intentional, easy to navigate, and aligned with real goals. ', 'terravan');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"style":{"border":{"radius":{"topLeft":"18px","topRight":"18px","bottomLeft":"18px","bottomRight":"18px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"shadow":"none"},"backgroundColor":"background"} -->
<div class="wp-block-column has-background-background-color has-background" style="border-top-left-radius:18px;border-top-right-radius:18px;border-bottom-left-radius:18px;border-bottom-right-radius:18px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);box-shadow:none"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-large","fontFamily":"eb-garamond"} -->
<h2 class="wp-block-heading has-eb-garamond-font-family has-xx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Our Goals', 'terravan');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('We focus on structure, performance, and long term consistency, helping brands communicate with confidence while leaving space to grow, adapt, and evolve over time.', 'terravan');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":{"topLeft":"18px","topRight":"18px","bottomLeft":"18px","bottomRight":"18px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background"} -->
<div class="wp-block-column has-background-background-color has-background" style="border-top-left-radius:18px;border-top-right-radius:18px;border-bottom-left-radius:18px;border-bottom-right-radius:18px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-large","fontFamily":"eb-garamond"} -->
<h2 class="wp-block-heading has-eb-garamond-font-family has-xx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Our Values', 'terravan');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('We value clarity over noise and purpose over trends. Every project starts with honest conversations and clear intentions, because strong results come from understanding, not shortcuts.', 'terravan');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/desk-writing-work-hand-man-home-office-26343-pxhere.com_-1024x684.jpg","dimRatio":50,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":500,"sizeSlug":"large","metadata":{"name":"Quote"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50);min-height:500px"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/desk-writing-work-hand-man-home-office-26343-pxhere.com_-1024x684.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2","fontSize":"3.5rem"}},"textColor":"background","fontFamily":"eb-garamond"} -->
<p class="has-text-align-center has-background-color has-text-color has-eb-garamond-font-family" style="font-size:3.5rem;line-height:1.2"><?php esc_html_e('If your website no longer reflects your brand’s direction, it may be time to rethink how you show up online.', 'terravan');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"additional-light","textColor":"additional-brown","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|additional-brown"}}},"border":{"radius":{"topLeft":"37px","topRight":"37px","bottomLeft":"37px","bottomRight":"37px"}}},"fontSize":"medium"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-additional-brown-color has-additional-light-background-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" href="#work" style="border-top-left-radius:37px;border-top-right-radius:37px;border-bottom-left-radius:37px;border-bottom-right-radius:37px"><?php esc_html_e('Start a conversation', 'terravan');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->