<?php
/**
 * Search results template.
 *
 * @package WiseTech_Core_Theme
 */
get_header();
?>
<main id="primary" class="site-main">
	<header class="archive-header wt-wrap">
		<h1><?php printf( esc_html__( 'Search results for: %s', 'wisetech-core' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
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
