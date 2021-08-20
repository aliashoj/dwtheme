<?php
	//custom dashboard notification or warning
	/*
	function general_admin_notice(){
		global $pagenow;
		if ( $pagenow == 'options-general.php' ) {
			echo '<div class="notice notice-info is-dismissible">
				<p>This notice appears on the settings page.</p>
			</div>';
		}
	}
	add_action('admin_notices', 'general_admin_notice');
	*/

	// custom dashboard widget
	add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
	function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
	}
	function custom_dashboard_help() {
	echo '<p>Welcome to Custom Blog Theme! Need help? Contact the developer <a href="mailto:yourusername@gmail.com">here</a>. For WordPress Tutorials visit: <a href="https://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
	}

	// title-tag support
	add_theme_support( 'title-tag' );
	
	// css for dashboard
	add_action('admin_head', 'dashboard_css');
	function dashboard_css() {
	  echo '<style>
		.yith-license-notice { display:none; }
	  </style>';
	}
	
	//declare woocommerce support
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
		// if you want to remove support:
		//remove_theme_support( 'wc-product-gallery-zoom' );
		//remove_theme_support( 'wc-product-gallery-lightbox' );
		//remove_theme_support( 'wc-product-gallery-slider' );
	
	//
	register_nav_menus( array(
		'primary_navigation' => 'Primary Navigation',
	));
	
	// loop
	function the_loop() {
		if (have_posts()) { while (have_posts()) {
			the_post();
			the_content();
		} }
	}
	
	// custom thumbnails
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'custom_thumb', 400, 300, true );
	add_image_size( 'custom_thumb_medium', 600, 400, true );
	add_image_size( 'custom_thumb_square', 600, 600, true );
	add_image_size( 'custom_thumb_post', 767, 550, true );
	
	// sidebar - widgets
	add_action( 'widgets_init', 'theme_slug_widgets_init' );
	function theme_slug_widgets_init() {
		register_sidebar( array(
			'name' => __( 'Main Sidebar', 'theme-slug' ),
			'id' => 'sidebar-1',
			'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<span>',
			'after_title'   => '</span>',
		) );
	}
	
	// custom excerpt length by words
	function excerpt($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	  } else {
		$excerpt = implode(" ",$excerpt);
	  }	
	  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	  return $excerpt;
	}
	function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	  } else {
		$content = implode(" ",$content);
	  }	
	  $content = preg_replace('/[.+]/','', $content);
	  $content = apply_filters('the_content', $content); 
	  $content = str_replace(']]>', ']]&gt;', $content);
	  return $content;
	}
	//
	// usage: echo excerpt(30);
	//
	
	// add custom admin menu
	/*
	add_action( 'admin_menu', 'my_admin_menu' );
	function my_admin_menu() {
		add_menu_page( 'Designweb Top Level Menu Example', 'Designweb', 'manage_options', 'dw/dw-admin-page.php', 'dw_admin_page', 'dashicons-admin-generic', 6  );
	}	
	function dw_admin_page(){
		?>
		<div class="wrap">
			<h2>Designweb</h2>
			<p>test</p>
		</div>
		<?php
	}
	*/
?>
<?php function page_hero() { ?>
	<section class="page-hero">
		<div class="inner mza">
			<div class="center">
				<h1><?php the_title(); ?></h1>
				<p>Lorem ipsum dolor sit amet, no nam nisl sint, choro meliore pri te. Cum te rebum iisque, vim doctus animal partiendo no. Movet ceteros nominati vis ne. Eu est nonumes facilis sententiae, vel ei alia fastidii, vel te quem meliore. Similique abhorreant in eos. Tation graeco his no, at petentium splendide est, cum in euripidis posidonium.</p>
			</div>
		</div>
	</section>
<?php } ?>
<?php function dw_sidebar() { ?>
	<h3>Enquiry Form</h3>
	<?php echo do_shortcode('[wpforms id="128" title="false" description="false"]'); ?>
	<h3>Contact Us</h3>
	<p>Get in touch today to discuss your needs. We would love to hear from you.</p>
	<p><strong>Phone:</strong> 01745 000 000</p>
	<p><strong>Email:</strong> mail@designweb.co.uk</p>
	<h3>Where to Find Us</h3>
	<div class="iframe-container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2386.6673389000357!2d-3.453396783820746!3d53.259661679960985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486528cc99f2b39d%3A0x5a0b158be2c0e1a!2sDesignweb!5e0!3m2!1sen!2suk!4v1577118417698!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
<?php } ?>
<?php
	// Custom Gutenberg Blocks (ACF PRO)
	
	add_action('acf/init', 'my_acf_init_block_types');
	function my_acf_init_block_types() {

		// Check function exists.
		if( function_exists('acf_register_block_type') ) {

			// register a testimonial block.
			acf_register_block_type(array(
				'name'              => 'testimonial',
				'title'             => __('Testimonial'),
				'description'       => __('A custom testimonial block.'),
				'render_template'   => 'blocks/testimonial.php',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'testimonial', 'quote' ),
			));
		}
	}
?>