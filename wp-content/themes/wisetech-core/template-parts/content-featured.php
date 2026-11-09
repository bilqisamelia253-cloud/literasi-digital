<?php
/**
 * Featured post card.
 *
 * @package WiseTech_Core_Theme
 */

$heading_tag     = get_query_var( 'wisetech_featured_heading_tag', 'h2' );
$allowed_headings = array( 'h1', 'h2' );

if ( ! in_array( $heading_tag, $allowed_headings, true ) ) {
	$heading_tag = 'h2';
}
?>
<article class="featured-post">
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="featured-image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
			<?php echo get_the_post_thumbnail( get_the_ID(), 'wisetech-featured', array( 'loading' => 'eager' ) ); ?>
		</a>
	<?php endif; ?>
	<div class="featured-copy">
		<span class="featured-label"><?php esc_html_e( 'Featured', 'wisetech-core' ); ?></span>
		<<?php echo esc_html( $heading_tag ); ?> class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo esc_html( $heading_tag ); ?>>
		<div class="post-meta"><span><?php echo esc_html( get_the_date() ); ?></span><span><?php echo esc_html( wisetech_core_theme_reading_time() ); ?></span></div>
		<p><?php echo esc_html( get_the_excerpt() ); ?></p>
		<a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read article →', 'wisetech-core' ); ?></a>
	</div>
</article>
