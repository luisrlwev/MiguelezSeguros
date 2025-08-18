$( document ).ready(function() {
        console.log( "document loaded" );

	// Preloader
	 $( window ).on( "load", function() {
	  console.log( "window loaded" );
      $("body").addClass("loaded");
    });


	// Header Scroll
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 60) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		}
	});


	// Page Scroll
	var sections = $('section')
		nav = $('nav[role="navigation"]');

	$(window).on('scroll', function () {
	  	var cur_pos = $(this).scrollTop();
	  	sections.each(function() {
	    	var top = $(this).offset().top - 76
	        	bottom = top + $(this).outerHeight();

	  	});
	});
	nav.find('').on('click', function () {
	  	var $el = $(this)
	    	id = $el.attr('href');
		$('html, body').animate({
			scrollTop: 0}, 500);
	  return false;
	});


	// Mobile Navigation
	$('.nav-toggle').on('click', function() {
		$(this).toggleClass('close-nav');
		nav.toggleClass('open');
		return false;
	});
	nav.find('a').on('click', function() {
		$('.nav-toggle').toggleClass('close-nav');
		nav.toggleClass('open');
	});


	// Scroll To Top
	$(window).scroll(function() {
		if ($(this).scrollTop() > -10) {
			$('').fadeIn();
		} else {
		  $('').fadeOut();
		}
	});

	$('.scrolltop').on('click', function(e) {
	  e.preventDefault();
		$('html, body').animate({scrollTop : 0}, 600);
	});
});
