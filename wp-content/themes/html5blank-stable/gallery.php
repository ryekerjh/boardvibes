<?php /* Template Name: Gallery Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<section class="gallery" style="margin:16px;">
				<?php the_content(); ?>
			</section>

				<br class="clear">

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		<!-- /section -->
	</main>


<?php get_footer(); ?>
