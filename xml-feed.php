<?php get_header();
	/* Template Name: xml feed */
?>
	
	<style>
		.sorry { display:none; }
		.search-info + .sorry { display:block; }
	</style>
		
	<section class="standard" id="content">
		<div class="inner mza flex">
			
			<article class="entry-content woocommerce">
				<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
					<h1 class="page-title"><?php the_title(); ?></h1>
						
						<p class="search-info">
							search<br />
							<?php
								$search_title = htmlspecialchars($_GET["search_title"]);
								echo 'search_title: ' . $search_title . ' ';
							?>
						</p>
						
						<?php
							// just dump the contents
							// echo file_get_contents("https://www.jobs.nhs.uk/search_xml?client_id=120650");
							
							$feed = file_get_contents('https://www.jobs.nhs.uk/search_xml'); //the xml feed
							$xml = simplexml_load_string($feed);
							
							$items = $xml->vacancy_details;
							
							foreach ($items as $item) {
								
								$id = $item->id;
								$job_title = $item->job_title;
								
								// if (str_contains($job_title, $search_title)) {  } PHP8
								
								if (stripos($job_title, $search_title) !== false) {
								
									echo '<div style="border-bottom:1px solid #ccc;">';
										echo '<strong>'. $job_title .'</strong><br />';
										echo $id;
									echo '</div>';
									
								}
								
							}
							
						?>
						
						<p class="sorry">Sorry, no results were found</p>
					
					
				<?php } } ?>
			</article>
			
			<aside>
				
			</aside>
			
		</div>
	</section>
		
<?php get_footer(); ?>