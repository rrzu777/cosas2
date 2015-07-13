<?php get_header(); ?>
<body>
<header id="header"><h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>
<ul>
	<li><?php bloginfo('admin_email')?></li>
<li><?php bloginfo('version')?></li>
</ul></header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<figure><span class="peque"><?php the_post_thumbnail('medium'); ?></span></figure>

<h3 id="titulo"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
<span class="peque"><?php the_category(); ?></span>
<strong class="peque"><?php the_author(); ?></strong>
<small class="peque"><?php the_date() ?></small>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<h3>No se encontraron entradas!!!</h3>
<!-- no posts found -->
<?php endif; ?>
<? get_footer();
