<?php /* Template Name: Individual Image Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->

				<?php the_content(); ?>


				<br class="clear">


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
