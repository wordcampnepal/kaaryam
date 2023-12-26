<?php
/**
 * Kaaryam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Kaaryam
 * @since Kaaryam 1.0
 */


if ( ! function_exists( 'kaaryam_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Kaaryam 1.0
	 *
	 * @return void
	 */
	function kaaryam_support() {
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

// add_action( 'after_setup_theme', 'kaaryam_support' );

if ( ! function_exists( 'kaaryam_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kaaryam 1.0
	 *
	 * @return void
	 */
	function kaaryam_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'kaaryam-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( '/style.css' ) )
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'kaaryam_styles' );