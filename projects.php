<?php get_header();
	/* Template Name: Projects */
	
	// uses custom post type "project"
?>
		
	<?php page_hero(); ?>
	
	<section class="standard">
		<div class="inner mza">
			
			<div class="projects-1">
			
				<?php
				wp_reset_query();
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$project_query = new WP_Query(array(
					'post_type' => 'project',
					// 'order' => 'ASC',
					'posts_per_page' => 10,
					'paged' => $paged
				));
				$postid = get_the_ID();
				if ($project_query->have_posts()) { while ($project_query->have_posts()) { $project_query->the_post();
				?>
				
				<article class="item">
					<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('custom_thumb_medium'); ?></a>
					<div class="fields">
						<h3><?php the_title(); ?></h3>
						<p><?php the_field('short_description'); ?></p>
						<p class="find-out-more"><a href="<?php echo get_permalink(); ?>">Find Out More ></a></p>
					</div>
				</article>
				
				<?php } } ?>
				
				<!--
				<ul class="post-navigation">
					<li><?php previous_posts_link( '&laquo; PREV', $project_query->max_num_pages) ?></li> 
					<li><?php next_posts_link( 'NEXT &raquo;', $project_query->max_num_pages) ?></li>
				</ul>
				-->
				
				<?php wp_reset_query(); ?>
		
			</div>
			
		</div>
	</section>
	
<?php get_footer(); ?>