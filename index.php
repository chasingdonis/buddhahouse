<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<center><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat.jpg" /></center>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
				<a href="<?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1></a>
                <?php the_content(); ?>
				<!--<p>I'm a serious cat and like to take selfies with serious poses.</p>
				<p>I like to sleep, sometime run like a dog, jump up and down, and follow people to see what they do.</p> -->
			</section>
            <?php endwhile; else: ?>
            <p><?php _e('sorry, no conent'); ?></p>
            <?php endif; ?>
		</section>
		<footer>
			<h1>Contact Me</h1>
			<p>Buddha House</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>