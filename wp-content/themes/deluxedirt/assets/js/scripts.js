(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
    
    // ---------------------------------------------------------- Services Carousel
		var carousel = $('.services-carousel').bxSlider({
			pagerCustom: '.services__nav',
    });

     // ---------------------------------------------------------- Single Project Carousel
		var SingleProjectCarousel = $('.single-project-gallery').bxSlider({
      pagerCustom: '.single-project-gallery__nav',
    });
    
    
    // ---------------------------------------------------------- Main Navigation
    var HamburgerBtn = $('.main-header__hamburger');

    HamburgerBtn.on('click', function(){
      $('body').toggleClass("website-main-nav--visible body--fixed");
    });
    
		
	});
	
})(jQuery, this);
