<?php
/**
 * Search form.
 *
 * @package WiseTech_Core_Theme
 */

static $wisetech_core_search_instance = 0;
$wisetech_core_search_instance++;
$wisetech_core_search_id = 'wisetech-search-field-' . $wisetech_core_search_instance;
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo esc_attr( $wisetech_core_search_id ); ?>"><?php esc_html_e( 'Search for:', 'wisetech-core' ); ?></label>
	<input id="<?php echo esc_attr( $wisetech_core_search_id ); ?>" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search articles…', 'placeholder', 'wisetech-core' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<button type="submit" class="search-submit"><?php esc_html_e( 'Search', 'wisetech-core' ); ?></button>
</form>
