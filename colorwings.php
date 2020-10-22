<?php
/**
 * Plugin Name: Color Wings
 * Description: Visual Style Editor
 * Version: 1.0.0
 * Author: Karthik Bhat
 * Author URI: https://karthikbhat.net/
 * License: GPL2
 */

/**
 * Load colorwings.
 */
function load_colorwings() {
	require_once dirname( __FILE__ ) . '/class-colorwings.php';
}

add_action( 'after_setup_theme', 'load_colorwings' );
