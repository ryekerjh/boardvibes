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
				$('.huge_it_slideshow_image_wrap_1').addClass("slidey-wrappy");
				// $('.huge_it_slideshow_image_wrap_2').css("max-height", "calc(100% - 100px) !important");
			});

		setTimeout(function() {
			 $('.title-card').addClass("show");
		 }, 200);

		 setTimeout(function() {
			 $('.contact-form').addClass("show");
		 }, 200);

//Make slider height Correct
		     var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

		     $.fn.attrchange = function(callback) {
		         if (MutationObserver) {
		             var options = {
		                 subtree: false,
		                 attributes: true
		             };

		             var observer = new MutationObserver(function(mutations) {
		                 mutations.forEach(function(e) {
		                     callback.call(e.target, e.attributeName);
		                 });
		             });

		             return this.each(function() {
		                 observer.observe(this, options);
		             });

		         }
		     }

		 //Now you need to append event listener
		 $('body *').attrchange(function(attrName) {

		     if(attrName=='class'){
		            //  alert('class changed');
		     }else if(attrName=='id'){
		            //  alert('id changed');
		     }else{
		         //OTHER ATTR CHANGED
		     }

		 });

		 //End make slider height'
		$('.nodisplay').change(function() {
			$('#huge_it_slideshow_image_container_1').addClass("slidey-wrappy");
		});

	});

})(jQuery, this);
