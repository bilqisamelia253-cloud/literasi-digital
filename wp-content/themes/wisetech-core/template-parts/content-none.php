<?php
/**
 * Empty-state content.
 *
 * @package WiseTech_Core_Theme
 */
?>
<section class="empty-state wt-content">
	<h1><?php esc_html_e( 'Nothing found', 'wisetech-core' ); ?></h1>
	<p><?php esc_html_e( 'Try a different search or browse another section of the site.', 'wisetech-core' ); ?></p>
	<?php get_search_form(); ?>
</section>
