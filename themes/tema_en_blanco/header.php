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
 </head>
<body>
  <div class="wrapper">

    <header>
      <h1><a class="tituloBlog" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h2 class="descripcion"><?php bloginfo('description'); ?></h2>
   </header>
  
      <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
      

       <div id="cuerpo">