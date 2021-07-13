<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage HumanInsights
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

// Register menus
function register_my_menus() {
    register_nav_menus(
	array(
	    'mainmenu' => __( 'Main Menu', 'start' )
	)
    );
}
add_action( 'init', 'register_my_menus' );
