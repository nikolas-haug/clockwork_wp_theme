<?php

// Setup
define('CLOCKWORK_DEV_MODE', true); // defines dev or production mode

// Includes
include get_theme_file_path('/includes/enqueue.php');
include get_theme_file_path('/includes/setup.php');
include get_theme_file_path('/includes/widgets.php');
include get_theme_file_path('/includes/custom-posts.php');
include get_theme_file_path('/includes/theme-customizer.php');

// Hooks - Plugin API
add_action('wp_enqueue_scripts', 'clockwork_enqueue');
add_action('after_setup_theme', 'clockwork_setup_theme');
add_action('widgets_init', 'clockwork_widgets');
add_action('customize_register', 'clockwork_customize_register');
add_action('init', 'clockwork_custom_post_types');

// Shortcodes

// Custom
include get_theme_file_path('/custom/custom-bg-callback.php');