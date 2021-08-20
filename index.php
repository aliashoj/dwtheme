<?php get_header(); ?>
		
	<section class="standard" id="content">
		<div class="inner mza woocommerce flex">
			<article id="primary" class="content-area entry-content">
			<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php	the_content(); ?>
			<?php } } ?>
			</article>
			<aside id="sidebar" role="complementary">
				<?php dw_sidebar(); ?>
			</aside>
		</div>
	</section>
		
<?php get_footer(); ?>