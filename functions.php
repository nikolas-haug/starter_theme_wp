<?php

// Setup
define('STARTER_THEME_DEV_MODE', true); // defines dev or production mode

// Includes
include(get_theme_file_path( '/includes/enqueue.php' ));
include(get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/custom-nav-walker.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));

// Hooks - Plugin API



// Shortcodes