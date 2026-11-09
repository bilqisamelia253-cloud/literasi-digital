<?php
/**
 * Solstice functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Solstice
 * @since Solstice 1.0
 */

if ( ! function_exists( 'solstice_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Solstice 1.0
	 * @return void
	 */
	function solstice_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'solstice_editor_style' );

if ( ! function_exists( 'solstice_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front.
	 *
	 * @since Solstice 1.0
	 * @return void
	 */
	function solstice_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'solstice-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'solstice-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'solstice_styles' );

if ( ! function_exists( 'solstice_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets.
	 *
	 * @since solstice 1.0
	 * @return void
	 */
	function solstice_block_stylesheets() {
		$solstice_styled_blocks = array(
			'core/accordion' => 'accordion',
			'core/calendar'  => 'calendar',
		);

		foreach ( $solstice_styled_blocks as $block_name_with_namespace => $block_name ) {
			wp_enqueue_block_style(
				$block_name_with_namespace,
				array(
					'handle' => 'solstice-' . $block_name,
					'src'    => get_template_directory_uri() . '/assets/css/blocks/' . $block_name . '.css',
					'path'   => get_template_directory() . '/assets/css/blocks/' . $block_name . '.css',
				)
			);
		}
	}
endif;

add_action( 'init', 'solstice_block_stylesheets' );

if ( ! function_exists( 'solstice_pattern_categories' ) ) :
	/**
	 * Registers block pattern categories.
	 *
	 * @since Solstice 1.0
	 * @return void
	 */
	function solstice_pattern_categories() {
		register_block_pattern_category(
			'solstice',
			array(
				'label'       => _x( 'Solstice', 'Block pattern category', 'solstice' ),
				'description' => __( 'Patterns for the Solstice theme.', 'solstice' ),
			)
		);
	}
endif;
add_action( 'init', 'solstice_pattern_categories' );
