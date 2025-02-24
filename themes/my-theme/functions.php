
<?php

add_action( 'wp_enqueue_scripts', 'my_theme_styles' );

function my_theme_styles() {
	wp_enqueue_style( 
		'my-theme-style', 
		get_stylesheet_uri()
	);
}