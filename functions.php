<?php
/*
Author: Jihan Ahmed
URL: http://wpunmarked.com

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

// Theme setup and custom theme supports.
require get_template_directory() . '/inc/functions/setup.php';

// Register widget area.
require get_template_directory() . '/inc/functions/widgets.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/functions/template-tags.php';

// Load functions to secure your WP install.
require get_template_directory() . '/inc/functions/cleanup.php';

// Customizer additions.
require get_template_directory() . '/inc/functions/customizer.php';

// Custom comment form.
require get_template_directory() . '/inc/functions/comments.php';

// Load Jetpack compatibility file.
require get_template_directory() . '/inc/functions/jetpack.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/functions/extras.php';

// Load unmarked breadcrumbs for WordPress
require get_template_directory() . '/inc/functions/breadcrumbs.php';

// Load custom Bootstrap pagination for WordPress
require get_template_directory() . '/inc/functions/wp_bootstrap_pagination.php';

// Enqueue scripts and styles.
require get_template_directory() . '/inc/functions/enqueue-scripts.php';

// Fix WordPress gallery style with Bootstrap layout and css
include_once get_template_directory() . '/inc/functions/bootstrap-wp-gallery.php';

// Disable emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Registers an editor stylesheet for the theme.
function unmarked_theme_add_editor_styles() {
    add_editor_style( get_stylesheet_directory_uri() . '/css/editor-style.css' );
}
add_action( 'admin_init', 'unmarked_theme_add_editor_styles' );

// Add googleFonts of your choice
function unmarked_fonts() {
  wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Roboto:400,500,700');
}
add_action('wp_enqueue_scripts', 'unmarked_fonts');