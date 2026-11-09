<?php
/**
 * Title: Page not found
 * Slug: solstice/404
 * Inserter: no
 */
?>
<!-- wp:cover {"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"hero","metadata":{"name":"404"},"style":{"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"@mobile":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-hero-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100dvh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignfull" style="min-height:100dvh"><!-- wp:template-part {"slug":"header-light-text","area":"header"} /-->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}},"fontSize":"3-x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-3-x-large-font-size"><?php esc_html_e( 'Oh no, this page lost its cool.', 'solstice' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-6"}}}},"textColor":"custom-color-6"} -->
<p class="has-text-align-center has-custom-color-6-color has-text-color has-link-color"><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Try searching using the form below.', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'solstice' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Type here...', 'solstice' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'solstice' ); ?>","buttonUseIcon":true,"style":{"border":{"radius":{"topLeft":"999px","topRight":"999px","bottomLeft":"999px","bottomRight":"999px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-3","textColor":"theme-2"} /--></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->