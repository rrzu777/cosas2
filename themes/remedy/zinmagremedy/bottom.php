<div id="bottom">

<div class="videopost">
<div class="videoposttitle"></div>
<div class="videoentry">
<?php 
	$video = get_option('remedy_video_category'); // Number of other entries to be shown
	
	$my_query = new WP_Query('category_name= '. $video .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<?php the_content('Continue...'); ?>

<?php endwhile; ?>


 
</div>
</div>
<div class="bottompost">
<?php include (TEMPLATEPATH . '/tabber.php'); ?>	
</div>	

</div>
