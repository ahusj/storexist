( function($) {

	'use strict';

	/* Mobile Menu */
    $('.mobile-trigger').on('click', function(e){
        e.preventDefault();
        $('body').toggleClass('menu-mobile-in');
    });

    /* close menu mobile */
    $('.mobile-navigation li a').on('click', function(){
        $('body').removeClass('menu-mobile-in');
    });

    /* Toggle menu dropdown */
    $('.mobile-navigation .subnav-toggle').click(function(e) {
      	e.preventDefault();
      	$(this).toggleClass('open').next(".sub-menu").toggleClass('in');
    });

} ) ( jQuery );
