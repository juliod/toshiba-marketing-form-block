<?php
/**
 * Plugin Name: Toshiba Marketing Form Block
 * Plugin URI:  https://github.com/juliod/toshiba-marketing-form-block 
 * Description: A Toshiba Marketing form block for the Gutenberg editor.
 * Version: 1.0.0
 * Author: deypro
 * Author URI:  https://www.deypro.com/
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
