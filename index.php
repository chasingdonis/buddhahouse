<?php get_header(); ?>
		<section>
			<center>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat.jpg" /></center>
				<a href="<?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1></a>
                <?php the_content(); ?>
				<!--<p>I'm a serious cat and like to take selfies with serious poses.</p>
				<p>I like to sleep, sometime run like a dog, jump up and down, and follow people to see what they do.</p> -->
			</section>
            <?php endwhile; else: ?>
            <p><?php _e('sorry, no conent'); ?></p>
            <?php endif; ?>
		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

