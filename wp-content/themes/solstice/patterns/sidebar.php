<?php
/**
 * Title: Sidebar
 * Slug: solstice/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sidebar"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"theme-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-theme-5-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Search articles', 'solstice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'solstice' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Type here...', 'solstice' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'solstice' ); ?>","buttonUseIcon":true,"style":{"border":{"radius":{"topLeft":"999px","topRight":"999px","bottomLeft":"999px","bottomRight":"999px"}}},"backgroundColor":"theme-3","textColor":"theme-2","fontSize":"custom-1"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"theme-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-theme-5-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Popular topics', 'solstice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:terms-query {"termQuery":{"perPage":10,"taxonomy":"category","order":"asc","orderBy":"name","include":[],"hideEmpty":true,"showNested":true,"inherit":false}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"default","columnCount":2}} -->
<!-- wp:term-name {"isLink":true,"style":{"border":{"width":"1px","radius":{"topLeft":"999px","topRight":"999px","bottomLeft":"999px","bottomRight":"999px"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"fontSize":"custom-1","borderColor":"theme-4"} /-->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"backgroundColor":"theme-2","textColor":"custom-color-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-6-color has-theme-2-background-color has-text-color has-background has-link-color" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|orange"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/maintenance.webp" alt="" class="" style="width:50px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-theme-5-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Need help with your system?', 'solstice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><?php esc_html_e( 'Our licensed technicians are available for emergency service, maintenance, and estimates.', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button"><?php esc_html_e( 'Call (800) 555-0198', 'solstice' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","fontSize":"small","borderColor":"custom-color-9"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-custom-color-9-border-color has-small-font-size has-custom-font-size wp-element-button"><?php esc_html_e( 'Book to schedule', 'solstice' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->