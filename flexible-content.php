<?php get_header();
	/* Template Name: Flexible Content */
?>
		
	<?php page_hero(); ?>
	
	<section class="standard" id="content">
		<div class="inner mza flex">
			<article class="entry-content">
			<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				
				<?php	the_content(); ?>
				
				<?php if (have_rows('flexible_content')) { ?>
					<?php while (have_rows('flexible_content')) { ?>
						<?php the_row(); ?>
						
						
						
						<?php if (get_row_layout() == 'text_example') { ?>
							<div class="boc">
								<h3><?php the_sub_field('title'); ?></h3>
								<?php the_sub_field('text'); ?>
							</div>
						<?php } ?>
						
						<?php if (get_row_layout() == 'repeater_example') { ?>
							<div class="boc">
								<ul class="list">
									<?php if (have_rows('item')) { while (have_rows('item')) { the_row(); ?>
										<li><?php the_sub_field('text'); ?></li>
									<?php } } ?>
								</ul>
							</div>
						<?php } ?>
						
						<?php if (get_row_layout() == 'gallery_example') { ?>
							<div class="boc">
								<ul class="gal">
									<?php if (have_rows('image_gallery')) { while (have_rows('image_gallery')) { the_row(); ?>
										<li><img src="<?php the_sub_field('image'); ?>" /></li>
									<?php } } ?>
								</ul>
							</div>
						<?php } ?>
						
						<?php if (get_row_layout() == 'news_example') { ?>
							<div class="boc">
								<h3><?php the_sub_field('news_title'); ?></h3>
								
								<p><?php echo 'test'; ?></p>
								
							</div>
						<?php } ?>
						
						
						
					<?php } ?>
				<?php } ?>
				
			<?php } } ?>
			</article>
			<aside>
				<?php dw_sidebar(); ?>
			</aside>
		</div>
	</section>
		
<?php get_footer(); ?>