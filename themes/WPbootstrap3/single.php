<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<!-- Main jumbotron for a primary marketing message or call to action -->
			<?php while(have_posts()) : the_post(); ?>
				<div class="jumbotron">
				  <div class="container">
					<h1><a href"<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php the_content(); ?></p>
				  </div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
		<div class="col-md-3">
			<?php get_sidebar('sidebar-1'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>	  
