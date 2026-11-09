<?php
/**
 * WiseTech Core functions and definitions.
 *
 * @package WiseTech_Core_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/starter-content.php';

function wisetech_core_theme_setup() {
	load_theme_textdomain( 'wisetech-core', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 320,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
		'navigation-widgets',
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wisetech-core' ),
		'footer'  => __( 'Footer Menu', 'wisetech-core' ),
	) );

	add_image_size( 'wisetech-card', 720, 405, true );
	add_image_size( 'wisetech-featured', 1280, 720, true );
}
add_action( 'after_setup_theme', 'wisetech_core_theme_setup' );

function wisetech_core_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wisetech_core_theme_content_width', 760 );
}
add_action( 'after_setup_theme', 'wisetech_core_theme_content_width', 0 );

function wisetech_core_theme_assets() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'wisetech-core', get_stylesheet_uri(), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'wisetech-core-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme->get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wisetech_core_theme_assets' );

function wisetech_core_theme_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	return 24;
}
add_filter( 'excerpt_length', 'wisetech_core_theme_excerpt_length', 99 );

function wisetech_core_theme_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'wisetech_core_theme_excerpt_more' );

function wisetech_core_theme_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'wisetech-list-view';
	}
	return $classes;
}
add_filter( 'body_class', 'wisetech_core_theme_body_classes' );

function wisetech_core_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'wisetech_core_theme_pingback_header' );


/**
 * Return branding display choices.
 *
 * @return array<string,string>
 */
function wisetech_core_theme_branding_display_choices() {
	return array(
		'logo-title-tagline' => __( 'Logo + Site Title + Tagline', 'wisetech-core' ),
		'logo-only'          => __( 'Logo only', 'wisetech-core' ),
		'logo-title'         => __( 'Logo + Site Title', 'wisetech-core' ),
		'title-tagline'      => __( 'Site Title + Tagline', 'wisetech-core' ),
		'title-only'         => __( 'Site Title only', 'wisetech-core' ),
	);
}

/**
 * Sanitize branding display choice.
 *
 * @param string $value Selected value.
 * @return string
 */
function wisetech_core_theme_sanitize_branding_display( $value ) {
	$choices = wisetech_core_theme_branding_display_choices();
	$value   = is_string( $value ) ? $value : '';
	return isset( $choices[ $value ] ) ? $value : 'logo-title-tagline';
}

/**
 * Register customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function wisetech_core_theme_customize_register( $wp_customize ) {
	$wp_customize->add_setting(
		'wisetech_core_theme_branding_display',
		array(
			'default'           => 'logo-title-tagline',
			'sanitize_callback' => 'wisetech_core_theme_sanitize_branding_display',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_branding_display',
		array(
			'label'       => __( 'Header branding display', 'wisetech-core' ),
			'description' => __( 'Choose which site identity elements appear in the header.', 'wisetech-core' ),
			'section'     => 'title_tagline',
			'type'        => 'radio',
			'choices'     => wisetech_core_theme_branding_display_choices(),
			'priority'    => 30,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_sticky_header',
		array(
			'default'           => true,
			'sanitize_callback' => 'wisetech_core_theme_sanitize_checkbox',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_sticky_header',
		array(
			'label'       => __( 'Sticky header', 'wisetech-core' ),
			'description' => __( 'Keep the header visible while scrolling. Turn this off for a normal, non-sticky header.', 'wisetech-core' ),
			'section'     => 'title_tagline',
			'type'        => 'checkbox',
			'priority'    => 35,
		)
	);


	$wp_customize->add_setting(
		'wisetech_core_theme_show_header_search',
		array(
			'default'           => false,
			'sanitize_callback' => 'wisetech_core_theme_sanitize_checkbox',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_show_header_search',
		array(
			'label'       => __( 'Show search in header', 'wisetech-core' ),
			'description' => __( 'Display a compact article search form in the site header.', 'wisetech-core' ),
			'section'     => 'title_tagline',
			'type'        => 'checkbox',
			'priority'    => 40,
		)
	);


	$wp_customize->add_setting(
		'wisetech_core_theme_header_search_style',
		array(
			'default'           => 'form',
			'sanitize_callback' => 'wisetech_core_theme_sanitize_header_search_style',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_header_search_style',
		array(
			'label'       => __( 'Header search style', 'wisetech-core' ),
			'description' => __( 'Show the full search field or a compact search icon that opens the field when clicked.', 'wisetech-core' ),
			'section'     => 'title_tagline',
			'type'        => 'radio',
			'choices'     => array(
				'form' => __( 'Search field', 'wisetech-core' ),
				'icon' => __( 'Search icon', 'wisetech-core' ),
			),
			'priority'    => 41,
		)
	);

	$wp_customize->add_section(
		'wisetech_core_theme_homepage',
		array(
			'title'       => __( 'Homepage Intro', 'wisetech-core' ),
			'description' => __( 'Customize the homepage headline independently from the Site Title and Tagline.', 'wisetech-core' ),
			'priority'    => 31,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_show_home_intro',
		array(
			'default'           => true,
			'sanitize_callback' => 'wisetech_core_theme_sanitize_checkbox',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_show_home_intro',
		array(
			'label'       => __( 'Show homepage intro', 'wisetech-core' ),
			'description' => __( 'Turn this off to hide the headline and subheadline above the featured article.', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_homepage',
			'type'        => 'checkbox',
			'priority'    => 10,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_home_headline',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_home_headline',
		array(
			'label'       => __( 'Homepage headline', 'wisetech-core' ),
			'description' => __( 'Leave blank to use the Site Title.', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_homepage',
			'type'        => 'text',
			'priority'    => 20,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_home_subheadline',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_home_subheadline',
		array(
			'label'       => __( 'Homepage subheadline', 'wisetech-core' ),
			'description' => __( 'Leave blank to use the Site Tagline.', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_homepage',
			'type'        => 'text',
			'priority'    => 30,
		)
	);


	$wp_customize->add_section(
		'wisetech_core_theme_footer',
		array(
			'title'       => __( 'Footer', 'wisetech-core' ),
			'description' => __( 'Control the optional theme credit shown in the footer.', 'wisetech-core' ),
			'priority'    => 32,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_show_footer_credit',
		array(
			'default'           => true,
			'sanitize_callback' => 'wisetech_core_theme_sanitize_checkbox',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_show_footer_credit',
		array(
			'label'       => __( 'Show footer credit', 'wisetech-core' ),
			'description' => __( 'Turn this off to remove the theme credit completely.', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_footer',
			'type'        => 'checkbox',
			'priority'    => 10,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_footer_credit_text',
		array(
			'default'           => __( 'Theme by', 'wisetech-core' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_footer_credit_text',
		array(
			'label'       => __( 'Footer credit text', 'wisetech-core' ),
			'description' => __( 'Text shown before the linked label. Example: Theme by', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_footer',
			'type'        => 'text',
			'priority'    => 20,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_footer_credit_label',
		array(
			'default'           => 'WiseTechList',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_footer_credit_label',
		array(
			'label'       => __( 'Footer credit label', 'wisetech-core' ),
			'description' => __( 'The clickable label. Leave blank to hide the credit.', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_footer',
			'type'        => 'text',
			'priority'    => 30,
		)
	);

	$wp_customize->add_setting(
		'wisetech_core_theme_footer_credit_url',
		array(
			'default'           => 'https://wisetechlist.com/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_footer_credit_url',
		array(
			'label'       => __( 'Footer credit URL', 'wisetech-core' ),
			'description' => __( 'Leave blank to show the label as plain text without a link.', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_footer',
			'type'        => 'url',
			'priority'    => 40,
		)
	);


	$wp_customize->add_setting(
		'wisetech_core_theme_show_footer_search',
		array(
			'default'           => false,
			'sanitize_callback' => 'wisetech_core_theme_sanitize_checkbox',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'wisetech_core_theme_show_footer_search',
		array(
			'label'       => __( 'Show search in footer', 'wisetech-core' ),
			'description' => __( 'Display an article search form in the footer.', 'wisetech-core' ),
			'section'     => 'wisetech_core_theme_footer',
			'type'        => 'checkbox',
			'priority'    => 50,
		)
	);
}
add_action( 'customize_register', 'wisetech_core_theme_customize_register' );

/**
 * Get current branding display mode.
 *
 * @return string
 */
function wisetech_core_theme_get_branding_display() {
	return wisetech_core_theme_sanitize_branding_display( get_theme_mod( 'wisetech_core_theme_branding_display', 'logo-title-tagline' ) );
}


/**
 * Sanitize checkbox values.
 *
 * @param mixed $checked Checkbox value.
 * @return bool
 */
function wisetech_core_theme_sanitize_checkbox( $checked ) {
	return (bool) $checked;
}


/**
 * Sanitize the header search display style.
 *
 * @param string $value Search style.
 * @return string
 */
function wisetech_core_theme_sanitize_header_search_style( $value ) {
	return in_array( $value, array( 'form', 'icon' ), true ) ? $value : 'form';
}

/**
 * Get the homepage intro settings with Site Identity fallbacks.
 *
 * @return array{show:bool,headline:string,subheadline:string}
 */
function wisetech_core_theme_get_home_intro() {
	$headline    = trim( (string) get_theme_mod( 'wisetech_core_theme_home_headline', '' ) );
	$subheadline = trim( (string) get_theme_mod( 'wisetech_core_theme_home_subheadline', '' ) );

	if ( '' === $headline ) {
		$headline = get_bloginfo( 'name' );
	}

	if ( '' === $subheadline ) {
		$subheadline = get_bloginfo( 'description', 'display' );
	}

	return array(
		'show'        => (bool) get_theme_mod( 'wisetech_core_theme_show_home_intro', true ),
		'headline'    => $headline,
		'subheadline' => $subheadline,
	);
}
