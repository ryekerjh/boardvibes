<?php /* Template Name: About */ get_header(); ?>

	<main role="main" class="container-fluid about">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="row">


				<br class="clear">
				<div class="col-sm-8 col-sm-offset-2 title-card">
					<h1><?php the_title(); ?></h1>
					<div class="col-xs-12 col-sm-6 text-center">
						<?php the_content(); ?>
					</div>
					<div class="owners col-xs-12 col-sm-6">
						<?php echo types_render_field( "owners",
						array( "alt" => "Lisa & Pascal", "proportional" => "false"
					) ) ?>

					</div>
				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

	<?php get_footer(); ?>
