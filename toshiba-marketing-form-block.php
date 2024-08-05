<?php
/**
 * Plugin Name: Toshiba Marketing Form Block
 * Plugin URI:  https://github.com/juliod/toshiba-marketing-form-block 
 * Description: A Toshiba Marketing form block for the Gutenberg editor.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version: 1.0.0
 * Author: deypro
 * Author URI:  https://www.deypro.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       toshiba-marketing-form-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
/*
function create_block_toshiba_marketing_form_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_toshiba_marketing_form_block_block_init' );
*/

function toshiba_marketing_form_block_register_block() {
    // Register block editor script
    wp_register_script(
        'toshiba-marketing-form-block-editor-script',
        plugins_url( 'dist/index.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' )
    );

    // Register block editor styles
    wp_register_style(
        'toshiba-marketing-form-block-editor-style',
        plugins_url( 'src/editor.css', __FILE__ ),
        array( 'wp-edit-blocks' )
    );

    // Register block frontend styles
    wp_register_style(
        'toshiba-marketing-form-block-style',
        plugins_url( 'src/style.css', __FILE__ ),
        array()
    );

    // Register block
    register_block_type( 'toshiba-marketing-form-block/form', array(
        'editor_script' => 'toshiba-marketing-form-block-editor-script',
        'editor_style' => 'toshiba-marketing-form-block-editor-style',
        'style' => 'toshiba-marketing-form-block-style',
    ) );
}

add_action( 'init', 'toshiba_marketing_form_block_register_block' );
