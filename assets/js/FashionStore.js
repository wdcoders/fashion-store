$(document).ready(function (e) {
	$('.fe-hero-slider').slick({
		dots: !0,
		fade: !1,
		infinite: !0,
		autoplay: !0,
		arrows: !0,
		speed: 600,
		prevArrow:
			'<div class="fe-hero-slider-arrow-left"><i class="ri-arrow-left-line ri-xl"></i></div>',
		nextArrow:
			'<div class="fe-hero-slider-arrow-right"><i class="ri-arrow-right-line ri-xl"></i></div>',
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1200,
				settings: { slidesToShow: 1, slidesToScroll: 1 },
			},
			{
				breakpoint: 992,
				settings: { slidesToShow: 1, slidesToScroll: 1 },
			},
			{
				breakpoint: 768,
				settings: { slidesToShow: 1, slidesToScroll: 1 },
			},
			{
				breakpoint: 576,
				settings: { slidesToShow: 1, slidesToScroll: 1, arrows: !1 },
			},
		],
	});

	$('#feRelatedProducts').slick({
		dots: !1,
		infinite: !0,
		autoplay: !0,
		arrows: !0,
		speed: 1e3,
		prevArrow:
			'<div class="fe-product-slider-arrow-left"><i class="ri-arrow-left-line ri-xl"></i></div>',
		nextArrow:
			'<div class="fe-product-slider-arrow-right"><i class="ri-arrow-right-line ri-xl"></i></div>',
		slidesToShow: 4,
		slidesToScroll: 2,
		responsive: [
			{
				breakpoint: 1200,
				settings: { slidesToShow: 4, slidesToScroll: 4 },
			},
			{
				breakpoint: 992,
				settings: { slidesToShow: 3, slidesToScroll: 3 },
			},
			{
				breakpoint: 768,
				settings: { slidesToShow: 2, slidesToScroll: 2 },
			},
			{
				breakpoint: 576,
				settings: { slidesToShow: 1, slidesToScroll: 1, arrows: !1 },
			},
		],
	});

	$(window).scroll(function () {
		const sc = $(window).scrollTop();
		if (sc > 100) {
			$('.fe-navbar').addClass('sticky');
		} else {
			$('.fe-navbar').removeClass('sticky');
		}
	});

	$('.fe-category-dropdown-toggle').on('click', function (e) {
		if ($(this).parent().hasClass('in')) {
			$(this).siblings('.fe-category-sidebar-dropdown').slideUp();
			$(this).parent().removeClass('in');
		} else {
			$(this).siblings('.fe-category-sidebar-dropdown').slideDown();
			$(this).parent().addClass('in');
		}
	});

	$('#feCategorySidebarClose').on('click', function (e) {
		$('#feCategorySidebar').removeClass('in');
		$('body').css('overflow', 'auto');
		$('#feBackdrop').css('display', 'none');
	});

	$('#feCategorySidebarOpen, #feFooterMbCategory').on('click', function (e) {
		$('#feCategorySidebar').addClass('in');
		$('body').css('overflow', 'hidden');
		$('#feBackdrop').css('display', 'block');
	});

	$('#feShoppingCartClose').on('click', function (e) {
		$('#feShoppingCart').removeClass('in');
		$('body').css('overflow', 'auto');
		$('#feBackdrop').css('display', 'none');
	});

	$('#feShoppingCartOpen, #feFooterMbCart').on('click', function (e) {
		$('body').css('overflow', 'hidden');
		$('#feShoppingCart').addClass('in');
		$('#feBackdrop').css('display', 'block');
	});
});
