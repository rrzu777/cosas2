<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
  <meta charset= <?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title(); ?></title>
 
  <!-- Definir viewport para dispositivos web móviles -->
  <meta name="viewport" content="width=device-width, minimum-scale=1">
 
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
 
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
  <?php wp_head(); ?>
  <!-- Slider -->
  	<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/easySlider1.7.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
               	speed: 900,
				pause:	3000,  
				continuous: true
			});
		});	
	</script>
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/screen.css" rel="stylesheet" type="text/css" media="screen" />
   <!-- FIN Slider -->
 
</head>
<body>
  <div class="wrapper">

    <header>
      <h1><a class="tituloBlog" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h2 class="descripcion"><?php bloginfo('description'); ?></h2>
   </header>
  
      <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
      
<!-- Inserta Slider -->  
      <div id="container">           
        <div id="content">        
            <div id="slider">
                <ul>				
                    <li><img src="<?php echo get_bloginfo('template_url'); ?>/images/slices/slice1.jpg" alt="" /></li>
             		<li><img src="<?php echo get_bloginfo('template_url'); ?>/images/slices/slice2.jpg" alt="" /></li>
                    <li><img src="<?php echo get_bloginfo('template_url'); ?>/images/slices/slice3.jpg" alt="" /></li>
                </ul>
            </div>             
        </div>  
    </div>
<!-- FIN Slider -->	 
  
       <div id="cuerpo">