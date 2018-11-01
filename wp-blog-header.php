<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/index.html' );

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/index.html' );

}
