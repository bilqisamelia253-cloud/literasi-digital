<?php
/**
 * Title: Service area
 * Slug: solstice/service-area
 * Categories: solstice
 */
?>
<!-- wp:group {"metadata":{"name":"Service area"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}},"@mobile":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"theme-2","textColor":"theme-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-theme-5-color has-theme-2-background-color has-text-color has-background has-link-color" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}},"@tablet":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}},"@mobile":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5"} -->
<h2 class="wp-block-heading has-theme-5-color has-text-color has-link-color"><?php esc_html_e( 'Prompt local service, right in your neighbourhood', 'solstice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6"} -->
<p class="has-custom-color-6-color has-text-color has-link-color"><?php esc_html_e( 'We’ve built our reputation by providing fast, reliable HVAC services across the metropolitan area. If you’re in our zone, you’re covered by our rapid-response guarantee.', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|orange"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6","fontSize":"small"} -->
<p class="has-custom-color-6-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sNorth Metro Area%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":null},"color":{"duotone":"var:preset|duotone|orange"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6","fontSize":"small"} -->
<p class="has-custom-color-6-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sWestside County%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":null},"color":{"duotone":"var:preset|duotone|orange"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6","fontSize":"small"} -->
<p class="has-custom-color-6-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sDowntown Core%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|orange"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6","fontSize":"small"} -->
<p class="has-custom-color-6-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sSouth Suburbs%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":null},"color":{"duotone":"var:preset|duotone|orange"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6","fontSize":"small"} -->
<p class="has-custom-color-6-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sEast Valley District%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":null},"color":{"duotone":"var:preset|duotone|orange"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:24px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6","fontSize":"small"} -->
<p class="has-custom-color-6-color has-text-color has-link-color has-small-font-size"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sLakeview Estates%2$s', 'solstice' ), '<strong>', '</strong>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solstice-img-3.webp" alt="<?php esc_attr_e( 'A Solstice technician holding a toolbox stands beside a branded service van on a residential street', 'solstice' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->