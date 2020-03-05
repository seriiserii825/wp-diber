jQuery(document).ready(function ($) {

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

			if ('/' + $(this).attr('href') === urlLink) {
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
			if ($(this).scrollTop() > pointHeight) {
				arrowUp.fadeIn();
			} else {
				arrowUp.fadeOut();
			}
		});

		arrowUp.on('click', function (e) {
			// e.preventDefault();
			$('html, body').animate({
				scrollTop: 0
			}, 1000);
			return false;
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

	function setCookie(name,value,days) {
		var expires = "";
		if (days) {
			var date = new Date();
			date.setTime(date.getTime() + (days*24*60*60*1000));
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = name + "=" + (value || "")  + expires + "; path=/";
	}

	function getCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}
	function eraseCookie(name) {
		document.cookie = name+'=; Max-Age=-99999999;';
	}

	$('#js-popup-close').on('click', function (e) {
		e.preventDefault();

		eraseCookie('popup');

		$('.overlay').fadeOut(400);
		$('#js-popup').fadeOut(200);
		$('body').removeClass('fixed');
	});

	let popup = function (){
		setTimeout(function () {
			$('#js-popup').fadeIn(1500);
			$('.overlay').fadeIn(1200);
			eraseCookie('popup');

			$('body').addClass('fixed');

		}, 2000);
	};

	if(!getCookie('popup1')){
		popup();
	}

	let localStoragePopup = function () {
		$('#js-popup-close-checkbox').on('click', function (e) {
			e.preventDefault();
			if($('#js-popup input[type="checkbox"]').is(':checked')){
				setCookie('popup', 'hide', 30);
			}else{
				setCookie('popup', 'hide', 1);
			}

			$('.overlay').fadeOut(400);
			$('#js-popup').fadeOut(200);
			$('body').removeClass('fixed');
		});
	};
	localStoragePopup();
	console.log(getCookie('popup'));
});
