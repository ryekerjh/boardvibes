(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$('.title-card').on('load',function(e){
				event.preventDefault();
				$('.title-card').toggleClass('hide');

			});

			$(document).ready(function() {
				$('.wppg_photo_details_previous_photo').addClass("custom-btn");
				$('.wppg_photo_details_next_photo').addClass("custom-btn");
				$('.huge_it_slideshow_image_wrap1_1').css("height", "calc(100% - 100px) !important");
				$('.huge_it_slideshow_image_wrap_1').css("height", "calc(100% - 100px) !important");
				$('.huge_it_slideshow_image_1_0').css("height", "calc(100% - 100px) !important");
			});

		setTimeout(function() {
			 $('.title-card').addClass("show");
		 }, 200);

		 setTimeout(function() {
			 $('.contact-form').addClass("show");
		 }, 200);

	});

})(jQuery, this);
