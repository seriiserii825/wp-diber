jQuery(document).ready(function($) {

	let sandwitch = function () {
		$('.sandwitch').on('click', function () {
			// $('#js-main-menu').slideToggle();
			$('#js-main-menu').fadeToggle();

			$(this).toggleClass('sandwitch--active');
			$(this).closest('.sandwitch-wrapper').toggleClass('sandwitch--active');
		});
	};
	sandwitch();

	if ($('#js-alte-bevande').length) {
		let mixer = mixitup('#js-alte-bevande');
	}

	let activeMenuItem = function () {
		let urlLink = window.location.pathname;

		$('#js-main-menu li a').each(function () {

			if('/' + $(this).attr('href') === urlLink){
				$(this).parent().addClass('current-menu-item');
			}
		});
	};
	activeMenuItem();

	let mixitupActiveMenuItem = function () {
		$('#js-alte-bevande__list li').on('click', function () {
			$('#js-alte-bevande__list li').removeClass('active');
			$(this).addClass('active');
		});
	};
	mixitupActiveMenuItem();

	let scrollUp = function () {
		let documentHeight = $(document).height();
		let pointHeight = documentHeight * .25;
		let arrowUp = $('#js-arrow-up');

		$(window).scroll(function () {
			if($(this).scrollTop() > pointHeight ) {
				arrowUp.fadeIn();
			}else{
				arrowUp.fadeOut();
			}
		});

		arrowUp.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({
				scrollTop: 0
			}, 1000);
		});
	};
	scrollUp();

	let changeInputBorderColor = function () {
		$('.main-footer__form .form-group input[type="text"], .main-footer__form .form-group textarea, .main-footer__form .form-group input[type="email"]').on('focus', function () {
			$('.main-footer__form .form-group input[type="text"], .main-footer__form .form-group textarea, .main-footer__form .form-group input[type="email"]').css('borderBottomColor', '#fff');
			$(this).css('borderBottomColor', '#008BCF');
			$('.main-footer__form .form-group label').css('color', '#fff');
			$(this).closest('.form-group').find('label').css('color', '#008BCF');
		});
	};
	changeInputBorderColor();

});
