<?php
/**
 * Title: Blog index
 * Slug: solstice/index
 * Inserter: no
 */
?>
<!-- wp:cover {"isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"dvh","gradient":"hero","metadata":{"name":"Hero"},"style":{"border":{"radius":{"bottomLeft":"60px","bottomRight":"60px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"@mobile":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-bottom-left-radius:60px;border-bottom-right-radius:60px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:50dvh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-hero-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"50dvh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignfull" style="min-height:50dvh"><!-- wp:template-part {"slug":"header-light-text","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"theme-3","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}},"color":{"background":"#ff6a0017"},"border":{"width":"0.01em"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"custom-1"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-theme-3-color has-text-color has-background has-link-color has-custom-1-font-size has-custom-font-size wp-element-button" style="border-width:0.01em;background-color:#ff6a0017;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sBlog%2$s', 'solstice' ), '<strong>', '</strong>' );
?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}},"fontSize":"2-x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-2-x-large-font-size"><?php esc_html_e( 'HVAC Tips &amp; Insights', 'solstice' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6"} -->
<p class="has-text-align-center has-custom-color-6-color has-text-color has-link-color"><?php esc_html_e( 'Expert advice on maintenance, repairs, and keeping your home perfectly comfortable year-round.', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"20px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"0","top":"0","left":"0","right":"0"},"margin":{"top":"0"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}},"backgroundColor":"theme-5","borderColor":"theme-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-theme-4-border-color has-theme-5-background-color has-background" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;margin-top:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"textColor":"theme-2"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e( 'Read more →', 'solstice' ); ?>","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e( 'Previous', 'solstice' ); ?>"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e( 'Next', 'solstice' ); ?>"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->