<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php include_once(ABSPATH .'wp-admin/includes/plugin.php'); ?>
		 
		 <!-- comments -->
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/dw.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/sections/sections.css">
		
		<!-- js + jquery -->	
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/main.js"></script>
		
		<!-- fonts -->
		<link rel="stylesheet" href="https://use.typekit.net/wjm6trn.css">
		<script src="https://kit.fontawesome.com/a2c367ed5f.js" crossorigin="anonymous"></script>
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
		
		<!-- carousel -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/owlcarousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/owlcarousel/assets/owl.theme.default.min.css">
		<script src="<?php bloginfo('template_url'); ?>/owlcarousel/owl.carousel.min.js"></script>
		
		<?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<?php
			wp_body_open();
		?>
		
		<a class="skip-link screen-reader-text" href="#content">Skip to Content</a>
		
		<header class="site-header">
			<div class="inner inner90 mza">
				
				<a class="logo" href="<?php echo get_site_url(); ?>"><img title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" src="<?php bloginfo('template_url'); ?>/images/dw-outline.svg" /></a>
				
				<a href="#!" id="menu">
					<strong>Menu</strong>
					<div class="int">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
				
				<nav class="site-nav">
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'primary_navigation',
							'menu_class' => '',
							'menu_id' => '',
							'before' => '',
							'container' => false
						) );
					?>
				</nav>
				
			</div>
		</header>
		
		<div class="header-clear"></div>
		
		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			
		<?php } ?>
		
		<?php
			if (function_exists('is_woocommerce')) {
				if (is_woocommerce()) {
				// could also check if is index or full width template here
		?>
			<section class="standard">
				<div class="inner mza woocommerce">
		<?php } } ?>
		