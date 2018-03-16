
$(function () {
    "use strict";
   /*===========Portfolio isotope js===========*/
    function portfolioMasonry(){
        var portfolio = $(".portfolio_p");
        if( portfolio.length ){
            portfolio.imagesLoaded( function() {
                // Add isotope click function
                $(".port_fillter li").on('click',function(){
                    $(".port_fillter li").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    portfolio.isotope({
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
    /*--------------------------------
        29. Portfolio-2  Single
    ---------------------------------*/
    if($('.bxslider').length>0){
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager',
            nextText:'<i class="fa fa-angle-right" aria-hidden="true"></i>',
            prevText:'<i class="fa fa-angle-left" aria-hidden="true"></i>',
            pager: true,
            speed: 1000,
            auto: true,
            autoStart: true
        });
    }
    
    //back to top
    //Check to see if the window is top if not then display button
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 50) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').on("click", function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    
    $(window).on('load', function(){
          $('.masonry-blog').masonry({
               itemSelector: '.masonry-post',
               columnWidth : 0
          });
    });
    
    // preloader js
    $(window).load(function() { // makes sure the whole site is loaded
		$('.loader-container').fadeOut(); // will first fade out the loading animation
		$('.loader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(150).css({'overflow':'visible'})
    })
});

