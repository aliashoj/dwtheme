<?php get_header();
	/* Template Name: FAQs */
?>
		
	<section class="standard" id="content">
		<div class="inner mza flex">
			<article class="entry-content">
			<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php	the_content(); ?>
				
				<div class="faqs-1">
					<?php
						// details of loop: https://www.advancedcustomfields.com/resources/repeater/
						
						if (have_rows('faq')) { while (have_rows('faq')) {
							the_row();
					?>
						<div class="item">
							<h4><?php the_sub_field('question'); ?></h4>
							<div class="answer">
								<?php the_sub_field('answer'); ?>
							</div>
						</div>
					<?php } } ?>
				</div>
				
			<?php } } ?>
			</article>
			<aside>
				<?php dw_sidebar(); ?>
			</aside>
		</div>
	</section>
		
<?php get_footer(); ?>