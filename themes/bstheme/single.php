<?php get_header(); ?>

    <div class="container">
    <div class="row">
    	<div class="col-md-8">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		
    		<div class="page-header">
    			<h1><?php wp_title(''); ?></h1>
    		</div>
    			<p><em>
			Escrito por: <?php the_author(); ?> <br>
			Fecha: <?php echo the_time('l j, F Y' );; ?> <br>
			Categoria: <?php the_category(', '); ?>
		</p></em>
		
		<?php the_content(); ?>
		<hr>
		<?php comments_template(); ?>

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

