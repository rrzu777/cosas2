<?php get_header(); ?>
 
    <section id="main">
        <article id="single">
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
            <h2 class="tituloEntrada"><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?> </a></h2>
              <small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?> </small>
 
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