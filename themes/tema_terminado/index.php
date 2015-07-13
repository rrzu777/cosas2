<?php get_header(); ?> 
 
  <section id="main">
<?php //inserta el loop
	get_loop();
?>
 
  <!-- paginacion del HOME-->
   <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
  <!-- FIN paginacion del HOME-->
  </section> <!-- Fin de #main -->

 
    <?php  get_sidebar()?>
 </div> 
 <!-- FIN #cuerpo -->
 
  <?php get_footer(); ?>