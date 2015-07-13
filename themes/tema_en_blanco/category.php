<?php get_header(); ?>
 
    <section id="main">
        <article id="single">
        
<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Categoria: %s', '' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
                </header>
                <?php endif; ?>

        
    <?php get_loop();?>
        
          <!-- paginacion >
   <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
  <!-- FIN paginacion del HOME-->
 
  </article> <!-- Fin de single -->
 
  </section> <!-- Fin de main -->
  <?php  get_sidebar()?>
  </div>
<?php get_footer(); ?>