<?php get_header(); ?>
		
	<section class="standard" id="content">
		<div class="inner mza flex">
			<article class="entry-content">
			<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
				
				<h1 class="page-title"><?php the_title(); ?></h1>
				
				<h3>Details</h3>
				<p>Hours: <span><?php the_field('hours'); ?></span></p>
				<p>Salary: <span><?php the_field('salary'); ?></span></p>
				<p>Closing Date: <span><?php the_field('closing_date'); ?></span></p>
				<p>Interview Date: <span><?php the_field('interview_date'); ?></span></p>
				<p>Start Date: <span><?php the_field('start_date'); ?></span></p>
				<?php $file = get_field('application_form'); if ( $file ) { ?>
					<p>Download Application Form: <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a></p>
				<?php } ?>
				
				<h3>Job Description</h3>
				<?php	the_content(); ?>
					
			<?php } } ?>
			</article>
			<aside>
				<?php dw_sidebar(); ?>
			</aside>
		</div>
	</section>
		
<?php get_footer(); ?>