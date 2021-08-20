<?php get_header(); ?>
		
	<section class="standard" id="content">
		<div class="inner mza flex">
			<article class="entry-content">
				<h1 class="page-title">Our News</h1>
				<div class="posts-1">
					<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
						<article>
							<a href="<?php echo get_permalink(); ?>"/ >
							<?php if (has_post_thumbnail()) { ?>
								<?php the_post_thumbnail('custom_thumb_post'); ?>
							<?php } else { ?>
								<img src="<?php bloginfo('template_url'); ?>/images/band-blur-close-up-265730.jpg" />
							<?php } ?>
							</a>
							<h2 class="blog-title"><?php the_title(); ?></h2>
							<?php
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
							?>
							<p class="post-excerpt"><?php echo excerpt(24); ?> <a href="<?php echo get_permalink(); ?>">Read More</a></p>
						</article>
					<?php } } ?>
					<div class="navigation"><p class="button alt"><?php posts_nav_link(); ?></p></div>
				</div>
			</article>
			<aside>
				<h3>Archive</h3>
				<?php
					$sidebar_archive = array(
						'type'            => 'monthly',
						'limit'           => '',
						'format'          => 'html', 
						'before'          => '',
						'after'           => '',
						'show_post_count' => true,
						'echo'            => 1,
						'order'           => 'DESC'
					);
					echo '<ul>';
					echo '<li><a href="'; bloginfo('url'); echo'/blog/">All Posts</a></li>';
						wp_get_archives( $sidebar_archive );
					echo '</ul>';
				?>
				<h3>Categories</h3>
				<?php
					$sidebar_categories = array(
						'show_option_all'    => '',
						'orderby'            => 'name',
						'order'              => 'ASC',
						'style'              => 'list',
						'show_count'         => 0,
						'hide_empty'         => 0,
						'use_desc_for_title' => 1,
						'child_of'           => 0,
						'feed'               => '',
						'feed_type'          => '',
						'feed_image'         => '',
						'exclude'            => '',
						'exclude_tree'       => '',
						'include'            => '',
						'hierarchical'       => 1,
						'title_li'           => __( '' ),
						'show_option_none'   => __('No categories'),
						'number'             => null,
						'echo'               => 1,
						'depth'              => 0,
						'current_category'   => 0,
						'pad_counts'         => 0,
						'taxonomy'           => 'category',
						'walker'             => null
					); 
					echo '<ul>';
						wp_list_categories( $sidebar_categories );
					echo '</ul>';
				?>
			</aside>
		</div>
	</section>
		
<?php get_footer(); ?>