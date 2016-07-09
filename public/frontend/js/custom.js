"use strict";

// revolution slider
function revolutionSliderActiver () {
	if ($('.rev_slider_wrapper #slider1').length) {
		$("#slider1").revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			delay:5000,
			navigation: {
				arrows:{enable:true} 
			}, 
			gridwidth:1170,
			gridheight:705 
		});
	};
}
// wow animation
function wowActivator () {
	var wow = new WOW ({
		offset: 0
	});
	wow.init();
}


// add your custom functions 
function clientCarosule () {
	if ($('#clients .owl-carousel').length) {
		$('#clients .owl-carousel').owlCarousel({
		    loop: true,
		    margin: 40,
		    nav: true,
		    dots: false,
		    autoWidth: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
		    autoplayHoverPause: true,
		    responsive: {
		        0:{
		            items:1
		        },
		        480:{
		            items:2
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		});
	}
}
// Gallery masonary style
function galleryMasonaryLayout () {
	if ($('.masonary-gallery').length) {
		$('.masonary-gallery').isotope({
			layoutMode:'masonry'
		});
	}
}
// Google Map
function gMap () {
  if ($('.google-map').length) {
    $('.google-map').each(function () {
      // getting options from html 
      var mapName = $(this).attr('id');
      var mapLat = $(this).data('map-lat');
      var mapLng = $(this).data('map-lng');
      var iconPath = $(this).data('icon-path');
      var mapZoom = $(this).data('map-zoom');
      var mapTitle = $(this).data('map-title');

      // if zoom not defined the zoom value will be 15;
      if (!mapZoom) {
        var mapZoom = 15;
      };
      // init map
      var map;
        map = new GMaps({
            div: '#'+mapName,
            scrollwheel: false,
            lat: mapLat,
            lng: mapLng,
            zoom: mapZoom
        });
        // if icon path setted then show marker
        if(iconPath) {
        map.addMarker({
            icon: iconPath,
              lat: mapLat,
              lng: mapLng,
              title: mapTitle
          });
      }
    });  
  };
}

// custom tab for Service section 
function customTabServiceTab () {
    if ($('#service-we-provide .service-tab-title').length) {
        var tabWrap = $('#service-we-provide .col-lg-9 .service-tab-content');
        var tabClicker = $('#service-we-provide .service-tab-title ul li');
        
        tabWrap.children('div').hide();
        tabWrap.children('div').eq(0).show();
        tabClicker.on('click', function() {
            var tabName = $(this).data('tab-name');
            tabClicker.removeClass('active');
            $(this).addClass('active');
            var id = '#'+ tabName;
            tabWrap.children('div').not(id).hide();
            tabWrap.children('div'+id).fadeIn('500');
            return false;
        });        
    }
}
// gallery filter activation
function GalleryFilter () {

	if ($('#image-gallery-mix').length) {
		$('.gallery-filter').find('li').each(function () {
			$(this).addClass('filter');
		});
		$('#image-gallery-mix').mixItUp();
	};
	if($('.gallery-filter.masonary').length){
		$('.gallery-filter.masonary span').on('click', function(){
			var selector = $(this).parent().attr('data-filter');
			$('.gallery-filter.masonary span').parent().removeClass('active');
			$(this).parent().addClass('active');
			$('#image-gallery-isotope').isotope({ filter: selector });
			return false;
		});
	}
}
// Mobile Navigation
function mobileNavToggler () {
	if ($('header .mainmenu-container').length) {
		$('header button.mainmenu-toggler').on('click', function () {
			$('ul.mainmenu').slideToggle();
			return false;
		});
		$('.mainmenu-container ul li.dropdown').append(function () {
			return '<i class="fa fa-bars"></i>';
		});
		$('.mainmenu-container ul li.dropdown .fa').on('click', function () {
			$(this).parent('li').children('ul').slideToggle();
		});

	}
}
// gallery fancybox activator 
function GalleryFancyboxActivator () {
	var galleryFcb = $('.fancybox');
	if(galleryFcb.length){
		galleryFcb.fancybox();
	}
}
//Contact Form Validation
function contactFormValidation () {
	if($('.contact-form').length){
		$('.contact-form').validate({ // initialize the plugin
			rules: {
				name: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				message: {
					required: true
				},
				subject: {
					required: true
				}
			},
			submitHandler: function (form) { 
				// sending value with ajax request
				$.post($(form).attr('action'), $(form).serialize(), function (response) {
					$(form).parent('div').append(response);
					$(form).find('input[type="text"]').val('');
					$(form).find('input[type="email"]').val('');
					$(form).find('textarea').val('');
				});
				return false;
			}
		});
	}
}
// sticky header 
function stickyHeader () {
	var headerScrollPos = $('header').next().offset().top;
	if($(window).scrollTop() > headerScrollPos) {
		$('header').addClass('header-fixed'); 
	}
	else if($(this).scrollTop() <= headerScrollPos) {
		$('header').removeClass('header-fixed'); 
	}
}
function SmoothMenuScroll () {
	var anchor = $('.scrollToLink');
	if(anchor.length){
		anchor.children('a').bind('click', function (event) {
			if ($(window).scrollTop() > 10) {
				var headerH = '45';
			}else {
				var headerH = '125';
			}
			var target = $(this);
			$('html, body').stop().animate({
				scrollTop: $(target.attr('href')).offset().top - headerH + 'px'
			}, 1200, 'easeInOutExpo');
			anchor.removeClass('current');
			target.parent().addClass('current');
			event.preventDefault();
		});
	}
}
function OnePageMenuScroll () {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
    	$('.mainmenu.one-page-scroll-menu .scrollToLink').find('a').each(function (){
    		// grabing section id dynamically
    		var sections = $(this).attr('href');
	        $(sections).each(function() {
	        	// checking is scroll bar are in section
	            if ($(this).offset().top <= windscroll + 100) {
	            	// grabing the dynamic id of section
	        		var Sectionid = $(sections).attr('id');
	        		// removing current class from others
	        		$('.mainmenu').find('li').removeClass('current');
	        		// adding current class to related navigation
	        		$('.mainmenu').find('a[href=#'+Sectionid+']').parent().addClass('current');
	            }
	        });
    	});
    } else {
        $('.mainmenu.one-page-scroll-menu li.current').removeClass('current');
        $('.mainmenu.one-page-scroll-menu li:first').addClass('current');
    }
}
function customTabProductPageTab () {
    if ($('.product-details-tab-title').length) {
        var tabWrap = $('.product-details-tab-content');
        var tabClicker = $('.product-details-tab-title ul li');
        
        tabWrap.children('div').hide();
        tabWrap.children('div').eq(0).show();
        tabClicker.on('click', function() {
            var tabName = $(this).data('tab-name');
            tabClicker.removeClass('active');
            $(this).addClass('active');
            var id = '#'+ tabName;
            tabWrap.children('div').not(id).hide();
            tabWrap.children('div'+id).fadeIn('500');
            return false;
        });        
    }
}

// add your custom functions 
function testimonialsCarosuleMover () {
	if ($('#testimonials-mover .owl-carousel').length) {
		$('#testimonials-mover .owl-carousel').owlCarousel({
		    loop: true,
		    margin: 0,
		    nav: true,
		    dots: false,
		    autoplay: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
		    autoplayHoverPause: true,
		    responsive: {
		        0:{
		            items:1
		        },
		        480:{
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
	}
}



// Dom Ready Function
jQuery(document).on('ready', function () {
	(function ($) {
		// add your functions
		clientCarosule();
		galleryMasonaryLayout();
		gMap();
		GalleryFilter();
		mobileNavToggler();
		customTabServiceTab();
		contactFormValidation();
		GalleryFancyboxActivator();
		SmoothMenuScroll();		
		customTabProductPageTab();		
		testimonialsCarosuleMover();
		revolutionSliderActiver();
		wowActivator();
	})(jQuery);
});

// window on load functino
jQuery(window).on('load', function () {		
	(function ($) {
		// add your functions	
	})(jQuery);
});

// window on scroll functino
jQuery(window).on('scroll', function () {
	(function ($) {
		// add your functions	
		stickyHeader();
		OnePageMenuScroll();
	})(jQuery);
});

	

