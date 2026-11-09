<?php
/**
 * Title: Request an estimate
 * Slug: solstice/request-an-estimate
 * Categories: solstice
 */
?>
<!-- wp:group {"metadata":{"name":"Request an estimate"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-link-color" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontStyle":"normal","fontWeight":"600"}},"textColor":"custom-color-10","fontSize":"custom-1"} -->
<p class="has-custom-color-10-color has-text-color has-custom-1-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Free, no obligation', 'solstice' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"2-x-large"} -->
<h2 class="wp-block-heading has-2-x-large-font-size"><?php esc_html_e( 'Tell us what\'s going on', 'solstice' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'A technician reads every request and calls back within one business day with a written, itemised quote.', 'solstice' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"theme-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-theme-5-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:jetpack/contact-form {"subject":"New estimate request","customThankyou":"message","customThankyouMessage":"Thanks — a technician will call within one business day.","jetpackCRM":false,"salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"disableSummary":true} -->
<div class="wp-block-jetpack-contact-form"><!-- wp:jetpack/field-name {"id":"","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e( 'Name', 'solstice' ); ?>","fontSize":"small"} /-->

<!-- wp:jetpack/input {"fontSize":"small"} /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-telephone {"id":"","required":true,"showCountrySelector":true,"default":"US"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e( 'Phone', 'solstice' ); ?>","fontSize":"small"} /-->

<!-- wp:jetpack/phone-input {"fontSize":"small"} /--></div>
<!-- /wp:jetpack/field-telephone -->

<!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e( 'Email', 'solstice' ); ?>","fontSize":"small"} /-->

<!-- wp:jetpack/input {"fontSize":"small"} /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-select {"id":"","options":["<?php esc_attr_e( 'Heating repair', 'solstice' ); ?>","<?php esc_attr_e( 'AC repair', 'solstice' ); ?>","<?php esc_attr_e( 'New system or replacement', 'solstice' ); ?>","<?php esc_attr_e( 'Maintenance / tune-up', 'solstice' ); ?>","<?php esc_attr_e( 'Indoor air quality', 'solstice' ); ?>","<?php esc_attr_e( 'Something else', 'solstice' ); ?>"]} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e( 'What do you need?', 'solstice' ); ?>","fontSize":"small"} /-->

<!-- wp:jetpack/input {"placeholder":"<?php esc_attr_e( 'Select one option', 'solstice' ); ?>","type":"dropdown","fontSize":"small"} /--></div>
<!-- /wp:jetpack/field-select -->

<!-- wp:jetpack/field-textarea {"id":""} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e( 'Details', 'solstice' ); ?>","fontSize":"small"} /-->

<!-- wp:jetpack/input {"type":"textarea","fontSize":"small"} /--></div>
<!-- /wp:jetpack/field-textarea -->

<!-- wp:jetpack/field-consent {"id":"","consentType":"explicit","explicitConsentMessage":"<?php esc_attr_e( 'Yes, you can contact me about this request.', 'solstice' ); ?>","className":"is-style-list"} -->
<div><!-- wp:jetpack/option {"placeholder":"<?php esc_attr_e( 'Add explicit consent message…', 'solstice' ); ?>","label":"<?php esc_attr_e( 'Yes, you can contact me about this request.', 'solstice' ); ?>","isStandalone":true} /--></div>
<!-- /wp:jetpack/field-consent -->

<!-- wp:jetpack/button {"element":"button","text":"<?php esc_attr_e( 'Request my estimate', 'solstice' ); ?>","borderRadius":999,"lock":{"remove":true}} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->