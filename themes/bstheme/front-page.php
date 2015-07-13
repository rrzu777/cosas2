<?php get_header(); ?>
<?php 
  $values = array(
    'post_type' => 'post',
    'category_name' => 'imagenes');
  $query = new WP_Query($values);
 ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container hola">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $query->current_post; ?>" class="<?php if($query->current_post == 0):?>active<?php endif;?>"></li>
<?php endwhile;endif; ?>
  </ol>
<?php rewind_posts(); ?>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
 <?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="item <?php if($query->current_post == 0):?>active<?php endif;?>">
      <?php 
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, '', true );
        $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true );

       ?>

      <img src="<?php echo $thumbnail_url[0];?>" alt="<?php echo $thumbnail_meta; ?>">
      <div class="carousel-caption">
        <?php the_title(); ?>
      </div>
    </div>
<?php endwhile; endif; ?>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

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


