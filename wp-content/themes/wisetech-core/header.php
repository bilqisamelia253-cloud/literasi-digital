<?php
/**
 * Header template.
 *
 * @package WiseTech_Core_Theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wisetech-core' ); ?></a>
<?php
$branding_mode = wisetech_core_theme_get_branding_display();
$description   = get_bloginfo( 'description', 'display' );
$show_logo     = has_custom_logo() && in_array( $branding_mode, array( 'logo-title-tagline', 'logo-only', 'logo-title' ), true );
$show_title    = in_array( $branding_mode, array( 'logo-title-tagline', 'logo-title', 'title-tagline', 'title-only' ), true );
$show_tagline  = ! empty( $description ) && in_array( $branding_mode, array( 'logo-title-tagline', 'title-tagline' ), true );

if ( ! $show_logo && ! $show_title && ! $show_tagline ) {
	$show_title   = true;
	$show_tagline = ! empty( $description );
}

$branding_classes = 'site-branding';
if ( $show_logo && ! $show_title && ! $show_tagline ) {
	$branding_classes .= ' site-branding--logo-only';
}
?>
<?php
$sticky_header = (bool) get_theme_mod( 'wisetech_core_theme_sticky_header', true );
$header_class  = $sticky_header ? 'site-header site-header--sticky' : 'site-header';
?>
<header class="<?php echo esc_attr( $header_class ); ?>">
	<div class="wt-wrap header-inner">
		<div class="<?php echo esc_attr( $branding_classes ); ?>">
			<?php if ( $show_logo ) : ?>
				<?php the_custom_logo(); ?>
			<?php endif; ?>

			<?php if ( $show_title || $show_tagline ) : ?>
				<div class="site-branding-text">
					<?php if ( $show_title ) : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
					<?php if ( $show_tagline ) : ?>
						<p class="site-description"><?php echo esc_html( $description ); ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
				<?php esc_html_e( 'Menu', 'wisetech-core' ); ?>
			</button>

			<nav id="site-navigation" class="site-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'wisetech-core' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 2,
				) );
				?>
			</nav>
		<?php endif; ?>


		<?php if ( (bool) get_theme_mod( 'wisetech_core_theme_show_header_search', false ) ) : ?>
			<?php $header_search_style = wisetech_core_theme_sanitize_header_search_style( get_theme_mod( 'wisetech_core_theme_header_search_style', 'form' ) ); ?>
			<?php if ( 'icon' === $header_search_style ) : ?>
				<div class="header-search header-search--icon">
					<button class="header-search-toggle" type="button" aria-expanded="false" aria-controls="header-search-panel" aria-label="<?php esc_attr_e( 'Open search', 'wisetech-core' ); ?>">
						<svg class="header-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
							<path d="M10.5 4a6.5 6.5 0 1 0 0 13 6.5 6.5 0 0 0 0-13Zm-8 6.5a8 8 0 1 1 14.32 4.9l4.39 4.39a.75.75 0 1 1-1.06 1.06l-4.39-4.39A8 8 0 0 1 2.5 10.5Z" fill="currentColor"/>
						</svg>
					</button>
					<div id="header-search-panel" class="header-search-panel" aria-label="<?php esc_attr_e( 'Header search', 'wisetech-core' ); ?>" hidden>
						<?php get_search_form(); ?>
					</div>
				</div>
			<?php else : ?>
				<div class="header-search header-search--form" aria-label="<?php esc_attr_e( 'Header search', 'wisetech-core' ); ?>">
					<?php get_search_form(); ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</header>
