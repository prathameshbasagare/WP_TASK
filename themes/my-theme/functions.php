
<?php

add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
add_action( 'wp_enqueue_scripts', 'p_custom_styles' );

add_action('wp_footer', 'my_theme_custom_js');
function my_theme_styles() {
	wp_enqueue_style( 
		'my-theme-style', 
		get_stylesheet_uri()
	);
}

function p_custom_styles(){
	wp_enqueue_style( 
		'p-custom-style', 
		get_theme_file_uri('/assets/css/styles.css')
	);
}

function my_theme_custom_js(){
	wp_enqueue_script(
		'my-theme-js',
		get_theme_file_uri('/assets/js/index.js')
	);
}

