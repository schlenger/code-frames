<?php 

/* single post page */

 get_header(); ?>

			<section id="main" class="post">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
							<h3>News | <?php the_date(); ?></h3>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<div class="post">
					<h1>Error!</h1>
					The post is not available.
					</div>
				<?php endif; ?>
			</section>

<?php get_footer(); ?>