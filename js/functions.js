$(document).ready(function(){
  $('a[href^="#"]').on('click', function(event) {
      $(".menu-seguros-empresas li a").removeClass("active");
      $(this).addClass("active");

      var target = $(this.getAttribute('href'));
      var top = 0;

      if(target=="header")
        target.offset().top;
      else
        target.offset().top - 150;

      console.log("this", this);
      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: top
          }, 1000);
      }
  });

  $("#bt-mision").on('click', function(event){
    $("#headingTwo").removeClass("active");
    $("#headingThree").removeClass("active");

    if($("#headingOne").hasClass("active")){
      $("#headingOne").removeClass("active")
    }else{
      $("#headingOne").addClass("active")
    }
  });

  $("#bt-vision").on('click', function(event){
    $("#headingOne").removeClass("active");
    $("#headingThree").removeClass("active");

    if($("#headingTwo").hasClass("active")){
      $("#headingTwo").removeClass("active")
    }else{
      $("#headingTwo").addClass("active")
    }
  });

  $("#bt-valores").on('click', function(event){
    $("#headingOne").removeClass("active");
    $("#headingTwo").removeClass("active");

    if($("#headingThree").hasClass("active")){
      $("#headingThree").removeClass("active")
    }else{
      $("#headingThree").addClass("active")
    }
  });

  var lastScrollTop = 120;
  $(window).scroll(function(event){
     var st = $(this).scrollTop();
     if (st > lastScrollTop){
         $("#toTop").show("slow");
     } else {
         $("#toTop").hide("slow");
     }
     lastScrollTop = st;
  });

  // Owl Carousel
	$('.owl-carousel').owlCarousel({
		loop: true,
		autoplay: true,
		items : 1,
		slideSpeed: 700,
		nav: true,
		dots: true,
		rewindSpeed: 700,
		autoPlay: 7000,
		stopOnHover: false,
		animateOut: 'fadeOut',
	});

});
