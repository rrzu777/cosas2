<?php
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'WPBootstrap3' ),
) );

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}

function wpbootstrap_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpbootstrap' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all single posts.', 'wpbootstrap' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'wpbootstrap_widgets_init' );

function wpbootstrap_theme_customizer( $wp_customize ) {

	$wp_customize->add_section( 'wpbootstrap_logo_section' , array(
		'title'       => __( 'Logo', 'wpbootstrap' ),
		'priority'    => 30,
		'description' => 'Upload a branding logo to the header',
	) );

	$wp_customize->add_setting( 'branding_logo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'branding_logo', array(
		'label'    => __( 'Upload a logo', 'wpbootstrap' ),
		'section'  => 'wpbootstrap_logo_section',
		'settings' => 'branding_logo',
	) ) );
}

add_action( 'customize_register', 'wpbootstrap_theme_customizer' );

?>