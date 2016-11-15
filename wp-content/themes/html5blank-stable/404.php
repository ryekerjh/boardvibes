<?php get_header(); ?>

	<main role="main" class="not-found">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404" class="lato-text">

				<h1 class="text-center"><?php _e( 'Page not found', 'html5blank' ); ?> </h1>
				<h4 class="text-center">
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h1>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
