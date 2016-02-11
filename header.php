<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    
    <?php wp_head(); ?>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
</head>
	<body <?php body_class($class);?>>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
            <?php wp_nav_menu (array ('menu' => 'main nav')); ?>
			<nav>
				<!--<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul> -->
			</nav>
		</header>