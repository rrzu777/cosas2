
<div class="featlist">
<div class="highlight"></div>
<?php 
	$highcat = get_option('remedy_story_category'); 
	$highcount = get_option('remedy_story_count');
	
	$my_query = new WP_Query('category_name= '. $highcat .'&showposts='.$highcount.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="fblock">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/<?php echo strtolower($homethumb); ?>.jpg" width="100" height="60" alt=""/>
<div class="fcats"><?php the_category(', '); ?> </div> 
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="auth"> Posted by <?php the_author(); ?> </div> 
<div class="fmeta"> 	

<?php the_time('M-j-Y'); ?> I
<?php comments_popup_link('ADD COMMENTS', '1 COMMENT', '% COMMENTS'); ?>
</div>
</div>
<?php endwhile; ?>



</div>
 <div class="clear"></div>