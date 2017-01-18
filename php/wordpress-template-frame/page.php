<?php 

/* single page template */

 get_header(); ?>

			<section id="main" class="page">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<div class="page">
					<h1>Error!</h1>
					The page is not available.
					</div>
				<?php endif; ?>
			</section>

<?php get_footer(); ?>