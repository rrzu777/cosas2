<?php get_header(); ?>

<body>

	<h1 class="ola">esto es una entrada</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<header id="header">
<h1><?php the_title(); ?></h1>
</header>
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
<?php get_footer(); ?>