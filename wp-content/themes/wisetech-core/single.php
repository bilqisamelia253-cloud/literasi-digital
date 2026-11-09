<?php
/**
 * Single post template.
 *
 * @package WiseTech_Core_Theme
 */
get_header();
while ( have_posts() ) :
	the_post();
	?>
	<main id="primary" class="site-main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="single-header wt-content">
				<div class="post-meta">
					<span><?php wisetech_core_theme_primary_category(); ?></span>
					<?php wisetech_core_theme_post_meta(); ?>
				</div>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?><p class="entry-deck"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="entry-featured"><?php the_post_thumbnail( 'wisetech-featured', array( 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?></figure>
			<?php endif; ?>

			<div class="entry-content">
				<?php
				the_content();
				wp_link_pages();
				?>
			</div>

			<?php $tags = get_the_tags(); ?>
			<?php if ( $tags ) : ?>
				<div class="post-taxonomy"><strong><?php esc_html_e( 'Topics:', 'wisetech-core' ); ?></strong> <?php the_tags( '', ' ', '' ); ?></div>
			<?php endif; ?>

			<div class="author-box">
				<div><?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?></div>
				<div>
					<h2><?php echo esc_html( get_the_author() ); ?></h2>
					<p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
				</div>
			</div>
		</article>

		<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
	</main>
<?php endwhile; ?>
<?php get_footer(); ?>
