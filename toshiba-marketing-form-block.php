<?php
/**
 * Plugin Name:       Toshiba Marketing Form
 * Plugin URI:        https://www.deypro.com/wordpress/plugins/toshiba-marketing-form-block
 * Description:       This block shows a contact form to Toshiba Marketing
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            deypro.com
 * License:           MIT
 * License URI:       https://mit-license.org/
 * Text Domain:       toshiba-marketing-form-block
 *
 * @package Toshibamarketing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


function toshiba_marketing_form_block_render_callback ( $block_attributes, $content ) {
	$post_id = 1;
    return sprintf(
        '<a class="wp-block-toshiba_marketing_form_block" href="%1$s">%2$s</a>',
        esc_url( get_permalink( $post_id ) ),
        esc_html( get_the_title( $post_id ) )
    );
}
/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function toshibamarketing_toshiba_marketing_form_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'toshibamarketing_toshiba_marketing_form_block_block_init' );
