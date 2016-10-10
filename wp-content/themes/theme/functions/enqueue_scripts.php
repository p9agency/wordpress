<?php

function scripts_styles() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/style.css', array(), null );

	

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/compiled/scripts.min.js', array( 'jquery' ));

}
add_action( 'wp_enqueue_scripts', 'scripts_styles' );