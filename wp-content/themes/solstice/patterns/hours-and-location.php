<?php
/**
 * Title: Hours and location
 * Slug: solstice/hours-and-location
 * Categories: solstice
 */
?>
<!-- wp:group {"metadata":{"name":"Hours and location"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"align":"wide","fontSize":"2-x-large"} -->
<h2 class="wp-block-heading alignwide has-2-x-large-font-size"><?php esc_html_e( 'When we\'re open, and where we are', 'solstice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"theme-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-theme-5-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600"}},"textColor":"custom-color-10","fontSize":"custom-1"} -->
<p class="has-custom-color-10-color has-text-color has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Opening hours', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Monday – Friday', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textAlign":"right"}},"textColor":"theme-2","fontSize":"small"} -->
<p class="has-text-align-right has-theme-2-color has-text-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$s7:00 — 19:00%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"theme-4"} -->
<hr class="wp-block-separator has-text-color has-theme-4-color has-alpha-channel-opacity has-theme-4-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Saturday', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textAlign":"right"}},"textColor":"theme-2","fontSize":"small"} -->
<p class="has-text-align-right has-theme-2-color has-text-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$s8:00 — 14:00%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"theme-4"} -->
<hr class="wp-block-separator has-text-color has-theme-4-color has-alpha-channel-opacity has-theme-4-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Sunday', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textAlign":"right"}},"textColor":"theme-2","fontSize":"small"} -->
<p class="has-text-align-right has-theme-2-color has-text-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sEmergency only%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"backgroundColor":"theme-2","textColor":"custom-color-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-6-color has-theme-2-background-color has-text-color has-background has-link-color" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600"}},"textColor":"theme-3","fontSize":"custom-1"} -->
<p class="has-theme-3-color has-text-color has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Shop &amp; parts counter', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","fontSize":"large"} -->
<h3 class="wp-block-heading has-theme-5-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( '118 Foundry Row, Ashford', 'solstice' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Free parking behind the building. The counter is open to the public for filters and thermostats during shop hours.', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get directions', 'solstice' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->