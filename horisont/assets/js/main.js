$(document).ready(function(){
	$('.slider').slick({
    	dots: true,
    	infinite: true,
    	speed: 300,
    	arrows: true,
    	autoplay: true
  	});
  $("#open-menu").click(function(){
      $("#menu-wrapper").fadeIn();
  });
  $("#close-menu").click(function(){
      $("#menu-wrapper").fadeOut();
  });
  $(".one").click(function() {
      $("html, body").animate({ scrollTop: 0 }, 600);
  });
  $(".two").click(function() {
      $('html, body').animate({
          scrollTop: $("#wrapper section:nth-of-type(1)").offset().top
      }, 1000);
  });
  $(".three").click(function() {
      $('html, body').animate({
          scrollTop: $("#wrapper section:nth-of-type(4)").offset().top
      }, 1000);
  });
  $(".four").click(function() {
      $('html, body').animate({
          scrollTop: $("#wrapper section:nth-of-type(6)").offset().top
      }, 1000);
  });
});
$(window).scroll(function(){
  var top = $(window).scrollTop();
    var find_class_small = $.contains('header', '.small');
    if(top > 920 && find_class_small == false) { // tu zmieniamy wysokosc - gdy strona zjedzie 920px w dol
      $('header').addClass('small'); // nawigacja otrzyma klase small
    }
    else {
      $('header').removeClass('small'); // w przeciwnym wypadku usuwamy klase small
    }

  var find_class_fixed = $.contains('a', '.fixed');
    if(top > 920 && find_class_small == false) {
      $('a').addClass('fixed');
    }
    else {
      $('a').removeClass('fixed');
    }
 
});