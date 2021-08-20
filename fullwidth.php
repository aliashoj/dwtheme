<?php get_header();
	/* Template Name: Full Width */
?>
		
	<section class="standard" id="content">
		<div class="inner mza">
			<article class="entry-content woocommerce">
			<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php	the_content(); ?>
			<?php } } ?>
			</article>
		</div>
	</section>
		
<?php get_footer(); ?>