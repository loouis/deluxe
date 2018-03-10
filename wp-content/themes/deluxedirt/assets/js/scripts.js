(function ($, root, undefined) {
	
	$(function () {
		
    'use strict';

    var $body = $('body'),
        $window = $(window),
        $winWidth = $window.width();

    
    // Wow
		var wow = new WOW({
		    mobile: false,      
		});
		wow.init();
    

    // ---------------------------------------------------------- Services Carousel & Accordion

    // Mobile Accordion 
    var $mobileServicesAccordion = $('.services-carousel__service__mobile-accord'),
        $ServicesAccordionParent = $('.services-carousel'),
        $ServicesActiveClass = 'services-carousel__service--visible-desc';

    $mobileServicesAccordion.on('click', function(){
      var $this = $(this),
          $thisParent = $this.parent(".services-carousel__service"),
          $thisParentPosition = $thisParent.position();

      if( $thisParent.hasClass($ServicesActiveClass) ){
        $thisParent.removeClass($ServicesActiveClass);
      }else{
        $ServicesAccordionParent.find(".services-carousel__service--visible-desc").removeClass($ServicesActiveClass);
        $thisParent.addClass($ServicesActiveClass);
        $('html, body').scrollTop($(".services-carousel__service--visible-desc").offset().top -80);
      }
      
    });

    // Flickity Carousel
    var $carousel = $('.services-carousel').flickity({
      watchCSS: true,
      prevNextButtons: false,
      pageDots: false
    });

    var flkty = $carousel.data('flickity');
    var $cellButtonGroup = $('.services__nav');
    var $cellButtons = $cellButtonGroup.find('.services__nav__button');

    // Update selected cellButtons
    $carousel.on( 'select.flickity', function() {
      $cellButtons.filter('.is-selected')
        .removeClass('is-selected');
      $cellButtons.eq( flkty.selectedIndex )
        .addClass('is-selected');
    });
    // Select cell on button click
    $cellButtonGroup.on( 'click', '.services__nav__button', function() {
      var index = $(this).index();
      $carousel.flickity( 'select', index );
    });

    
     // ---------------------------------------------------------- Single Project Carousel
    
     var $singleProjectCarousel = $('.single-project-gallery').flickity({
      prevNextButtons: false,
      pageDots: false,
      lazyLoad: true
    });
    // Previous Button
    $('.single-project-gallery__nav--prev').on( 'click', function() {
      $singleProjectCarousel.flickity('previous');
    });
    // Next Button
    $('.single-project-gallery__nav--next').on( 'click', function() {
      $singleProjectCarousel.flickity('next');
    });

    
    // ---------------------------------------------------------- Main Navigation
    
    var HamburgerBtn = $('.main-header__hamburger'),
        MainNavLinksContainer = $('.website-main-nav__links');

    // Open website nav
    HamburgerBtn.on('click', function(){
      $body.toggleClass("website-main-nav--visible body--fixed");
    });
    // Close nav with links clicked
    MainNavLinksContainer.on('click', function(){
      $body.removeClass("website-main-nav--visible body--fixed");
    });

		
	});
	
})(jQuery, this);
