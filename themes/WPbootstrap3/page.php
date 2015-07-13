<?php get_header(); ?>

	<?php if(is_front_page()) {?>
	<?php query_posts('showposts=3&post_type=post'); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $i++; ?>

		<?php if ($i==1) {  ?>
		<div class="item active">
		<?php } else { ?>
		<div class="item">
		<?php }  ?>
          <?php if ( has_post_thumbnail() ) { 
				$url = wp_get_attachment_url( get_post_thumbnail_id() );
			?>
		  <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
          <?php }  ?>
		  <div class="container">
            <div class="carousel-caption">
              <h1><?php the_title(); ?></h1>
              <p><a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button">Read more...</a></p>
            </div>
          </div>
        </div>
		<?php endwhile; endif; ?>

		</div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	<?php } wp_reset_query(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
	<?php while(have_posts()) : the_post(); ?>
		<div class="jumbotron">
		  <div class="container">
			<h1><a href"<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<p><?php the_content(); ?></p>
		  </div>
		</div>
	<?php endwhile; wp_reset_query(); ?>

	<?php 
	$mark1text = get_post_meta($post->ID, "mark1-text", true);
	$mark1link = get_post_meta($post->ID, "mark1-link", true);
	$mark2text = get_post_meta($post->ID, "mark2-text", true);
	$mark2link = get_post_meta($post->ID, "mark2-link", true);
	$mark3text = get_post_meta($post->ID, "mark3-text", true);
	$mark3link = get_post_meta($post->ID, "mark3-link", true);
	?>
	<?php if ($mark1text) { ?>
		<div class="container">
		  <!-- Example row of columns -->
		  <div class="row">
			<div class="col-md-4">
				<?php echo $mark1text; ?>
				<p><a class="btn btn-default" href="<?php echo $mark1link; ?>" role="button">View details &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<?php echo $mark2text; ?>
				<p><a class="btn btn-default" href="<?php echo $mark2link; ?>" role="button">View details &raquo;</a></p>
		   </div>
			<div class="col-md-4">
				<?php echo $mark3text; ?>
				<p><a class="btn btn-default" href="<?php echo $mark3link; ?>" role="button">View details &raquo;</a></p>
			</div>
		  </div>
	<?php } ?>

	
<?php get_footer(); ?>	  
