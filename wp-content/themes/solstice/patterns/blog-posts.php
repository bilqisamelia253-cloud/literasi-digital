<?php
/**
 * Title: Blog posts
 * Slug: solstice/blog-posts
 * Inserter: no
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
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

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Sorry, but nothing was found. Please try a search with different keywords.', 'solstice' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e( 'Previous', 'solstice' ); ?>"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e( 'Next', 'solstice' ); ?>"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->