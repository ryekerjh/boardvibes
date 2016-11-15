<?php get_header(); ?>

	<main role="main single-post-main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> -->
				<div class="col-xs-12 col-sm-8 col-sm-offset-4 blog-thumb">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</div>
				<!-- </a> -->
			<?php endif; ?>
			<!-- /post thumbnail -->
			<div class="post-wrapper">
				<div class="blog-sider col-sm-4">
					<span class="center-block author-img">
						<?php $author = get_the_author(); ?>
						<?php
						if($author == 'lisa') {
							?>
							<img src="http://boardvibes.com/wp-content/themes/html5blank-stable/img/lisa.png" alt="" class="img-circle author-img center-block"/>
						 <?php } else {
								 if($author == 'pascal') {
						?> <img src="http://boardvibes.com/wp-content/themes/html5blank-stable/img/pascal.png" alt="" class="img-circle author-img center-block"/>
						<?php } else {
							?> 	<img src="http://boardvibes.com/wp-content/themes/html5blank-stable/img/colorado.jpg" alt="" class="img-circle author-img center-block"/>
							<?php
						}
						 }
						?>
					<!-- <?php echo types_render_field( "author-lisa", array( "alt" => "Lisa & Pascal", "proportional" => "false") ) ?> -->
					<!-- <img src="http://boardvibes.com/wp-content/themes/html5blank-stable/img/lisa.png" alt="" class="img-circle author-img center-block"/> -->
				</span>
					<p class="text-center capitalize sidebar-author"><?php _e( 'Written by ', 'html5blank' ); the_author(); ?></p>
					<p class="text-center date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
				</div>

				<div class="col-xs-12 col-sm-offset-4 col-sm-7 blog-contents">
					<!-- post title -->
					<h1 class="blog-post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->

					<!-- post details -->
					<!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->
					<p class="responsive-size-post-data"><?php _e( 'Written by ', 'html5blank' ); the_author_posts_link(); ?></p>

					<!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
					<!-- /post details -->

					<?php the_content(); // Dynamic Content ?>

					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

					<span class="date responsive-size-post-data"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>

					<!-- <p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p> -->

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

				</div>
		</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
