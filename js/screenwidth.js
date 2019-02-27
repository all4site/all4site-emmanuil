(function ($) {

	$(document).ready(function () {
		var wh = $(window).width();
		console.log(wh);

		$.ajax({
			type: "POST",
			url: "/wp-content/themes/all4site/index.php",
			data: wh,

			success: function (data) {
					console.log(data);
				},
				error: function () {
				console.log("No PHP script: ");
			}
		});
		return false;
	});

})(jQuery);