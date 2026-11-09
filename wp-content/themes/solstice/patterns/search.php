<?php
/**
 * Title: Search results
 * Slug: solstice/search
 * Inserter: no
 */
?>
<!-- wp:cover {"isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"dvh","gradient":"hero","metadata":{"name":"Hero"},"style":{"border":{"radius":{"bottomLeft":"60px","bottomRight":"60px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"@mobile":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-bottom-left-radius:60px;border-bottom-right-radius:60px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:50dvh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-hero-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"50dvh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignfull" style="min-height:50dvh"><!-- wp:template-part {"slug":"header-light-text","area":"header"} /-->

<!-- wp:spacer {"height":"20px","style":{"layout":{"flexSize":"20px","selfStretch":"fixed"},"@mobile":{"spacing":{"margin":{"top":"0","bottom":"0"}}}}} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search","style":{"typography":{"textAlign":"center"}}} /-->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'solstice' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Type here...', 'solstice' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'solstice' ); ?>","buttonUseIcon":true,"style":{"border":{"radius":{"topLeft":"99px","topRight":"99px","bottomLeft":"99px","bottomRight":"99px"}}},"backgroundColor":"theme-3","textColor":"theme-2"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"20px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Posts"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:template-part {"slug":"blog-posts"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"metadata":{"name":"Sidebar"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->