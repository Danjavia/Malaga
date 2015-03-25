<?php 

	// Variables
	$themename = "Malagatheme"; 
	$shortname = "hlm";

	// Add support for thumbs
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); // Posts and Pages

	set_post_thumbnail_size( 255, 255, true );

	add_action( 'after_setup_theme', 'set_thubnails_size' );

	function set_thubnails_size() {
		add_image_size( 'small-thumb', 255, 255, true ); // 300 pixels wide (and unlimited height)
		add_image_size( 'intermediate-thumb', 350, 350, true ); // 300 pixels wide (and unlimited height)
		add_image_size( 'big-thumb', 600, 600, true ); // 300 pixels wide (and unlimited height)
		add_image_size( 'biggest-thumb', 800, 600, true ); // 300 pixels wide (and unlimited height)
	}
?>