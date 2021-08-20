<?php get_header();
	/* Template Name: Services */
?>
		
	<?php page_hero(); ?>
	
	<section class="services services-1">
			<?php
				// details of loop: https://www.advancedcustomfields.com/resources/repeater/
				
				if (have_rows('service')) { while (have_rows('service')) {
					the_row();
			?>
			
				<article>
					<div class="inner mza">
						
						<?php
						$image = get_sub_field('image'); $size = 'custom_thumb_square';
						if( $image ) { echo wp_get_attachment_image( $image, $size ); } else { /* default image? */ }
						?>
						
						<div class="fields">
							<h3><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('description'); ?></p>
							<p class="button"><a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a></p>
						</div>
						
					</div>
				</article>
			
			<?php } } ?>
	</section>
	
<?php get_footer(); ?>