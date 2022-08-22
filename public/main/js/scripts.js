/* ===============  WoW Animations ========================== */

$(document).ready(function() {

	"use strict";


});

/* =================  window load =================  */

 $(window).on('load',function(){
		/*----- loader ---------*/
		$('.loader').fadeOut();
    /* ===============  WoW Animations ========================== */

      wow = new WOW();
    	wow.init();

      /* =================  text-animation style 1  =================  */

			$('.text_animation').textillate({
			  // sets the minimum display time for each text before it is replaced
			  minDisplayTime: 2000,

			  // visibility: hidden to the element before running this plugin)
			  initialDelay: 0,

			  // set whether or not to automatically start animating
			  autoStart: true,

			  // in animation settings
			  in: {

			    // set the delay factor applied to each consecutive character
			    delayScale: 1.5,

			    // set the delay between each character
			    delay: 30,

			    // set to true to animate all the characters at the same time
			    sync: false,

			    // randomize the character sequence
			    // (note that shuffle doesn't make sense with sync = true)
			    shuffle: false,

			    // reverse the character sequence
			    // (note that reverse doesn't make sense with sync = true)
			    reverse: false,

			    // callback that executes once the animation has finished
			    callback: function () {}
			  },

			  // set the type of token to animate (available types: 'char' and 'word')
			  type: 'char'
			});
	});

	/* =================  window Scroll =================  */

 $(window).on('scroll , load',function(){
		var window_top = $(window).scrollTop();
		/*---------- menu fixed ----------*/

		if(window_top > 20){
			$('.site_header').addClass('header-scroll_bg_light');
		}
		else {
			$('.site_header').removeClass('header-scroll_bg_light');
		}

		/*---------- menu active item ----------*/

		$('#home , #home section').each(function () {
			var currLink = $(this);
			var refElement = $(currLink).attr("id");
				if ($(this).position().top -100 <= window_top) {
					if($('.site_header .nav-link[href*='+refElement+']').length>0){
						$('.site_header .active').removeClass('active');
						$('.site_header .nav-link[href*='+refElement+']').addClass('active');
					}
				}
		});
	});

/* =================  menu click animate =================  */

	$('.nav-item.nav-link').on('click',function(){
		var $target = $(this).attr('href');
		$('body , html').animate({
			scrollTop: $($target).position().top
		},1000);
		$('.navbar-collapse').removeClass('show');
		$('.navbar-toggler svg').toggleClass('fa-times').toggleClass('fa-bars');
	});
	$('.navbar-toggler').on('click',function(){
		$('.navbar-toggler svg').toggleClass('fa-times').toggleClass('fa-bars');
	});
	/* =================  play video popup =================  */

	$('#play_video').on('click',function(e){
		e.preventDefault();
    $('.video_popup').fadeIn();
		$('.video_popup').css('display','flex');
	});
	$('.video_popup').on('click',function(e){
		var $target = e.target.nodeName;
		var video_src = $(this).find('iframe').attr('src');
		if($target != 'IFRAME'){
		  $('.video_popup').css('display','none');
			$('.video_popup iframe').attr('src'," ");
			$('.video_popup iframe').attr('src',video_src);
		}
	});



  // =================  open contact form home page  =================  //
  $('#send_message').on('click',function(e){
    e.preventDefault();
    $('.contact_popup').css('display','flex');
  });
  $('.contact_popup').on('click',function(e){
    var $target = e.target.nodeName;
		if($target != 'FORM' && $target != 'INPUT' && $target != 'BUTTON' && $target != 'TEXTAREA'){
		  $(this).fadeOut();
      $(this).addClass('animated');
		}
  });
