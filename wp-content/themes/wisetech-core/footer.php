<?php
/**
 * Footer template.
 *
 * @package WiseTech_Core_Theme
 */

$wisetech_core_show_credit   = (bool) get_theme_mod( 'wisetech_core_theme_show_footer_credit', true );
$wisetech_core_credit_text   = trim( (string) get_theme_mod( 'wisetech_core_theme_footer_credit_text', __( 'Theme by', 'wisetech-core' ) ) );
$wisetech_core_credit_label  = trim( (string) get_theme_mod( 'wisetech_core_theme_footer_credit_label', 'WiseTechList' ) );
$wisetech_core_credit_url    = trim( (string) get_theme_mod( 'wisetech_core_theme_footer_credit_url', 'https://wisetechlist.com/' ) );
$wisetech_core_footer_search = (bool) get_theme_mod( 'wisetech_core_theme_show_footer_search', false );
$wisetech_core_footer_class  = $wisetech_core_footer_search ? 'footer-inner footer-inner--with-search' : 'footer-inner';
?>
<footer class="site-footer">
	<div class="wt-wrap <?php echo esc_attr( $wisetech_core_footer_class ); ?>">
		<div class="footer-credit-wrap">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.
			<?php if ( $wisetech_core_show_credit && '' !== $wisetech_core_credit_label ) : ?>
				<span class="theme-credit">
					<?php if ( '' !== $wisetech_core_credit_text ) : ?>
						<?php echo esc_html( $wisetech_core_credit_text ); ?>
					<?php endif; ?>
					<?php if ( '' !== $wisetech_core_credit_url ) : ?>
						<a href="<?php echo esc_url( $wisetech_core_credit_url ); ?>" rel="nofollow"><?php echo esc_html( $wisetech_core_credit_label ); ?></a>.
					<?php else : ?>
						<?php echo esc_html( $wisetech_core_credit_label ); ?>.
					<?php endif; ?>
				</span>
			<?php endif; ?>
		</div>

		<?php if ( $wisetech_core_footer_search ) : ?>
			<div class="footer-search" aria-label="<?php esc_attr_e( 'Footer search', 'wisetech-core' ); ?>">
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer navigation', 'wisetech-core' ); ?>">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'depth' => 1 ) ); ?>
			</nav>
		<?php endif; ?>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
