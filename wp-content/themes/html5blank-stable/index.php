<?php get_header(); ?>

	<main role="main" class="blog">
<!-- section -->
		<section class="blog-section">

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<div class="blog-overlay"></div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
