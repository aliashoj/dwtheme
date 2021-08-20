<?php get_header();
	/* Template Name: Staff */
?>
		
	<?php page_hero(); ?>
	
	<section class="standard">
		<div class="inner mza">
			
			<div class="staff-1">
			
				<?php
				wp_reset_query();
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$staff_query = new WP_Query(array(
					'post_type' => 'staff_member',
					// 'order' => 'ASC',
					'posts_per_page' => 10,
					'paged' => $paged
				));
				$postid = get_the_ID();
				if ($staff_query->have_posts()) { while ($staff_query->have_posts()) { $staff_query->the_post();
				?>
				
				<article class="item">
					<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('custom_thumb_square'); ?></a>
					<div class="fields">
						<h3><?php the_title(); ?></h3>
						<p><?php the_field('role'); ?></p>
						<p class="find-out-more"><a href="<?php echo get_permalink(); ?>">Find Out More ></a></p>
					</div>
				</article>
				
				<?php } } ?>
				
				<?php wp_reset_query(); ?>
		
			</div>
			
		</div>
	</section>

	<section class="standard greybg">
		<div class="inner mza">
			
			<div class="staff-2">
			
				<?php
				wp_reset_query();
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$staff_query = new WP_Query(array(
					'post_type' => 'staff_member',
					// 'order' => 'ASC',
					'posts_per_page' => 10,
					'paged' => $paged
				));
				$postid = get_the_ID();
				if ($staff_query->have_posts()) { while ($staff_query->have_posts()) { $staff_query->the_post();
				?>
				
				<article class="item">
					<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('custom_thumb_square'); ?></a>
					<div class="fields">
						<h3><?php the_title(); ?></h3>
						<p class="small"><?php the_field('role'); ?></p>
						<p class="find-out-more"><a href="<?php echo get_permalink(); ?>">Find Out More ></a></p>
					</div>
				</article>
				
				<?php } } ?>
				
				<?php wp_reset_query(); ?>
		
			</div>
			
		</div>
	</section>
		
<?php get_footer(); ?>