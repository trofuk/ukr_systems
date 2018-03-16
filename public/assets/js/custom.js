$(function () {
    "use strict";
    
    /*---------------Color Preset js ---------------*/
    if ($(".td-color-theme-demos").length > 0)
    {
        //switcher 
        var switchs = true;
        $(".settingBtn").on("click", function (e)
        {
            e.preventDefault();
            if (switchs)
            {
                $(this).addClass("active");
                $(".td-color-theme-demos").animate({"left": "0px"}, 400);
                switchs = false;
            }
            else
            {
                $(this).removeClass("active");
                $(".td-color-theme-demos").animate({"left": "-250px"}, 400);
                switchs = true;
            }
        });
    }
     $('#actionColors li').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active');
    });
    
    /*---------------sticky header on scroll js ---------------*/
    $(".navbar").sticky({topSpacing: 0});
    //    //shrink header trnsparent
    $(window).on("scroll", function () {
        if ($(document).scrollTop() > 70) {
            $('.transparent-nav').addClass('shrink');
        } else {
            $('.transparent-nav').removeClass('shrink');
        }
    });
    
    /*---------------navbar js ---------------*/
    $('.navbar li a').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
        }, 1500);
        event.preventDefault();
    });
    
    /*---------------testimonial-slider, testimonial_slider_two js --------*/
    function testimonialSlider(){
        var testimonial = $("#testimonial-slider,.testimonial_slider_two");
        if( testimonial.length ){
            testimonial.owlCarousel({
                loop:true,
                margin:30,
                items:1,
                autoplay:true,
                center: true,
                smartSpeed:1000,
                nav: true,
                navText: ['<i class="ion-arrow-left-c"></i>','<i class="ion-arrow-right-c"></i>'],
                responsiveClass:true
            });
        }
    }
    testimonialSlider();
    
    /*---------------clients-lg-slider js --------*/
    function clientsSlider(){
        var Cslider = $(".clients-lg-slider");
        if( Cslider.length ){
            Cslider.owlCarousel({
                loop:true,
                margin:0,
                items:4,
                autoplay:true,
                smartSpeed:1000,
                nav: false,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    400:{
                        items:2 
                    }, 
                    768:{
                        items:3   
                    }
                },
            });
        }
    }
    clientsSlider();
    
    /*---------------customer-logo-carousel, ag_clients_slider js --------*/
    function clientsSlider_two(){
        var Cslider_two = $(".customer-logo-carousel,.ag_clients_slider");
        if(  Cslider_two.length ){
             Cslider_two.owlCarousel({
                loop:true,
                margin:0,
                items:5,
                autoplay:true,
                smartSpeed:1000,
                nav: false,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    400:{
                        items:2 
                    }, 
                    768:{
                        items:5   
                    }
                },
            });
        }
    }
    clientsSlider_two();
    
    /*---------------blog_slider js --------*/
    function BlogSlider(){
        var Bslider = $(".blog_slider");
        if( Bslider.length ){
            Bslider.owlCarousel({
                loop:true,
                margin:0,
                items:2,
                autoplay:true,
                smartSpeed:1000,
                nav: false,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:1 
                    }, 
                    992:{
                        items:2  
                    }
                },
            });
        }
    }
    BlogSlider();
    
    /*---------------carousel js --------*/
    function themeSlider(){
        var Tslider = $("#carousel");
        if( Tslider.length ){
            Tslider.owlCarousel({
                loop:true,
                margin:0,
                items:1,
                animateOut: 'slideOutDown',
                animateIn: 'zoomIn',
                autoplay:true,
                smartSpeed:800,
                nav: false,
                responsiveClass:true,
                transitionStyle : "backSlide"
            });
        }
    }
    themeSlider();
    
    /*---------------recentpost_carousel js --------*/
    function recentSlider(){
        var recentslider = $(".recentpost_carousel");
        if( recentslider.length ){
            recentslider.owlCarousel({
                loop:true,
                margin:30,
                items:3,
                autoplay:true,
                smartSpeed:1000,
                nav: false,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:2 
                    }, 
                    992:{
                        items:3  
                    }
                },
            });
        }
    }
    recentSlider();
    
    
    /*---------------recentpost_carousel js --------*/
    function featurseslider(){
        var fslider = $(".s-features-slider");
        if( fslider.length ){
            fslider.owlCarousel({
                loop:true,
                margin:30,
                items:1,
                autoplay:true,
                smartSpeed:1000,
                nav: false,
                responsiveClass:true,
            });
        }
    }
    featurseslider();
    
    /*---------------back to top js --------*/
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    

    /*---------------Click event to scroll to top js --------*/
    $('.scrollToTop').on("click", function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    
    
    /*---------------Onepage Freelancer Slider js --------*/
    function main_slider(){
        if ( $('#rev_slider_freelanceR').length ){
            $("#rev_slider_freelanceR").revolution({
                sliderType:"standard",
                sliderLayout:"fullscreen",
                lazyLoad:"on", 
                delay:9000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1600,1024,778,480],
                gridheight:[900,600,500,400],
                lazyType:"smart",
                shadow:0,
                spinner:"off",
                stopLoop:"on",
                stopAfterLoops:0,
                shuffle:"off",
                autoHeight:"on",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider();
    
    /*--------------- slider2 js --------*/
    if (typeof $.fn.revolution !== 'undefined') {
        $('#slider2').revolution({
	    	sliderLayout:"fullwidth",
	    	sliderType: "standard",
			delay:12000,
			gridwidth:1170,
			gridheight:700,
			hideThumbs:10,
			navigation: {
				onHoverStop: "off",
				touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
	        	arrows:{
	        		enable:true,
	        		style: "hades",
	        		tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
	        		left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },

	        		hide_onmobile:true
	        	},
	        	bullets:{
		        	style:"",
		        	enable:true,
		        	hide_onmobile:false,
		        	hide_onleave:true,
		        	hide_delay:200,
		        	hide_delay_mobile:1200,
		        	hide_under:0,
		        	hide_over:9999, 
		        	direction:"horizontal",
		        	space:10,       
		        	h_align:"center",
		        	v_align:"bottom",
		        	h_offset:0,
		        	v_offset:30,
		        	tmp: ''
		        },
	      	},
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[700,700,700,500],
			spinner:"spinner4"
		});
    }

   
    /*--------------- photography slider js --------*/
    if (typeof $.fn.revolution !== 'undefined') {
        $('#rev_slider_1064_1').revolution({
	    	sliderType:"standard",
            jsFileLocation:"revolution/js/",
            sliderLayout:"fullscreen",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                mouseScrollReverse:"default",
                onHoverStop:"off",
                touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "vertical",
                    drag_block_vertical: false
                }
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[868,768,960,720],
            lazyType:"none",
            shadow:0,
            spinner:"off",
            stopLoop:"on",
            stopAfterLoops:0,
            stopAtSlide:1,
            shuffle:"off",
            autoHeight:"off",
            fullScreenAutoWidth:"off",
            fullScreenAlignForce:"off",
            fullScreenOffsetContainer: ".header",
            fullScreenOffset: "",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
		});
    }
    
    /*--------------- circle progress js--------*/
    function circle_progress(){
        if( $('.circle').length ){
            $(".circle").each(function() {
                $(this).waypoint(function() {
                    $('.circle').circleProgress({
                        startAngle:-14.1,
                        size: 100,
                        duration: 500000,
                        easing: "circleProgressEase",
                        emptyFill: '#ededed',
                        lineCap: 'round',
                        thickness:3,
                    })
                }, {
                    triggerOnce: true,
                    offset: 'bottom-in-view'
                })
            })
        }
    }
    circle_progress();
    
    /*--------------- counter js--------*/
    function counterActivator(){
        if ( $('.counter').length ){
            $('.counter').counterUp({
                delay: 70,
                time: 1000
            })
        }
    }
    counterActivator();
  
    /*--------------- progress-bar js--------*/
    $(".progress-content").each(function() {
        $(this).waypoint(function() {
            var progressBar = $(".progress-bar");
            progressBar.each(function(indx){
                $(this).css("width", $(this).attr("aria-valuenow") + "%")
            })
        }, {
            triggerOnce: true,
            offset: 'bottom-in-view',
        });
    });
    
    /*---------------Portfolio isotope js--------*/
    function portfolioMasonry(){
        var portfolios = $("#portfolio");
        if( portfolios.length ){
            portfolios.imagesLoaded( function() {
                $("#portfolio").isotope({
                    itemSelector: ".portfolio-item",
                    layoutMode: 'masonry',
                });
                // Add isotope click function
                $(".portfolio-filter li").on('click',function(){
                    $(".portfolio-filter li").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    portfolios.isotope({
                        filter: selector,
                        animationOptions: {
                          animationDuration: 750,
                          easing: 'linear',
                          queue: false
                      }
                    })
                    return false;
                })
            })
        }
    }
    portfolioMasonry();
    
    /*---------------Magnificpopup-js--------*/
    function Magnificpopu(){
        if ( $('.popup-with-zoom-anim').length ){   
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline', 
                fixedContentPos: false,
                fixedBgPos: true, 
                overflowY: 'auto', 
                closeBtnInside: true,
                preloader: false, 
                midClick: true,
                removalDelay: 300,
                mainClass:  'my-mfp-zoom-in'
            });
        };
    };
    Magnificpopu();
    
    /*---------------masonry-js--------*/
    $(window).on('load', function(){
          $('.masonry-blog').masonry({
               itemSelector: '.masonry-post',
               columnWidth : 0
          });
    });
    

    /*---------------scroll-top-js--------*/
    $('.tlt').textillate({
        selector: '.texts',
        in:{
            delay: 100,
        },
        out:{
            delay: 100,
        },
        loop: true,
        type: 'char'
    });
    
    /*---------------scroll-top-js--------*/
    var scrT= $("a[href='#'].scroll-t");
    scrT.on("click", function(e){
        e.preventDefault();
        $("body,html").animate({ scrollTop: $(document).height() }, 1200);
    });
    
    /*=========animation js =========*/
    function bodyScrollAnimation() {
        if($(window).width()>768){
            new WOW({
                animateClass: 'animated', // animation css class (default is animated)
                offset:       100,          // distance to the element when triggering the animation (default is 0)
                mobile:       false, 
                duration:     1000,
            }).init()
        }
    }
    bodyScrollAnimation();
    
    /*---------------MAILCHIMP-js--------*/
    if ($(".mailchimp").length > 0)
    {
        $(".mailchimp").ajaxChimp({
            callback: mailchimpCallback,
            url: "http://wethemez.us16.list-manage.com/subscribe/post?u=b6b3217322f92c77abf7e8601&id=8cdded5ddb" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
        });
    }
    $(".memail").on("focus", function ()
    {
        $(".mchimp-errmessage").fadeOut();
        $(".mchimp-sucmessage").fadeOut();
    });
    $(".memail").on("keydown", function ()
    {
        $(".mchimp-errmessage").fadeOut();
        $(".mchimp-sucmessage").fadeOut();
    });
    $(".memail").on("click", function ()
    {
        $(".memail").val("");
    });
    function mailchimpCallback(resp)
    {
        if (resp.result === "success") {
            $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
            $(".mchimp-sucmessage").fadeOut(500);
        } else if (resp.result === "error") {
            $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
        }
    }
    
    // preloader js
    $(window).load(function() { // makes sure the whole site is loaded
		$('.loader-container').fadeOut(); // will first fade out the loading animation
		$('.loader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(150).css({'overflow':'visible'})
    })
});

