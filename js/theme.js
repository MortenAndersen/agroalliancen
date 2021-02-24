/*global jQuery*/
(function ($) {
    "use strict";
    $(document).ready(function () {

    	// Menu icon
        $('.menu-hamburger').click(function() {
        	$('.line-1').toggleClass('line-1-animate');
        	$('.line-2').toggleClass('line-2-remove');
        	$('.line-3').toggleClass('line-3-animate');



        	$('.menu-wrap').delay($('.menu-wrap').is(':visible') ? 1000 : 0).toggle(1);
        	$(this).toggleClass('active');
        	$('.menu-1, .menu-2, .menu-3').toggleClass('active');

        	//$('.menu-1').show();
        	//$('.menu-2').show();
        	//$('.menu-3').show();
        	$('.menu-1').delay($('.menu-1').is(':visible') ? 600 : 10).animate({
            	height: "toggle",
            	opacity: "toggle"
        		}, "slow");
        	$('.menu-2').delay($('.menu-2').is(':visible') ? 300 : 300).animate({
            	height: "toggle",
            	opacity: "toggle"
        		}, "slow");
        	$('.menu-3').delay($('.menu-3').is(':visible') ? 10 : 600).animate({
            	height: "toggle",
            	opacity: "toggle"
        		}, "slow");


        });








    });


}(jQuery));