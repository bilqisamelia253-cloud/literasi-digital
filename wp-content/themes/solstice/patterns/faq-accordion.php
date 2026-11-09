<?php
/**
 * Title: FAQ accordion
 * Slug: solstice/faq-accordion
 * Categories: solstice
 */
?>
<!-- wp:group {"metadata":{"name":"FAQ accordion"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600","textAlign":"center"}},"textColor":"custom-color-10","fontSize":"custom-1"} -->
<p class="has-text-align-center has-custom-color-10-color has-text-color has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Before you call', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"3-x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-3-x-large-font-size"><?php esc_html_e( 'FAQs', 'solstice' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8px"} -->
<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:accordion -->
<div role="group" class="wp-block-accordion"><!-- wp:accordion-item {"openByDefault":true,"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-5"} -->
<div class="wp-block-accordion-item is-open has-theme-5-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:accordion-heading {"fontFamily":"plus-jakarta-sans"} -->
<h3 class="wp-block-accordion-heading has-icon has-icon-right has-plus-jakarta-sans-font-family"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><strong><?php esc_html_e( 'How fast can you get someone to my house?', 'solstice' ); ?></strong></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Most same-day requests get a technician within 3–4 hours; emergency calls average 45 minutes across the inner service ring.', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-5"} -->
<div class="wp-block-accordion-item has-theme-5-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:accordion-heading {"fontFamily":"plus-jakarta-sans"} -->
<h3 class="wp-block-accordion-heading has-icon has-icon-right has-plus-jakarta-sans-font-family"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><strong><?php esc_html_e( 'Do you offer financing on new systems?', 'solstice' ); ?></strong></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Approved installs can be financed over 12 to 60 months, with rates confirmed on site before you commit.', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-5"} -->
<div class="wp-block-accordion-item has-theme-5-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:accordion-heading {"fontFamily":"plus-jakarta-sans"} -->
<h3 class="wp-block-accordion-heading has-icon has-icon-right has-plus-jakarta-sans-font-family"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><strong><?php esc_html_e( 'Is the estimate actually free?', 'solstice' ); ?></strong></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Yes. You get a written, itemised quote before any work begins, and you\'re never charged for the visit.', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item --></div>
<!-- /wp:accordion --></div>
<!-- /wp:group -->