// JavaScript Document


	/*----------------------------------------------------*/
	/*	preLoader
	/*----------------------------------------------------*/
	$(document).ready(function(){
	
		"use strict";
	
		$('body').jpreLoader({
			loaderVPos: '50%',
			autoClose: true,
		}, 
		function() {	
			$('body').animate({"opacity":'1'},{queue:false,duration:1200,easing:"easeInOutQuad"});
		});
		
	});
	
	
	
	/*----------------------------------------------------*/
	/*	Template Animations
	/*----------------------------------------------------*/
	$(document).ready(function(){
	
		"use strict";
	
		$('#features').waypoint(function() {
			setTimeout(function(){$('#f_center_content').addClass('animated fadeInUp')},600);			
            setTimeout(function(){$('#feature_1').addClass('animated fadeInLeft')},400);			
            setTimeout(function(){$('#feature_2').addClass('animated fadeInLeft')},600);
            setTimeout(function(){$('#feature_3').addClass('animated fadeInLeft')},800);
			setTimeout(function(){$('#feature_4').addClass('animated fadeInRight')},400);
			setTimeout(function(){$('#feature_5').addClass('animated fadeInRight')},600);
			setTimeout(function(){$('#feature_6').addClass('animated fadeInRight')},800);
        }, { offset: '65%' });
		
		$('#screens').waypoint(function() {
            setTimeout(function(){$('#screenshot_1').addClass('animated fadeInDown')},400);
            setTimeout(function(){$('#screenshot_2').addClass('animated fadeInDown')},500);
            setTimeout(function(){$('#screenshot_3').addClass('animated fadeInDown')},600);
			setTimeout(function(){$('#screenshot_4').addClass('animated fadeInDown')},700);
			setTimeout(function(){$('#screenshot_5').addClass('animated fadeInUp')},800);
			setTimeout(function(){$('#screenshot_6').addClass('animated fadeInUp')},900);
			setTimeout(function(){$('#screenshot_7').addClass('animated fadeInUp')},1000);
			setTimeout(function(){$('#screenshot_8').addClass('animated fadeInUp')},1100);
        }, { offset: '65%' });
				
		$('#video-banner').waypoint(function() {
            setTimeout(function(){$('#v_banner_content').addClass('animated fadeInLeft')},300);
            setTimeout(function(){$('#v_banner_video').addClass('animated fadeInRight')},300);
        }, { offset: '70%' });
	
		$('#team').waypoint(function() {
            setTimeout(function(){$('#team-member-holder').addClass('animated fadeInUp')},500);
        }, { offset: '65%' });
	
		$('#pricing').waypoint(function() {
            setTimeout(function(){$('#price_1').addClass('animated fadeInUp')},400);
            setTimeout(function(){$('#price_2').addClass('animated fadeInUp')},450);
            setTimeout(function(){$('#price_3').addClass('animated fadeInUp')},500);
			setTimeout(function(){$('#price_4').addClass('animated fadeInUp')},550);
        }, { offset: '65%' });
		
		$('#faq').waypoint(function() {	
            setTimeout(function(){$('#question_1').addClass('animated fadeInLeft')},400);			
            setTimeout(function(){$('#question_2').addClass('animated fadeInLeft')},550);
            setTimeout(function(){$('#question_3').addClass('animated fadeInLeft')},700);
			setTimeout(function(){$('#question_4').addClass('animated fadeInLeft')},850);
			setTimeout(function(){$('#question_5').addClass('animated fadeInRight')},400);
			setTimeout(function(){$('#question_6').addClass('animated fadeInRight')},550);
			setTimeout(function(){$('#question_7').addClass('animated fadeInRight')},700);			
            setTimeout(function(){$('#question_8').addClass('animated fadeInRight')},850);
        }, { offset: '70%' });
		
		$('#contact').waypoint(function() {
            setTimeout(function(){$('#input_name').addClass('animated fadeInLeft')},400);
            setTimeout(function(){$('#input_email').addClass('animated fadeInRight')},400);
            setTimeout(function(){$('#input_subject').addClass('animated fadeInLeft')},600);
			setTimeout(function(){$('#input_message').addClass('animated fadeInRight')},600);
			setTimeout(function(){$('#form_btn').addClass('animated fadeInUp')},700);
        }, { offset: '65%' });
				
		$('#newsletter').waypoint(function() {
            setTimeout(function(){$('#newsletter_form').addClass('animated fadeInRight')},400);
            setTimeout(function(){$('#newsletter_title').addClass('animated fadeInLeft')},400);
		}, { offset: '80%' });
		
		$('#footer').waypoint(function() {
            setTimeout(function(){$('#footer_copy').addClass('animated fadeInUp')},400);
            setTimeout(function(){$('#footer_icons').addClass('animated fadeInUp')},400);
		}, { offset: '94%' });
		
	});

	
	
	/*----------------------------------------------------*/
	/*	ScrollUp
	/*----------------------------------------------------*/
	/**
	* scrollUp v1.1.0
	* Author: Mark Goodyear - http://www.markgoodyear.com
	* Git: https://github.com/markgoodyear/scrollup
	*
	* Copyright 2013 Mark Goodyear
	* Licensed under the MIT license
	* http://www.opensource.org/licenses/mit-license.php
	*/

	$(document).ready(function(){

		'use strict';

		$.scrollUp = function (options) {

			// Defaults
			var defaults = {
				scrollName: 'scrollUp', // Element ID
				topDistance: 300, // Distance from top before showing element (px)
				topSpeed: 1200, // Speed back to top (ms)
				animation: 'slide', // Fade, slide, none
				animationInSpeed: 200, // Animation in speed (ms)
				animationOutSpeed: 200, // Animation out speed (ms)
				scrollText: '', // Text for element
				scrollImg: false, // Set true to use image
				activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			};

			var o = $.extend({}, defaults, options),
				scrollId = '#' + o.scrollName;

			// Create element
			$('<a/>', {
				id: o.scrollName,
				href: '#top',
				title: o.scrollText
			}).appendTo('body');
			
			// If not using an image display text
			if (!o.scrollImg) {
				$(scrollId).text(o.scrollText);
			}

			// Minium CSS to make the magic happen
			$(scrollId).css({'display':'none','position': 'fixed','z-index': '2147483647'});

			// Active point overlay
			if (o.activeOverlay) {
				$("body").append("<div id='"+ o.scrollName +"-active'></div>");
				$(scrollId+"-active").css({ 'position': 'absolute', 'top': o.topDistance+'px', 'width': '100%', 'border-top': '1px dotted '+o.activeOverlay, 'z-index': '2147483647' });
			}

			// Scroll function
			$(window).scroll(function(){	
				switch (o.animation) {
					case "fade":
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).fadeIn(o.animationInSpeed) : $(scrollId).fadeOut(o.animationOutSpeed) );
						break;
					case "slide":
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed) );
						break;
					default:
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).show(0) : $(scrollId).hide(0) );
				}
			});

			// To the top
			$(scrollId).click( function(event) {
				$('html, body').animate({scrollTop:0}, o.topSpeed);
				event.preventDefault();
			});

		};
		
		$.scrollUp();

	});
	
	
	
	/*----------------------------------------------------*/
	/*	Animated Scroll To Anchor
	/*----------------------------------------------------*/
	/**
	 * Animated Scroll To Anchor v0.3
	 * Author: David Vogeleer
	 * http://www.individual11.com/
	 *
	 * THANKS:
	 *
	 * -> solution for setting the hash without jumping the page -> Lea Verou : http://leaverou.me/2011/05/change-url-hash-without-page-jump/
	 * -> Add stop  - Joe Mafia
	 * -> add some easing - Daniel Garcia
	 * -> added use strict, cleaned up some white space adn added conditional for anchors without hashtag -> Bret Morris, https://github.com/bretmorris
	 *
	 * TODO:
	 * -> Add hashchange support, but make it optional http://leaverou.me/2011/05/get-your-hash-the-bulletproof-way/
	 *
	 * Licensed under the MIT license.
	 * http://www.opensource.org/licenses/mit-license.php
	 * 
	 */
	 
	$(document).ready(function(){


		"use strict";
		$.fn.scrollTo = function( options ) {

			var settings = {
				offset : -60,       //an integer allowing you to offset the position by a certain number of pixels. Can be negative or positive
				speed : 'slow',   //speed at which the scroll animates
				override : null,  //if you want to override the default way this plugin works, pass in the ID of the element you want to scroll through here
				easing : null //easing equation for the animation. Supports easing plugin as well (http://gsgd.co.uk/sandbox/jquery/easing/)
			};

			if (options) {
				if(options.override){
					//if they choose to override, make sure the hash is there
					options.override = (override('#') != -1)? options.override:'#' + options.override;
				}
				$.extend( settings, options );
			}

			return this.each(function(i, el){
				$(el).click(function(e){
					var idToLookAt;
					if ($(el).attr('href').match(/#/) !== null) {
						e.preventDefault();
						idToLookAt = (settings.override)? settings.override:$(el).attr('href');//see if the user is forcing an ID they want to use
						//if the browser supports it, we push the hash into the pushState for better linking later
						if(history.pushState){
							history.pushState(null, null, idToLookAt);
							$('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing);
						}else{
							//if the browser doesn't support pushState, we set the hash after the animation, which may cause issues if you use offset
							$('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing,function(e){
								//set the hash of the window for better linking
								window.location.hash = idToLookAt;
							});
						}
					}
				});
			});
		};
		  
		$('#GoToHome, #GoToMainContent, #GoToFeatures, #GoToScreens, #GoToTeam, #GoToPricing, #GoToFaq, #GoToContact' ).scrollTo({ speed: 1400 });

	});
	
	
	
	/*----------------------------------------------------*/
	/*	Current Menu Item
	/*----------------------------------------------------*/
	
	$(document).ready(function() {
		
		//Bootstraping variable
		headerWrapper		= parseInt($('#navigation-menu').height());
		offsetTolerance	= 300;
		
		//Detecting user's scroll
		$(window).scroll(function() {
		
			//Check scroll position
			scrollPosition	= parseInt($(this).scrollTop());
			
			//Move trough each menu and check its position with scroll position then add selected-nav class
			$('.navbar-nav > li > a').each(function() {

				thisHref				= $(this).attr('href');
				thisTruePosition	= parseInt($(thisHref).offset().top);
				thisPosition 		= thisTruePosition - headerWrapper - offsetTolerance;
				
				if(scrollPosition >= thisPosition) {
					
					$('.selected-nav').removeClass('selected-nav');
					$('.navbar-nav > li > a[href='+ thisHref +']').addClass('selected-nav');
					
				}
			});
			
			
			//If we're at the bottom of the page, move pointer to the last section
			bottomPage	= parseInt($(document).height()) - parseInt($(window).height());
			
			if(scrollPosition == bottomPage || scrollPosition >= bottomPage) {
			
				$('.selected-nav').removeClass('selected-nav');
				$('navbar-nav > li > a:last').addClass('selected-nav');
			}
		});
		
	});
	
	

	/*----------------------------------------------------*/
	/*	PrettyPhoto
	/*----------------------------------------------------*/
	
	$(document).ready(function(){
	
		"use strict";
		
		$("a[class^='prettyPhoto']").prettyPhoto();

	});
	
	
	
	/*----------------------------------------------------*/
	/*	Flexslider
	/*----------------------------------------------------*/
	
	$(document).ready(function(){
	
		"use strict";

		$('.flexslider').flexslider({
			animation: "fade",
			controlNav: true,
			directionNav: false,  
			slideshowSpeed: 4000,   
			animationSpeed: 800,  
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
		
		$('.flexslider-banner').flexslider({
			animation: "fade",
			controlNav: false,
			directionNav: false,  
			slideshowSpeed: 5000,   
			animationSpeed: 400,  
			start: function(slider){
				$('body').removeClass('loading');
			}
		});

	});

	
	
	/*----------------------------------------------------*/
	/*	Accordion
	/*----------------------------------------------------*/
	
	$(document).ready(function(){
	
		"use strict";

		$('ul.accordion').accordion();
		
	});
	
	
	
	/*----------------------------------------------------*/
	/*	Tooltip
	/*----------------------------------------------------*/
	
	$(document).ready(function(){
	
		"use strict";

		jQuery("[rel='tooltip']").tooltip();
		
	});

	
	
	/*----------------------------------------------------*/
	/*	Contact Form Validation
	/*----------------------------------------------------*/
	
	$(document).ready(function(){
	
		"use strict";

		$("#contact-form").validate({
			rules:{ 
				first_name:{
					required: true,
					minlength: 4,
					maxlength: 16,
					},
					email:{
						required: true,
						email: true,
					},
					subject:{
						required: true,
						minlength: 4,
						maxlength: 24,
					},		
					message:{
						required: true,
						minlength: 2,
						}
					},
					messages:{
							email:{
								required: "We need your email address to contact you",
								email: "Your email address must be in the format of name@domain.com"
							}, 
							message:{
								required: "Please enter no more than (2) characters"
							}, 
						}
		});			
		
	});
	