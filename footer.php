		
		<?php
			if (function_exists('is_woocommerce')) {
				if (is_woocommerce()) {
		?>
			</section>
				</div>
		<?php } } ?>
		
		<footer>
			
			<div class="top">
				<div class="inner mza">
					
					<a class="logo" href="<?php echo get_site_url(); ?>"><img title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" src="<?php bloginfo('template_url'); ?>/images/dw-outline.svg" /></a>
					
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'primary_navigation',
							'menu_class' => '',
							'menu_id' => '',
							'before' => '',
							'container' => false,
							'depth' => 1
						) );
					?>
					
				</div>
			</div>
			
			<div class="disclaimer">
				<div class="inner mza">
					<p>
						&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> |
						<a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a>
					</p>
					<p>Website by <a target="_blank" href="https://www.designweb.co.uk/">Designweb</a></p>
				</div>
			</div>
			
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>