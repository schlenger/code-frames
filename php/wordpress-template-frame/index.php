<?php 

/* the blog page */

 get_header(); ?>

			<section id="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2 class="post-listing-title">
						<span><?php the_date(); ?></span><br>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<?php the_content('Read full article...', TRUE); ?>
				<?php endwhile; endif; ?>
			</section>

<?php get_footer(); ?>