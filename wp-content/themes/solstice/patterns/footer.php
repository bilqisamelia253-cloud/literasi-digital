<?php
/**
 * Title: Footer
 * Slug: solstice/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"footer"},"style":{"border":{"radius":{"topLeft":"60px","topRight":"60px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"theme-2","textColor":"custom-color-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-6-color has-theme-2-background-color has-text-color has-background has-link-color" style="border-top-left-radius:60px;border-top-right-radius:60px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":30} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","fontFamily":"plus-jakarta-sans"} /--></div>
<!-- /wp:group -->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","fontSize":"small"} -->
<p class="has-theme-5-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sQuick links%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Services', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Why us', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Reviews', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Service area', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'FAQ', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","fontSize":"small"} -->
<p class="has-theme-5-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sContact%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5"} -->
<p class="has-theme-5-color has-text-color has-link-color"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$s(800) 555-0198%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Available 24 hours a day, 7 days a week for emergencies.', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"align":"wide","backgroundColor":"custom-color-9"} -->
<hr class="wp-block-separator alignwide has-text-color has-custom-color-9-color has-alpha-channel-opacity has-custom-color-9-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"custom-1"} /-->

<!-- wp:paragraph {"fontSize":"custom-1"} -->
<p class="has-custom-1-font-size"><?php
/* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'solstice' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '">', '</a>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->