(function ($) {

	//Add class to top menu
	$(document).ready(function () {
		var posreload = $('.navwrapper').offset().top;
		var wh = $(window).width();

		if (posreload >= 50) {
			$('.navwrapper').addClass('menuscroll');
		}
		jQuery(document).scroll(function () {
			var pos = $(this).scrollTop();

			if (pos >= 50) {
				$('.navwrapper').addClass('menuscroll');
			} else {
				$('.navwrapper').removeClass('menuscroll');
			}
		});
	});
	//Add class to top menu end


	//Top menu for mobile start
	$(document).ready(function () {
		$('.menu .menu-item-has-children > a').click(function (e) {
			e.preventDefault();
			var $this = $(this);


			if ($this.next().hasClass('show')) {
				$this.next().removeClass('show');
				$this.next().slideUp(350);
			} else {
				$this.parent().parent().find('.sub-menu').removeClass('show');
				$this.parent().parent().find('.sub-menu').slideUp(350);
				$this.next().toggleClass('show');
				$this.next().slideToggle(350);
			}

		});
	});
	//Top menu for mobile end

	//Menu humburger start
	$(document).ready(function () {
		$('.cross').click(function () {
			var menu = $('.menu');
			$('.hamburger').toggleClass('is-active');
			$('.nav-top-hide').toggle('slide', {
				direction: 'up',
			}, 350);
			$('body').toggleClass('overfolw');
			if (!$('.hamburger').hasClass('is-active')) {
				menu.find('.show').slideUp();
				menu.find('.show').removeClass('show');
			}
		});
	});
	//Menu humburger end

	// Satrt ACCORDEON CATEGORY
	$(document).ready(function () {
			if ($(window).width() <= '992') {
				$('.aside .aside_inner').hide();

			} else {
				$('.aside .aside_inner').show();
			}


		$(window).resize(function () {
			var xalk = $('.aside .aside_inner');

			if ($(window).width() <= '992') {
				$(xalk).hide();
			} else {
				$('.aside .aside_inner').show();
			}
		});

				if ($(window).width() <= '992') {

			$('.aside > div').click(function () {
				console.log('test');

				var all = $('.aside > div').removeClass('active');
				var top = $(this).addClass('active');

				var findAcc = $(this).find('>.aside_inner');
				var findClosest = $(this).closest('.aside');

				if (findAcc.is(':visible')) {
					findAcc.slideUp(1000);
				} else {
					findClosest.find('.aside_inner').slideUp(1000);
					findAcc.slideDown(1000);
				}

			});
		}
	});
	//End Accordeon Category
})(jQuery);