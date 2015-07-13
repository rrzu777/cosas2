<?php get_header(); ?>
 
    <section id="main">
        <article id="single">


<?php if ( have_posts() ) : ?>

			<?php
				the_post();
			?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Todos los posts de %s', 'twentythirteen' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header><!-- .archive-header -->

			<?php
				rewind_posts();
			?>

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>

			<?php /* loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
            
              <!-- paginacion -->
   <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
  <!-- FIN paginacion -->


		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>        
        
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?>. </a></h2>
              <small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?> </small><br>
 
          <div class="post">
 
             <?php the_content(); ?>
 
        </div>

<!-- muestra comentarios-->
<div class="comentarios">
  <?php comments_template(); ?>
</div>
 <!-- FIN muestra comentarios-->
 
<?php endwhile; ?>
 
<?php endif; ?>
 
  </article> <!-- Fin de single -->
 
  </section> <!-- Fin de main -->
  <?php  get_sidebar()?>
  </div> 
 <!-- FIN #cuerpo -->
<?php get_footer(); ?>