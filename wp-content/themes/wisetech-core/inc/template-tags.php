<?php
/**
 * Template helpers.
 *
 * @package WiseTech_Core_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wisetech_core_theme_reading_time( $post_id = null ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	$content = get_post_field( 'post_content', $post_id );
	$words   = str_word_count( wp_strip_all_tags( strip_shortcodes( $content ) ) );
	$minutes = max( 1, (int) ceil( $words / 220 ) );

	return sprintf(
		/* translators: %d: number of minutes. */
		_n( '%d min read', '%d min read', $minutes, 'wisetech-core' ),
		$minutes
	);
}

function wisetech_core_theme_post_meta( $show_author = true ) {
	$parts = array();

	$parts[] = sprintf(
		'<time datetime="%1$s">%2$s</time>',
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() )
	);

	if ( $show_author ) {
		$parts[] = sprintf(
			'<span>%1$s <a href="%2$s">%3$s</a></span>',
			esc_html__( 'By', 'wisetech-core' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		);
	}

	$parts[] = '<span>' . esc_html( wisetech_core_theme_reading_time() ) . '</span>';

	echo wp_kses_post( implode( '', array_map( function( $item ) { return '<span>' . $item . '</span>'; }, $parts ) ) );
}

function wisetech_core_theme_primary_category() {
	$categories = get_the_category();
	if ( empty( $categories ) ) {
		return;
	}

	$category = $categories[0];
	printf(
		'<a href="%1$s">%2$s</a>',
		esc_url( get_category_link( $category->term_id ) ),
		esc_html( $category->name )
	);
}
