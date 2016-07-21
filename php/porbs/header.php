<!DOCTYPE HTML>
<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	
	<?php wp_head(); ?>
	
</head>
	<body>
		<header>
			<div class="header-top">
				<a href="<?php bloginfo('home'); ?>"><div class="header-logo"> Central Channel</div></a>
				
				<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' ,'container_class'=>'header-nav')); ?>
				
				<?php  get_search_form(); ?>
			</div>

			<div class="slider">
				<div class="ism-slider" data-play_type="loop" id="my-slider">
				  <ol>
					<li>
					  <img src="<?php bloginfo('template_url'); ?>/images/slides/1.jpg" alt="slider_img_1">
					  <div class="ism-caption ism-caption-0">Picture_1</div>
					</li>
					<li>
					  <img src="<?php bloginfo('template_url'); ?>/images/slides/2.jpg" alt="slider_img_2">
					  <div class="ism-caption ism-caption-0">Picture_2</div>
					</li>
					<li>
					  <img src="<?php bloginfo('template_url'); ?>/images/slides/3.jpg" alt="slider_img_3">
					  <div class="ism-caption ism-caption-0">Picture_3</div>
					</li>
				  </ol>
				</div>
			</div>
		</header>
			