<?php get_header(); ?>

			<section id="main">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<h3>NEWS | <?php the_time('d.m.Y') ?></h3>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
							<?php the_title(); ?>
					</a></h2>
					<?php the_content('Read full article...'); ?>
				</div>
				<?php else : ?>
					<div class="post">
					<h1>Error!</h1>
					The site is not available.
					</div>
				<?php endif; ?>
			</section>

<?php get_footer(); ?>