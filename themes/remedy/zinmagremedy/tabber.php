<div class="tabber">
<div class="tabbertab">
     <h3>TAG CLOUD</h3>
<?php
if ( function_exists( 'wp_cumulus_insert' ) ) { 
	wp_cumulus_insert(); 
}
?>
</div>

<div class="tabbertab">

<h2>POPULAR NEWS</h2>
         <ul>
<?php
if ( function_exists( 'akpc_most_popular' ) ) { 
	akpc_most_popular();
}
?>
         </ul>

</div>

<div class="tabbertab">
 <li>  
<h2>RECENT NEWS</h2>
<ul>
<?php
$myposts = get_posts('numberposts=10&offset=1');
foreach($myposts as $post) :
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
<?php endforeach; ?>
</ul>
</li>
</div>

</div>

