
<div class="minipost">

<?php 
	$minicat1 = get_option('remedy_mini_category1'); 
	$my_query = new WP_Query('category_name= '. $minicat1 .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="hentry">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/<? echo strtolower($homethumb); ?>.jpg" width="100" height="60" alt=""  />
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="categ"><?php the_category(', '); ?> </div> 
<?php the_excerpt(); ?>
</div>
<div class="meta"> 	
	<div class="comm"><?php comments_popup_link('ADD COMMENTS', '1 COMMENT', '% COMMENTS'); ?></div>
	<div class="postmore"> <a href="<?php the_permalink() ?>">Read More</a></div>
</div>
<?php endwhile; ?>
</div>



<div class="minipost">

<?php 
	$minicat2 = get_option('remedy_mini_category2'); 
	$my_query = new WP_Query('category_name= '. $minicat2 .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="hentry">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/<? echo strtolower($homethumb); ?>.jpg" width="100" height="60" alt=""  />
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="categ"><?php the_category(', '); ?> </div> 
<?php the_excerpt(); ?>
</div>
<div class="meta"> 	
	<div class="comm"><?php comments_popup_link('ADD COMMENTS', '1 COMMENT', '% COMMENTS'); ?></div>
	<div class="postmore"> <a href="<?php the_permalink() ?>">Read More</a></div>
</div>
<?php endwhile; ?>
</div>


<div class="minipost">

<?php 
	$minicat3 = get_option('remedy_mini_category3'); 
	$my_query = new WP_Query('category_name= '. $minicat3 .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="hentry">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/<? echo strtolower($homethumb); ?>.jpg" width="100" height="60" alt=""  />
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="categ"><?php the_category(', '); ?> </div> 
<?php the_excerpt(); ?>
</div>
<div class="meta"> 	
	<div class="comm"><?php comments_popup_link('ADD COMMENTS', '1 COMMENT', '% COMMENTS'); ?></div>
	<div class="postmore"> <a href="<?php the_permalink() ?>">Read More</a></div>
</div>
<?php endwhile; ?>
</div>


<div class="minipost">

<?php 
	$minicat4 = get_option('remedy_mini_category4'); 
	$my_query = new WP_Query('category_name= '. $minicat4 .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="hentry">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/<? echo strtolower($homethumb); ?>.jpg" width="100" height="60" alt=""  />
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="categ"><?php the_category(', '); ?> </div> 
<?php the_excerpt(); ?>
</div>
<div class="meta"> 	
	<div class="comm"><?php comments_popup_link('ADD COMMENTS', '1 COMMENT', '% COMMENTS'); ?></div>
	<div class="postmore"> <a href="<?php the_permalink() ?>">Read More</a></div>
</div>
<?php endwhile; ?>
</div>


<div class="minipost">

<?php 
	$minicat5 = get_option('remedy_mini_category5'); 
	$my_query = new WP_Query('category_name= '. $minicat5 .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="hentry">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/<? echo strtolower($homethumb); ?>.jpg" width="100" height="60" alt=""  />
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="categ"><?php the_category(', '); ?> </div> 
<?php the_excerpt(); ?>
</div>
<div class="meta"> 	
	<div class="comm"><?php comments_popup_link('ADD COMMENTS', '1 COMMENT', '% COMMENTS'); ?></div>
	<div class="postmore"> <a href="<?php the_permalink() ?>">Read More</a></div>
</div>
<?php endwhile; ?>
</div>


<div class="minipost">

<?php 
	$minicat6 = get_option('remedy_mini_category6'); 
	$my_query = new WP_Query('category_name= '. $minicat6 .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="hentry">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/<? echo strtolower($homethumb); ?>.jpg" width="100" height="60" alt=""  />
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="categ"><?php the_category(', '); ?> </div> 
<?php the_excerpt(); ?>
</div>
<div class="meta"> 	
	<div class="comm"><?php comments_popup_link('ADD COMMENTS', '1 COMMENT', '% COMMENTS'); ?></div>
	<div class="postmore"> <a href="<?php the_permalink() ?>">Read More</a></div>
</div>
<?php endwhile; ?>
</div>


