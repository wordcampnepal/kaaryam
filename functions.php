<?php
/**
 * Starter FSE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Starter FSE
 * @since Starter FSE 1.0
 */


if (!function_exists('kaaryam_theme_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @return void
     * @since Starter FSE 1.0
     *
     */
    function kaaryam_theme_support()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');

        // Experimental support for adding blocks inside nav menus
        add_theme_support('block-nav-menus');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');
    }

endif;

add_action('after_setup_theme', 'kaaryam_theme_support');

if (!function_exists('kaaryam_scripts')) :

    /**
     * Enqueue styles.
     *
     * @return void
     * @since Starter FSE 1.0
     *
     */
    function kaaryam_scripts()
    {
        // Enqueue theme stylesheet.
        wp_enqueue_style(
            'kaaryam-style',
            get_template_directory_uri() . '/style.css',
            array(),
            filemtime(get_theme_file_path('/style.css'))
        );
    }

endif;

add_action('wp_enqueue_scripts', 'kaaryam_scripts');