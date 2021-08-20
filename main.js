$(document).ready(function() {
	
	// test jquery is loaded
	/*
		if (jQuery) {
			alert("jQuery is loaded.");
		} else {
			alert("jQuery is not working.");
		}	
	*/
	
	 // accessibility stuff
	 
		$("nav.site-nav > ul > li > a").focus(
			function () {
				$("nav.site-nav > ul > li > ul").removeClass("open");
				$(this).next().addClass("open");
			}
		);
	
	// menu + mobile nav
	
		$("#menu").click(function(){
			// $('nav.site-nav').slideToggle('fast'); //or toggle a class on the nav.
			$(this).toggleClass('open');
			$('.site-nav').toggleClass('open');
			$('menu').toggleClass('open');
		});	
	
	// fixed header class
	
		var offset = 0;
		var duration = 500;
		$(window).scroll(function() {
			if ($(this).scrollTop() > offset) {
				$('header').addClass('fixed');
			} else {
				$('header').removeClass('fixed');
			}
		});
		
	//faqs-1
	
		$(".faqs-1 .item h4").click(function() {
			$(".faqs-1 .item .answer").stop().slideUp();
			$(this).next().stop().slideToggle();
		});

	// scroll to element on click
	
		$(".button1").click(function() {
			$('html, body').animate({
				scrollTop: $("#id").offset().top -40
			}, 1000);
		});
		
	// parallax
	
	$(function() {
		var $el = $('.parallax-background');
		$(window).on('scroll', function () {
			var scroll = $(document).scrollTop();
			$el.css({
				'background-position':'50% '+(.2*scroll)+'px'
			});
		});
	});
	// reverse direction of parallax scroll: 'background-position':'50% '+(-.2*scroll)+'px'
	
	// fade on scroll
	
		// check the location of elements on page load
		$('.transition').each(function (i) {
			var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 150;
			var bottom_of_window = $(window).scrollTop() + $(window).height();
			if (bottom_of_window > bottom_of_object) {
				$(this).addClass('show');
			}
		});
		
		// check the location of elements on scroll
		$(window).scroll(function () {
			$('.transition').each(function (i) {
				var bottom_of_object = $(this).offset().top + $(this).outerHeight() - 150;
				var bottom_of_window = $(window).scrollTop() + $(window).height();
				if (bottom_of_window > bottom_of_object) {
					$(this).addClass('show');
				}
				if (bottom_of_window < bottom_of_object) {
					$(this).removeClass('show');
				}
			});
		});
	
});