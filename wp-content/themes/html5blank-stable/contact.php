<?php /* Template Name: Contact Template */ get_header(); ?>

	<main role="main" class="contact">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>
				<div class="center-block">
					<div class="contact-form center-text col-sm-8 col-sm-offset-2 col-xs-12">
						<h1><?php the_title(); ?></h1>
						<?php
						echo do_shortcode( '[contact-form-7 id="40" title="General Contact Form"]' );
						?>

					</div>
				</div>
				<br class="clear">

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</main>
	<?php get_footer(); ?>
