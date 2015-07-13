<?php get_header(); ?>

    <div class="container">
    <div class="row">
    	<div class="col-md-8">
    		
    		<div class="page-header">
    			<h1><?php wp_title(''); ?></h1>
    		</div>
    	

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="post">
		<h2>
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
		</h2>
		<?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
		<p><em>
			Escrito por: <?php the_author(); ?> <br>
			Fecha: <?php echo the_time('l j, F Y' );; ?> <br>
			Categoria: <?php the_category(', '); ?>
		</p></em>
		
		<?php the_excerpt(); ?>
		<hr>
	</article>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<div class="page-header">
		<h1>Falta contenido</h1>
	</div>
	<p>Mensajes</p>
	<!-- no posts found -->
	<?php endif; ?>
</div>
<?php get_sidebar('blog'); ?>
   </div>
    </div>
    <?php get_footer(); ?>

