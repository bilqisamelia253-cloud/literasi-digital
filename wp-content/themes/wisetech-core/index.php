<?php
/**
 * Main fallback template.
 *
 * @package WiseTech_Core_Theme
 */
get_header();
?>
<main id="primary" class="site-main">
	<section class="archive-header wt-wrap">
		<h1><?php esc_html_e( 'Latest articles', 'wisetech-core' ); ?></h1>
	</section>
	<?php if ( have_posts() ) : ?>
		<div class="wt-wrap">
			<div class="post-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'card' ); ?>
				<?php endwhile; ?>
			</div>
			<div class="pagination"><?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?></div>
		</div>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
