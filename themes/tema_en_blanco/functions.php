<?php
// Registro del menú de WordPress
 
add_theme_support( 'nav-menus' );
 
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main'
        )
    );
}

//  Main Sidebar
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Main Sidebar',
           'before_widget' => '<hr>',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));

	 //Habilitar thumbnails
	 
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);

// Permitir comentarios encadenados
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
       wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');

//loop
function get_loop() {
	include('loop.php');
}
////////////


//paginacion en HOME
function pagination($pages = '', $range = 4)
{ 
     $showitems = ($range * 2)+1; 
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }  
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>P&#225;ginas ".$paged." de ".$pages." | </span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; Primera</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Anterior</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Siguiente &rsaquo;</a>"; 
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Ultima &raquo;</a>";
         echo "</div>\n";
     }
}

// extrae la primer imagen del post
function get_first_image_thumb()
{
	// tancho de la miniatura
	$ancho ="200px";
    // Recuperamos el post
    $Html = strtolower(get_the_content());

    // Extraemos todas las imagenes
    $extrae = '/<img .*src=["\']([^ ^"^\']*)["\']/';

    // Extraemos todas las imágenes
    preg_match_all( $extrae  , $Html , $matches );

    // donde
    // [1] -> segundo elemento del array "texto/imagenes"
    // [0] -> primera imagen del array de "imagenes"
    $image = $matches[1][0];

    if($image)
    {
        echo '
              <img src="'.$image.'" alt="" width="'.$ancho.'" align="left"/>
              ';
    } else {
        return false;
    }
}

?>