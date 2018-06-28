<?php
/**
 * Plugin Name: WP Menu Extractor
 * Plugin URI:  https://github.com/deshabhishek007/wp-menu-extractor
 * Description: Rest routes for WordPress Menu .
 *
 * Version:     1.0
 *
 * Author:      Abhishek Deshpande
 * Author URI:  http://www.whoisabhi.com
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

include 'class-menu-extractor.php';

if ( ! function_exists ( 'WP_MENU_EXTRACTOR_init' ) ) :

	function WP_MENU_EXTRACTOR_init() {

		$class = new WP_MENU_EXTRACTOR();
		add_filter( 'json_endpoints', array( $class, 'register_routes' ) );
		add_filter( 'rest_api_init', array( $class, 'register_routes' ) );
	}

	add_action( 'init', 'WP_MENU_EXTRACTOR_init' );

endif;
