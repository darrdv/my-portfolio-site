
$(document).ready(function () {

	var animationName1 = "animated fadeInDown";
	var animationName2 = "animated fadeInUp";
	var animationName3 = "animated slideInUp";
	var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd";

  $(".intro h1").addClass(animationName1).one(animationEnd, function(){
    $(this).removeClass(animationName1);
  });

  $(".intro h2").addClass(animationName2).one(animationEnd, function(){
    $(this).removeClass(animationName2);
  });

	$(".intro a").addClass(animationName2).one(animationEnd, function(){
		$(this).removeClass(animationName2);
	});

	$(".header-links-content").addClass(animationName2).one(animationEnd, function(){
		$(this).removeClass(animationName2);
	});

  /* Animations on scroll */
  $('.waypoint-anim-1').waypoint(function(direction) {
      $('.waypoint-anim-1').addClass('animated fadeInUp');
  }, {
      offset: '70%'
  });

  $('.waypoint-anim-2').waypoint(function(direction) {
      $('.waypoint-anim-2').addClass('animated fadeInLeft');
  }, {
      offset: '80%'
  });

  $('.waypoint-anim-3').waypoint(function(direction) {
      $('.waypoint-anim-3').addClass('animated fadeInRight');
  }, {
      offset: '80%'
  });

  $('.waypoint-anim-4').waypoint(function(direction) {
      $('.waypoint-anim-4').addClass('animated fadeInUp');
  }, {
      offset: '80%'
  });

});
