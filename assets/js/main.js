window.onload=function(){
	let mapInitElem=document.createElement('script');
	mapInitElem.setAttribute("type","text/javascript");
	mapInitElem.innerHTML = "" +
		"function initMap() {"+
			// The location of Uluru
			"var mapCenter = {lat: 45.9590269, lng: 12.3180639};" +
			// The map, centered at Uluru
			"var map = new google.maps.Map(" +
				"document.getElementById('js-map'), {zoom: 15, center: mapCenter});" +
			// The marker, positioned at Uluru
			"var marker = new google.maps.Marker({position: mapCenter, map: map});" +
		"}";


	let fileref=document.createElement('script');
	fileref.setAttribute("type","text/javascript");
	fileref.setAttribute("src", 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBxE4eV2_MWXXb7iPnhOD8nRoIcVWxnNRU&callback=initMap');

	setTimeout(function () {
		document.getElementsByTagName("body")[0].appendChild(mapInitElem);
		document.getElementsByTagName("body")[0].appendChild(fileref);
	}, 2000);
};

jQuery(document).ready(function ($) {

	let stickyMenu = function(){
		let documentHeight = $(document).height();
		let pointHeight = documentHeight * .1;
		let mainHeader = $('.main-header');

		$(window).scroll(function () {
			if ($(this).scrollTop() > pointHeight) {
				if( !mainHeader.hasClass('fixed')) {
					mainHeader.addClass('fixed')
				}
			} else {
				mainHeader.removeClass('fixed')
			}
		});
	};
	stickyMenu();

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

		// eraseCookie('popup');
		//
		// $('.overlay').fadeOut(300);
		// $('#js-popup').fadeOut(300);
		// $('body').removeClass('fixed');
	});

	let popup = function (){
		setTimeout(function () {
			$('#js-popup').fadeIn(100);
			$('.overlay').fadeIn(100);
			eraseCookie('popup');

			$('body').addClass('fixed');

		}, 300);
	};

	if(!getCookie('popup')){
		$('body').addClass('fixed');
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

			$('.overlay').fadeOut(300);
			$('#js-popup').fadeOut(300);
			$('body').removeClass('fixed');
		});
	};
	localStoragePopup();

});

