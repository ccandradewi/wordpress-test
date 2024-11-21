<?php
/**
 * Plugin Name: Custom Gutenberg Blocks
 * Description: A plugin to create custom Gutenberg blocks.
 * Version: 1.0
 * Author: Your Name
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Register block
function custom_gutenberg_blocks() {
    wp_register_script(
        'image-content-block',
        plugins_url( '/block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-editor' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
    );

    register_block_type( 'custom/image-content', array(
        'editor_script' => 'image-content-block',
    ) );
}
add_action( 'init', 'custom_gutenberg_blocks' );
