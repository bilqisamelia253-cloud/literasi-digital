<?php
/**
 * Page template.
 *
 * @package WiseTech_Core_Theme
 */
get_header();
while ( have_posts() ) :
	the_post();
	?>
	<main id="primary" class="site-main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="single-header wt-content"><h1 class="entry-title"><?php the_title(); ?></h1></header>
			<?php if ( has_post_thumbnail() ) : ?><figure class="entry-featured"><?php the_post_thumbnail( 'wisetech-featured', array( 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?></figure><?php endif; ?>
			<div class="entry-content"><?php the_content(); wp_link_pages(); ?></div>
		</article>
		<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
	</main>
<?php endwhile; ?>
<?php get_footer(); ?>
