jQuery(document).ready(function ($) {

	if ($(window).width() <= '1280') {

		var data = {
			action: 'afswh',
			name: 'dfdfd'
		};

		jQuery.post(screenjs.ajaxurl, data, function (response) {
			$('.content-article').html(response);
		});
	}

});