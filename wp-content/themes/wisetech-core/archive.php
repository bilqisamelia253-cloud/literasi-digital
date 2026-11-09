<?php
/**
 * Archive template.
 *
 * @package WiseTech_Core_Theme
 */
get_header();
?>
<main id="primary" class="site-main">
	<header class="archive-header wt-wrap">
		<?php the_archive_title( '<h1>', '</h1>' ); ?>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
	</header>
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
