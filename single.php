<?php get_header(); ?>
		
	<section class="standard" id="content">
		<div class="inner mza flex">
			<article class="entry-content">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							echo "<p class='post-meta'> Posted on: ";
								the_time('F j, Y');
								echo " in ";
								$categories = get_the_category();
								$separator = ', ';
								$output = '';
								if($categories){
									foreach($categories as $category) {
										$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
									}
								echo trim($output, $separator);
								}
							echo "</p>";
							the_content();
						}
					}
				?>
			</article>
			<aside>
				<?php dw_sidebar(); ?>
			</aside>
		</div>
	</section>
		
<?php get_footer(); ?>