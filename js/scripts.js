(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		var mySwiper = new Swiper('.swiper-container', {
            speed: 600,
            spaceBetween: 0,
            autoplay: {
                delay: 2000
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
        
		
	});
	
})(jQuery, this);
