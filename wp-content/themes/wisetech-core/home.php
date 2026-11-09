<?php
/**
 * Blog home template.
 *
 * @package WiseTech_Core_Theme
 */
get_header();
$home_intro = wisetech_core_theme_get_home_intro();
?>
<main id="primary" class="site-main<?php echo $home_intro['show'] ? '' : ' home-intro-hidden'; ?>">
	<?php if ( $home_intro['show'] ) : ?>
		<section class="home-header wt-wrap">
			<h1><?php echo esc_html( $home_intro['headline'] ); ?></h1>
			<?php if ( $home_intro['subheadline'] ) : ?>
				<div class="home-intro"><p><?php echo esc_html( $home_intro['subheadline'] ); ?></p></div>
			<?php endif; ?>
		</section>
	<?php endif; ?>

	<?php if ( have_posts() ) : ?>
		<div class="wt-wrap">
			<?php
			$featured_id = 0;
			$sticky      = get_option( 'sticky_posts' );

			if ( ! is_paged() ) {
				$featured_args = array(
					'posts_per_page'      => 1,
					'ignore_sticky_posts' => true,
				);

				if ( ! empty( $sticky ) ) {
					$featured_args['post__in'] = $sticky;
				}

				$featured = new WP_Query( $featured_args );

				if ( $featured->have_posts() ) {
					while ( $featured->have_posts() ) {
						$featured->the_post();
						$featured_id = get_the_ID();
						set_query_var( 'wisetech_featured_heading_tag', $home_intro['show'] ? 'h2' : 'h1' );
						get_template_part( 'template-parts/content', 'featured' );
						set_query_var( 'wisetech_featured_heading_tag', null );
					}
					wp_reset_postdata();
				}
			}
			?>
			<div class="post-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( get_the_ID() === $featured_id ) { continue; } ?>
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
