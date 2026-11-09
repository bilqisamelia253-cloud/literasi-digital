<?php
/**
 * Title: Front page
 * Slug: solstice/front-page
 * Inserter: no
 */
?>
<!-- wp:cover {"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"hero","metadata":{"name":"Hero"},"style":{"border":{"radius":{"bottomLeft":"60px","bottomRight":"60px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"@mobile":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-bottom-left-radius:60px;border-bottom-right-radius:60px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-hero-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100dvh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignfull" style="min-height:100dvh"><!-- wp:template-part {"slug":"header-light-text","area":"header"} /-->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"theme-3","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}},"color":{"background":"#ff6a0017"},"border":{"width":"0.01em"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"custom-1"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-theme-3-color has-text-color has-background has-link-color has-custom-1-font-size has-custom-font-size wp-element-button" style="border-width:0.01em;background-color:#ff6a0017;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php
/* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
printf( esc_html__( '%1$sVoted #1 HVAC Service in Metro Area%2$s', 'solstice' ), '<strong>', '</strong>' );
?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}},"fontSize":"3-x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-3-x-large-font-size"><?php esc_html_e( 'Your climate, perfected', 'solstice' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6"} -->
<p class="has-text-align-center has-custom-color-6-color has-text-color has-link-color"><?php esc_html_e( 'Expert heating and air conditioning solutions for residential and commercial properties. Reliable service, upfront pricing, absolute comfort.', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Call (800) 555-0123', 'solstice' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:pattern {"slug":"solstice/services-grid"} /-->

<!-- wp:group {"metadata":{"name":"Stats"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}},"@mobile":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}},"backgroundColor":"theme-2","textColor":"custom-color-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-custom-color-6-color has-theme-2-background-color has-text-color has-background has-link-color" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px"><!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"@tablet":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}},"@mobile":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}},"@mobile":{"layout":{"justifyContent":"center"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600"},"@mobile":{"typography":{"textAlign":"center"}}},"fontSize":"custom-1"} -->
<p class="has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Serving Ashford Valley', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}},"@mobile":{"typography":{"textAlign":"center"}}},"textColor":"theme-3","fontSize":"3-x-large","fontFamily":"newsreader"} -->
<p class="has-theme-3-color has-text-color has-link-color has-newsreader-font-family has-3-x-large-font-size"><?php esc_html_e( '17 yrs', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}},"@mobile":{"layout":{"justifyContent":"center"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600"},"@mobile":{"typography":{"textAlign":"center"}}},"fontSize":"custom-1"} -->
<p class="has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Systems Installed &amp; Serviced', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}},"@mobile":{"typography":{"textAlign":"center"}}},"textColor":"theme-3","fontSize":"3-x-large","fontFamily":"newsreader"} -->
<p class="has-theme-3-color has-text-color has-link-color has-newsreader-font-family has-3-x-large-font-size"><?php esc_html_e( '14k+', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"@tablet":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}},"@mobile":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}},"@mobile":{"layout":{"justifyContent":"center"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600"},"@mobile":{"typography":{"textAlign":"center"}}},"fontSize":"custom-1"} -->
<p class="has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'From 1,860+ reviews', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}},"@mobile":{"typography":{"textAlign":"center"}}},"textColor":"theme-3","fontSize":"3-x-large","fontFamily":"newsreader"} -->
<p class="has-theme-3-color has-text-color has-link-color has-newsreader-font-family has-3-x-large-font-size"><?php esc_html_e( '4.9/5', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}},"@mobile":{"layout":{"justifyContent":"center"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600"},"@mobile":{"typography":{"textAlign":"center"}}},"fontSize":"custom-1"} -->
<p class="has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Average Emergency Response', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}},"@mobile":{"typography":{"textAlign":"center"}}},"textColor":"theme-3","fontSize":"3-x-large","fontFamily":"newsreader"} -->
<p class="has-theme-3-color has-text-color has-link-color has-newsreader-font-family has-3-x-large-font-size"><?php esc_html_e( '45 min', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"solstice/why-us"} /-->

<!-- wp:pattern {"slug":"solstice/reviews"} /-->

<!-- wp:group {"metadata":{"name":"Service area"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}},"@mobile":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"theme-2","textColor":"theme-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-theme-5-color has-theme-2-background-color has-text-color has-background has-link-color" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}},"@tablet":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}},"@mobile":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5"} -->
<h2 class="wp-block-heading has-theme-5-color has-text-color has-link-color"><?php esc_html_e( 'Prompt local service, right in your neighbourhood', 'solstice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6"} -->
<p class="has-custom-color-6-color has-text-color has-link-color"><?php esc_html_e( 'We’ve built our reputation by providing fast, reliable HVAC services across the metropolitan area.', 'solstice' ); ?></p>
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

<!-- wp:pattern {"slug":"solstice/faq"} /-->

<!-- wp:pattern {"slug":"solstice/call-to-action"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->