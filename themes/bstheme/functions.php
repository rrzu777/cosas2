<?php
function theme_styles(){
	wp_enqueue_style('bs_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css' );

}
add_action('wp_enqueue_scripts', 'theme_styles' );

function theme_js(){
	global $wp_scripts;
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'', true );

}
add_action('wp_enqueue_scripts', 'theme_js' );
add_filter('show_admin_bar', '__return_false' );
add_theme_support('menus');
add_theme_support('post-thumbnails');

function our_theme_menus(){
	register_nav_menus(
		array(
				'header-menu' => __('Menú Principal')
			)
		 );
}
add_action('init', 'our_theme_menus');

function create_widget($name, $id, $description){
	register_sidebar(
		array(
	'name'          => __($name),
	'id'            => $id,
	'description'   => __($description),
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' 
			)
		);
}
create_widget('Portada Izq', 'frontleft', 'Se muestra en el lado izquierdo');
create_widget('Portada Mid', 'frontcent', 'Se muestra en el lado central');
create_widget('Portada Der', 'frontright', 'Se muestra en el lado derecho');

create_widget('Sidebar', 'sidebar', 'Se muestra en el lado derecho de las paginas');
create_widget('Sidebar Blog', 'blog', 'Se muestra en el lado derecho del blog');

?>