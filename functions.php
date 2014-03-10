<?php

// Post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 320, 320, true ); // Regular thumbnail hard-cropped for gallery-style lists.
add_image_size( 'single-post-xsmall', 200, 200 ); // X-small for mobile thumbs
add_image_size( 'single-post-small', 480, 480 ); // Small for summaries
add_image_size( 'single-post-medium', 640, 9999 ); // Medium-size for inserting in posts
add_image_size( 'single-post-large', 1024, 768 ); // Large size for slimbox view
add_image_size( 'single-post-xlarge', 1280, 1024 ); // XLarge size for smth in the future
add_image_size( 'single-post-full', 9999, 9999 ); // Full-size image for whatever!

function register_my_menus() {
	register_nav_menus(
		array( 'site-nav' => __( 'Site Navigation' ))
	);
}
add_action( 'init', 'register_my_menus' );

function load_scripts() {
	if (!is_admin()) {
		// !Note: Remember to set scripts to load in footer by last parameter set to true, unless you want it loaded in wp_head.

		// Deregister jquery and load from CDNJS for faster loading + presence in users cache
		wp_deregister_script('jquery');
   		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js", false, '2,1,0', true);
		
		// Register Scripts common in user cache
		wp_register_script('html5shiv', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js", false, 'r29', true);
		wp_register_script('respond', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js", false, '1.4.2', true);

		// Own and uncommon scripts, merged and minified. Ie. sliders, etc.

		// Load scripts that are needed across all pages.
		wp_enqueue_script('jquery');
		wp_enqueue_script('html5shiv');
		wp_enqueue_script('respond');

		// Loaded with conditionals to prevent bloat.
	}
}
add_action('init', 'load_scripts');

?>