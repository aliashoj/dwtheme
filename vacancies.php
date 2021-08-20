<?php get_header();
	/* Template Name: Vacancies */
?>
		
	<?php page_hero(); ?>
	
	<section class="standard">
		<div class="inner mza">
		
			<?php
				if (have_posts()) { while (have_posts()) { the_post();
					the_content();
				} }
			?>
			
			<div class="vacancies-1" style="margin-top:50px;">
			
				<?php
				wp_reset_query();
				$vacancy_query = new WP_Query(array(
					'post_type'      => 'vacancy',
					'posts_per_page' => -1,
					'meta_query' => array(
						/*
						array(
							'key'     => '',
							'value'   => '',
						),
						*/
						array(
							'key'     => 'closing_date',
							'value' => date('Ymd', strtotime('now')),
							'type' => 'numeric',
							'compare' => '>=',
						)
					)
				));
				$postid = get_the_ID();
				if ($vacancy_query->have_posts()) { while ($vacancy_query->have_posts()) { $vacancy_query->the_post();
				?>
				
					<article class="item">
					
						<h3><?php the_title(); ?></h3>
						<div>
							<p class="small">Hours: <span><?php the_field('hours'); ?></span></p>
							<p class="small">Salary: <span><?php the_field('salary'); ?></span></p>
							<p class="small">Closing Date: <span><?php the_field('closing_date'); ?></span></p>
							<p class="small">Interview Date: <span><?php the_field('interview_date'); ?></span></p>
							<p class="small">Start Date: <span><?php the_field('start_date'); ?></span></p>
							<p class="button"><a href="<?php echo get_permalink(); ?>">Read More</a></p>
						</div>
						
					</article>
				
				<?php } } else { echo '<p>Sorry, there are currently no vacancies available.</p>'; } ?>
				
				<?php wp_reset_query(); ?>
		
			</div>
			
		</div>
	</section>
	
<?php get_footer(); ?>