<?php

add_theme_support('post-thumbnails');

add_image_size('my-size', 200, 180, true);

function register_my_menus(){
	register_nav_menus(
			array(
					'top' => __('Menu del encabezado'),
					'bot' => __('Menu del footer')
				)
		);
}

add_action('init', 'register_my_menus');

function miplugin_register_sidebar(){
	register_sidebar(
		array(
			'id' => 'sidebar-footer',
			'name' => 'Sidebar del Footer',
			'description' => 'Sidebar donde colocar links del footer'
			)
	 );
}
add_action('widgets_init', miplugin_register_sidebar);


add_filter( 'rwmb_meta_boxes', 'platzi_register_meta_boxes' );

function platzi_register_meta_boxes( $meta_boxes )
{
    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'personal',
        'title'    => 'Personal Information',
        'pages'    => array( 'post', 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Nombre Completo',
                'desc'  => 'Nombre y apellido',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true,
            ),
            array(
                'name'  => 'Descripción',
                'desc'  => 'Introduce tu descripción',
                'id'    => $prefix . 'fdescription',
                'type'  => 'textarea',
                'std'   => '....',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );

    // 2nd meta box
    $meta_boxes[] = array(
        'title'    => 'Media',
        'pages'    => array( 'movie', 'slider' ),
        'fields' => array(
            array(
                'name' => 'URL',
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );

    return $meta_boxes;
}
