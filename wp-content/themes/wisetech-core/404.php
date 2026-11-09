<?php
/**
 * 404 template.
 *
 * @package WiseTech_Core_Theme
 */
get_header();
?>
<main id="primary" class="site-main">
	<section class="error-404 wt-content">
		<h1><?php esc_html_e( 'Page not found', 'wisetech-core' ); ?></h1>
		<p><?php esc_html_e( 'The page may have moved or no longer exists. Try searching for what you need.', 'wisetech-core' ); ?></p>
		<?php get_search_form(); ?>
	</section>
</main>
<?php get_footer(); ?>
