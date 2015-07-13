<script type="text/javascript">
stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	panelbehavior: {speed:500, wraparound:true, persist:true},
	defaultbuttons: {enable: true, moveby: 2, leftnav: ['http://web2feel.com/images/rem1.jpg', -14, 60], rightnav: ['http://web2feel.com/images/rem2.jpg', 0, 60]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['external'] //content setting ['inline'] or ['external', 'path_to_external_file']
})


</script>

<div id="mygallery" class="stepcarousel">
<div class="belt">
<?php 
	$slidecat = get_option('remedy_slide_category'); 
	$slidecount = get_option('remedy_slide_count');
	
	$my_query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="panel">
<?php $homethumb = get_post_meta($post->ID,'homethumb', true); ?>

<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" > <img src="<?php bloginfo('url'); ?>/wp-content/uploads/<? echo strtolower($homethumb); ?>.jpg" width="200" height="120" alt="<?php the_title(); ?>"/> </a>

</div>

<?php endwhile; ?>



</div>
</div>

