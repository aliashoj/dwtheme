<?php get_header(); ?>

<section class="hero-21 parallax-background">
	<div class="inner mza">
		<h1 class="transition transition-1 animate-1">
			<?php bloginfo('name'); ?>
		</h1>
	</div>
</section>

<section class="standard">
	<div class="inner mza">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</section>

<?php get_footer(); ?>