<?php
/*
Plugin Name: TablePress Extension: Change Table Shortcode
Plugin URI: https://tablepress.org/extensions/table-shortcode/
Description: Custom Extension for TablePress to change the [table /] Shortcode, e.g. if that's already taken by the theme or another plugin.
Version: 1.0
Author: Tobias Bäthge
Author URI: https://tobias.baethge.com/
*/

add_filter( 'tablepress_table_shortcode', 'tablepress_change_table_shortcode' );

/**
 * Change the TablePress Shortcode from [table /] to something else.
 *
 * @since 1.0.0
 *
 * @param string $shortcode Current TablePress [table /] Shortcode.
 * @return string New TablePress Shortcode.
 */
function tablepress_change_table_shortcode( $shortcode ) {
	return 'tp_table';
}
