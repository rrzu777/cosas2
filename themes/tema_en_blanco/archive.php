<?php get_header(); ?>
 
    <section id="main">
        <article id="single">

<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Archivos siarios: %s', '' ), get_the_date() );
					elseif ( is_month() ) :
						printf( __( 'Archivos mensuales: %s', '' ), get_the_date( _x( 'F Y', 'monthly archives date format', '' ) ) );
					elseif ( is_year() ) :
						printf( __( 'Archivos anuales: %s', '' ), get_the_date( _x( 'Y', 'yearly archives date format', '' ) ) );
					else :
						_e( 'Archivos', '' );
					endif;
				?></h1>
			</header><!-- .archive-header -->
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
 <!-- FIN #cuerpo -->
<?php get_footer(); ?>