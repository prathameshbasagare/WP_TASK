
<?php

add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
add_action( 'wp_enqueue_scripts', 'p_custom_styles' );
add_action('after_setup_theme','p_enqueue_editor_styles');
add_action('wp_footer', 'my_theme_custom_js');
function my_theme_styles() {
	wp_enqueue_style( 
		'my-theme-style', 
		get_stylesheet_uri()
	);
}
function p_enqueue_editor_styles(){
	add_editor_style(
		get_theme_file_uri('/assets/css/editor-style.css')
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


function get_custom_meta_field($atts) {
    $atts = shortcode_atts(array(
        'field' => '',
        'font_size' => '18px',
        'font_family' => 'var(--wp--preset--font-family--pt-sans), sans-serif',
        'color' => '#434343',
		'style' => ''

    ), $atts);

    global $post;
    $value = !empty($atts['field']) ? get_post_meta($post->ID, $atts['field'], true) : '';

    if($atts['field']==='remote-class-info') {
		$value = preg_replace('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/', '<strong style="color: #00ACB4;">$1</strong>', $value);
	}
	
    return '<p style="font-size:' . esc_attr($atts['font_size']) . '; font-family:' . esc_attr($atts['font_family']) . '; color:' . esc_attr($atts['color']) . ';">' . $value . '</p>';
}
add_shortcode('custom_meta', 'get_custom_meta_field');


function get_remote_class_section(){
	return  '';
}
add_shortcode('remote_class_section','get_remote_class_section');