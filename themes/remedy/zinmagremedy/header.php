<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/glide.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/tabber.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/banner.css" media="screen" />	
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/example.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/minipost.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/featlist.css" media="screen" />

<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	var sfEls = document.getElementById("menu").getElementsByTagName("LI");
	var sfEls = document.getElementById("catmenu").getElementsByTagName("LI");
		for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>



<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>

</head>

<body>

<div id="wrapper">
<div id="topbar">
	<div id="dates"><?php echo date('l, F j, Y'); ?></div>
		<ul>
		
	<li><a href="<?php bloginfo('rss2_url'); ?>">Content feed</a></li>
	<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments Feed</a></li>
	</ul>
	

</div>
<div id="top"> 
<div class="blogname">
	<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
	<h2><?php bloginfo('description'); ?></h2>
</div>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

</div>

<div id="foxmenucontainer">
	<div id="menu">
		<ul>
			<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order'); ?>
		
		</ul>
	</div>		
</div>
<div class="clear"></div>
<div id="catmenucontainer">
	<div id="catmenu">
			<ul>
				<?php wp_list_categories('sort_column=name&title_li=&depth=2'); ?>
			</ul>
	</div>		
</div>
<div class="clear"></div>
<div id="casing">		