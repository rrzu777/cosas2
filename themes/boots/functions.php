<?php
function theme_styles(){
	wp_enqueue_style('bs_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css' );

}

add_action('wp_enqueue_scripts', 'theme_styles' );
add_theme_support('post-thumbnails');