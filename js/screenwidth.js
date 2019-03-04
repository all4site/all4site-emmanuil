jQuery(document).ready(function ($) {

	if ($(window).width() <= '1280') {

		var data = {
			action: 'afswh',
			wh: 6
		};

		jQuery.post(screenjs.ajaxurl, data, function (response) {
			$('.content-article').html(response);
		});
	}
	if ($(window).width() <= '480') {

		var data = {
			action: 'afswh',
			wh: 3
		};

		jQuery.post(screenjs.ajaxurl, data, function (response) {
			$('.content-article').html(response);
		});
	}

});