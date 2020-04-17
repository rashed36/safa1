(function () {
	"use strict";

	/*  preloader page-lode
	=====================================
	*/
	$(window).on('load', function () {
		$('#preloader').fadeOut('fast');
	});

	/* Body-Scrollspy
	=====================*/
	var Body = $('body');
	Body.scrollspy({
		target: '.offset',
		offset: 800
	});

	$(document).ready(function () {
		/*=== dropdown-arrow-icon ===*/
		$('ul li').click(function () {
			$(this).toggleClass('active')
		});
	});

	/* WOW Animation Plugin Active */
	var wow = new WOW({
	    boxClass: 'wow', // animated element css class (default is wow)
	    animateClass: 'animated', // animation css class (default is animated)
	    offset: 0, // distance to the element when triggering the animation (default is 0)
	    mobile: false, // trigger animations on mobile devices (default is true)
	    live: true, // act on asynchronously loaded content (default is true)
	    callback: function (box) {
	        // the callback is fired every time an animation is started
	        // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
	});
	wow.init();

	/* Counter Up Active */
	$(".counter").counterUp({
        delay: 10,
        time: 1000
    });

	/* Multiple Products Silder Active in Home Page */
    $('.multi_product').owlCarousel({
        loop:true,
        responsiveClass:true,
		autoplayTimeout:2000,
        autoplay: true,
        margin:10,
        responsive:{
            0:{
                items:1,
                loop:true
            },
            600:{
                items:2,
                loop:true
            },
            1000:{
                items:3,
                loop:true
            }
        }
    });

    /* Single Product Slider */
	$('.single_product').owlCarousel({
		loop:true,
		autoplay: true,
		autoplayTimeout:2000,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				loop:true
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

	
})();
