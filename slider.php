		<section class="hero">
			<div class="owl-carousel owl-theme">
				
				<div class="item" style="background-image:url(<?php bloginfo('template_url'); ?>/images/pexels-photo-2462353.jpg);">
					<div class="content">
						<div class="inner mza">
							<div class="text">
								<h2>Heading 2</h2>
								<p>Lorem ipsum dolor sit amet, aeque intellegebat mei ne, feugiat debitis inermis qui te. Veri labores ea pri, at nam omnes sententiae consectetuer.</p>
								<p class="button"><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					<img class="hero-image" src="<?php bloginfo('template_url'); ?>/images/pexels-photo-2462353.jpg" />
				</div>
				
				<div class="item" style="background-image:url(<?php bloginfo('template_url'); ?>/images/pexels-photo-2462353.jpg);">
					<div class="content">
						<div class="inner mza">
							<div class="text">
								<h2>Heading 2</h2>
								<p>Lorem ipsum dolor sit amet, aeque intellegebat mei ne, feugiat debitis inermis qui te. Veri labores ea pri, at nam omnes sententiae consectetuer.</p>
								<p class="button"><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					<img class="hero-image" src="<?php bloginfo('template_url'); ?>/images/pexels-photo-2462353.jpg" />
				</div>
				
			</div>
		</section>
		<script>
			$(document).ready(function(){
				$('.owl-carousel').owlCarousel({
					loop:true,
					margin:0,
					nav:false,
					dots:true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:1
						},
						1000:{
							items:1
						}
					}
				});
			});		
		</script>