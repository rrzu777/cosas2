  <!-- LOOP -->
 <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
  <article>
    <h2 class="tituloEntrada"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?>  </small>
      
	  <?php
			get_first_image_thumb(); //muestra primer imagen del post
	  ?>	  
    
      
      
      <?php the_excerpt();  ?>
  <br />
  <a href="<?php echo get_permalink(); ?>" class="leermas">>> Leer mas...</a>
   </article>
  <?php endwhile; else: ?>
    <p><?php _e('No hay entradas .'); ?></p>
      </article>
  <?php endif; ?>
  
 <!-- fin LOOP-->