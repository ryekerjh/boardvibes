<?php /* Template Name: Template A */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<main class="slides">
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
	</main>
	<section class="mobile-landing">
		<div class="welcome">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>
	</section>
<?php get_footer();
