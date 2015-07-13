<div class="featout">
<div class="featured">
<?php 
	$featcat = get_option('remedy_feat_category'); 
	
	$my_query = new WP_Query('category_name= '. $featcat .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
		
	<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

	<div class="fentry">
	
	<?php the_content('Read the rest of this entry &raquo;'); ?>
	 <div class="clear"></div>
</div>

	
	<?php endwhile; ?>
		
</div>
</div>