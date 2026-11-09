<?php
/**
 * Post card.
 *
 * @package WiseTech_Core_Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="post-card-thumb" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
			<?php the_post_thumbnail( 'wisetech-card', array( 'loading' => 'lazy' ) ); ?>
		</a>
	<?php endif; ?>
	<div class="post-card-body">
		<div class="post-meta"><span><?php wisetech_core_theme_primary_category(); ?></span><span><?php echo esc_html( get_the_date() ); ?></span><span><?php echo esc_html( wisetech_core_theme_reading_time() ); ?></span></div>
		<h2 class="post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-card-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
	</div>
</article>
