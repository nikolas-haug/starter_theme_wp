<?php

// Setup
define('STARTER_THEME_DEV_MODE', true); // defines dev or production mode

// Includes
include( get_theme_file_path( '/includes/enqueue.php' ));
include( get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/custom-nav-walker.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));
include( get_theme_file_path( '/includes/theme-customizer.php' ));

// Hooks - Plugin API
add_action( 'wp_enqueue_scripts', 'starter_theme_enqueue' );
add_action( 'after_setup_theme', 'starter_theme_setup_theme' );
add_action( 'widgets_init', 'starter_theme_widgets' );
add_action( 'customize_register', 'starter_theme_cusotomize_register' );

// Shortcodes