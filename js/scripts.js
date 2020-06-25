

(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

			jQuery('nav ul').slicknav();

			jQuery('.gallery a').each(function() {
				jQuery(this).attr({'data-lightbox':'galeria'});
			});
	
			
			jQuery('div.slider').bxSlider({
				mode: 'fade',
				auto: true,
				responsive : true,
				touchEnabled: false,
				pager:false
			});

			jQuery('.single-tours header nav ul li:contains("Tours")').addClass('current_page_item');
	
			jQuery('.single-post header nav ul li:contains("Consejos")').addClass('current_page_item');

			jQuery('.category header nav ul li:contains("Consejos")').addClass('current_page_item');

			jQuery('.author header nav ul li:contains("Consejos")').addClass('current_page_item');
		
		
	});
	
})(jQuery, this);
