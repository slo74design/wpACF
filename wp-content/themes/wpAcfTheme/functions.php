<?php
/**
 * functions and definitions
 *
 * @package functions
 */

// THEME VERSION NUMBER : Replace the version number of the theme on each release.
if ( ! defined( '_RSQ_VERSION' ) ) {
	define( '_RSQ_VERSION', '1.0.0' );
}

function enqueue_styles() {    
	wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwind_output.css', array(), _RSQ_VERSION);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');