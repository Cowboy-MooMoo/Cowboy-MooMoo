//首頁 banner slick
if($('.banner').length){
	$('.slickBanner').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: true,
	    fade: true,
	    speed: 1000,
	    autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
	    prevArrow:'<span class="slick-prev slick-arrow"><i class="fa fa-circle-o" aria-hidden="true"></i></span>',
		nextArrow:'<span class="slick-next slick-arrow"><i class="fa fa-circle-o" aria-hidden="true"></i></span>'
	});

	if(window.matchMedia('(max-width: 1024px)').matches){
		$('.slickBanner').slick('slickRemove',0);
	}
}



//首頁 YTPlayer banner
if($('.slickBanner').length){
	if(window.matchMedia('(min-width: 1025px)').matches){
	    $('#customVideo').YTPlayer();

	    $("#customVideo").on("YTPStart",function(e){
	    	$('.slickBanner').slick('slickPause');

	    	setTimeout(disappear, 20000);
	    });

	    $("#customVideo").on("YTPEnd",function(e){
	    	$('.slickBanner').slick('slickNext');
	    	$('.slickBanner').slick('slickPlay');
	    });

		$('.slickBanner').on('beforeChange', function(event, slick, currentSlide, nextSlide){
			if(nextSlide == 0){
				$('#customVideo').YTPPlay();
				$('.slickBanner').slick('slickPause');
			} else {
				$('#customVideo').YTPPause();
				$('.slickBanner').slick('slickPlay');
			}
		});

		function disappear(){
			$('#videoBanner .video_hover').fadeOut();
		}
	}
}



//首頁 block_exp slick
if($('.block_exp').length){
	$('.slick_exp').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    dots: true,
	    fade: true,
	    speed: 1000,
	    autoplay: true,
        autoplaySpeed: 6000
	});
}



//首頁 block_book slick
if($('.block_book').length){
	$('.slick_book').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    dots: true,
	    fade: true,
	    speed: 1000,
	    autoplay: true,
        autoplaySpeed: 6000
	});

	$('.slick_book').append('<img class="book_line" src="images/book_line.svg"><img class="books" src="images/books.svg">');
}



//書蟲房 店內特色 slickBooks slick
if($('[class^="slickBooks2"]').length){
	$('.slickBooks2_1').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    dots: false,
	    fade: true,
	    speed: 1000,
	    autoplay: true,
        autoplaySpeed: 6000
	});

	$('.slickBooks2_2').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    dots: false,
	    fade: true,
	    speed: 1000,
	    autoplay: true,
        autoplaySpeed: 6000
	});

	$('.slickBooks2_3').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    dots: false,
	    fade: true,
	    speed: 1000,
	    autoplay: true,
        autoplaySpeed: 6000
	});
}



//lightgallery
if($('.lightgallery').length){
	$('.lightgallery').each(function(){
		var galleryID = $(this).attr('id');
		var ary = galleryID.split('lightgallery');
		lightGallery(document.getElementById(galleryID), {
			galleryId: ary[1]
		});
	});
}



//swiper
if($('.block_swiper').length){
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 'auto',
		spaceBetween: 11,
		freeMode: true,
		autoplay: {
			delay: 6000,
		},
		navigation: {
        	prevEl: '.swiper-button-prev',
        	nextEl: '.swiper-button-next',
      	},
		scrollbar: {
			el: '.swiper-scrollbar',
			hide: false,
			draggable: true
		},
	});

	$('.swiper-button-prev, .swiper-button-next').append('<i class="fa fa-circle-o" aria-hidden="true"></i>');

	$('.block_swiper').hover(function(){
		swiper.autoplay.stop();
	}, function(){
		swiper.autoplay.start();
	});
}



//scroll moving
if($(".scrollMove").length){
	$(".scrollMove").each(function(){
		$(this).scrollAnimate({animate:'scrollMove'});
	});
}