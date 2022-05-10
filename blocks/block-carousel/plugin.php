<?php
/**
 * Plugin Name: Image Slider block for Brolly/Umbrella Framework
 * Description: Add a responsive slider/carousel to any Gutenberg Page
 * Author URI: https://samtoohey.xyz
 * Version: 1.0.0
 *
 * @package carousel-block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Directory path of this plugin
 *
 * @var string
 */
define( 'CB_PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'init.php';

/**
 * Blocks
 */
require_once plugin_dir_path( __FILE__ ) . 'block-carousel/carousel/index.php';
require_once plugin_dir_path( __FILE__ ) . 'block-carousel/slide/index.php';
