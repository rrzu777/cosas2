<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <!-- post -->
       <?php the_content( ); ?>
       <?php endwhile; ?>
       <!-- post navigation -->
       <?php else: ?>
       <!-- no posts found -->
       <?php endif; ?>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <?php dynamic_sidebar('frontleft' ); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar('frontcent' ); ?>
       </div>
        <div class="col-md-4">
			<?php dynamic_sidebar('frontright' ); ?>
        </div>
      </div>

<?php get_footer();?>


