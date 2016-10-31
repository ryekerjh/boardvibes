			<!-- footer -->
			<footer class="footer container-fluid" role="contentinfo">
				<div class="inner-wrapper">
						<div class="col-sm-4 col-xs-12 center social">
							<a href="<?=types_render_field('facebook-link', array('output' => 'raw')) ?>" target="_blank"><i class="fa fa-facebook fa-3x " aria-hidden="true"></i></a>
							<a href="<?=types_render_field('twitter-link', array('output' => 'raw')) ?>" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
							<a href="<?=types_render_field('instagram-link', array('output' => 'raw')) ?>" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
						</div>
						<!-- copyright -->
						<p class="copyright col-sm-4 col-sm-offset-4 col-xs-12 center-text">
							&copy; <?php echo date('Y'); ?> <?php _e(' '); ?> <?php bloginfo('name'); ?>. <?php _e('Powered by', 'RJH Web Design'); ?>
							<a href="//ryekerjh.github.io/" target="_blank" title="Visit RJH Web Design">RJH Web Design</a>.
						</p>
						<!-- /copyright -->
					</div>
			</footer>
				<!-- /footer -->

			<?php wp_footer(); ?>

			<!-- analytics -->
			<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
			(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
			l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
			</script>
		</div>
	</body>
</html>
