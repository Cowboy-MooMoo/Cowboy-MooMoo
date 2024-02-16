//header scroll
if($('.header').length){
	$(window).on('load scroll resize',function(){
		var headerHeight = $('.header').outerHeight();
		var bannerHeight = $('.banner').outerHeight();
		var scrollHeight = bannerHeight - headerHeight;

		if($(this).scrollTop() > scrollHeight){
			$('.header').addClass('scroll');
		}
		else{
			$('.header').removeClass('scroll');
		}
	});
}



//首頁 banner 上方高度 & scrollDown 點擊滑動
if($('.banner').length){
	var headerHeight = $(".header").outerHeight();
	$(".banner").css("padding-top", headerHeight);

	$('.scrollDown').click(function(){
		$('html, body').animate({scrollTop: $('section[class^="block_"]').offset().top}, 'slow');
	});
}



//企業理念錨點
if($('.belief_anchor').length){
	$(window).on('load scroll resize',function(){
		var targetPos1 = $('#anchor_water').offset().top - $(window).innerHeight()*.5;
		var targetPos2 = $('#anchor_home').offset().top - $(window).innerHeight()*.5;
		var targetPos3 = $('#anchor_environment').offset().top - $(window).innerHeight()*.5;
		var targetPos4 = $('#anchor_society').offset().top - $(window).innerHeight()*.5;
	    var scroll = $(window).scrollTop();

	    if(scroll >= targetPos1 && scroll < targetPos2){
	        $('.anchor_water').addClass('in');
	    }
	    else {
	    	$('.anchor_water').removeClass('in');
	    }

	    if(scroll >= targetPos2 && scroll < targetPos3){
	        $('.anchor_home').addClass('in');
	    }
	    else {
	    	$('.anchor_home').removeClass('in');
	    }

	    if(scroll >= targetPos3 && scroll < targetPos4){
	        $('.anchor_environment').addClass('in');
	    }
	    else {
	    	$('.anchor_environment').removeClass('in');
	    }

	    if(scroll >= targetPos4){
	        $('.anchor_society').addClass('in');
	    }
	    else {
	    	$('.anchor_society').removeClass('in');
	    }
	});

	$('a[href*="#anchor"]').click(function(event){
		if(location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname){
			
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			
			if(target.length){
				event.preventDefault();
				$('html, body').animate({scrollTop: target.offset().top}, 1000, function(){
					var $target = $(target);
					$target.focus();
					if($target.is(":focus")){
						return false;
					}
					else{
						$target.attr('tabindex','-1');
						$target.focus();
					};
				});
			}
		}
	});
}



//客戶好評瀑布流
if($('.waterfall').length){
	$(window).on('load scroll resize',function(){
		$('.galleryImg').each(function(){
			var titleHeight = $(this).siblings('.galleryTitle').outerHeight(true);
			var infoHeight = $(this).siblings('.galleryInfo').outerHeight(true);
			var statusHeight = $(this).siblings('.galleryStatus').outerHeight(true);
			var minusHeight = titleHeight + infoHeight + statusHeight;
			var theHeight = 'calc(100% - ' + minusHeight + 'px)';

			$(this).css('height', theHeight);
		});
	});

	$('.itemCover').each(function(){
		$(this).click(function(){
			$(this).siblings('.lightgallery').children('a:first-child').children('img').click();

			//點擊次數計算：抓取id的數字，用ajax post出去
			// var id = $(this).siblings('.lightgallery').attr('id');

			// if(id.indexOf("lightgallery") > -1){
			// 	var str = id.split('lightgallery');
			// 	id = str[1];
			// }
			
			// $.ajax({
			// 	type: "POST",
			// 	data: {
			// 		'id': id,
			// 	},
			// 	url: 'album_tw.php'
			// });
		});
	});

	// lazyload();
}



//當直接用網址進入某本相簿裡的時候，抓取值丟入thumbnails
// if($('.waterfall').length){
// 	var hash = window.location.hash;

// 	if(hash != ''){
// 		var ary = hash.split('#lg=');
// 		var lg = ary[1].split('&slide=');
// 		var length = $('#lightgallery' + lg[0] + ' > a').length;

// 		$(document).ready(function(){
// 			for(var x = 1; x <= length; x++){
// 				var img = $('#lightgallery' + lg[0] + ' > a:nth-child(' + x + ') > img').attr('data-src');

// 				$('.lg-thumb-item:nth-child(' + x + ') > img').attr('src', img);
// 			}
// 		});
// 	}
// }



//全台體驗、選購指南 左側選單fixed
if($('.location').length){
	$(window).on('load scroll resize',function(){
		var leftmenuPos = $('.storeLeft').offset().top - 60;

		if($(this).scrollTop() > leftmenuPos){
			$('.leftmenu').addClass('fixed');
		}
		else{
			$('.leftmenu').removeClass('fixed');
		}
	});
}

if($('.guide').length){
	$(window).on('load scroll resize',function(){
		var leftmenuPos = $('.qaLeft').offset().top - 60;

		if($(this).scrollTop() > leftmenuPos){
			$('.leftmenu').addClass('fixed');
		}
		else{
			$('.leftmenu').removeClass('fixed');
		}
	});
}



//社會企業社群分享
if($('.articleShare').length){
	$('.switcher').each(function(){
		$(this).click(function(){
			$(this).children('img').toggleClass('open');
			$(this).siblings('.social').children('div').toggleClass('open');
		});
	});
}

if($('.dutyList').length){
	$('.copy').each(function(){
		$(this).click(function(){
			var url = window.location.origin;
			var href = $(this).parents('.articleShare').siblings('.articleItem').attr('href');
			var value = url + '/' + href;
			$('#copyUrl').attr('value',value);

			setTimeout(copytheurl, 500);
		});
	});

	function copytheurl(){
		var copyUrl = document.getElementById("copyUrl");
		copyUrl.select();
		document.execCommand("copy");
		alert("已複製到剪貼簿");
	}
}

if($('.dutyDetail').length){
	$('.copy').each(function(){
		$(this).click(function(){
			var url = window.location.href;
			$('#copyUrl').attr('value',url);

			setTimeout(copytheurl, 500);
		});
	});

	function copytheurl(){
		var copyUrl = document.getElementById("copyUrl");
		copyUrl.select();
		document.execCommand("copy");
		alert("已複製到剪貼簿");
	}
}



//選購指南
if($('.accordion').length){
	$('.question').each(function(){
		$(this).click(function(){
			if($(this).parent('.qaItem').hasClass('active')){
				$(this).siblings('.answer').css('height', '0');
				$(this).parent('.qaItem').removeClass('active');
			}
			else{
				var answerHeight = $(this).siblings('.answer').children('div').outerHeight();

				$(this).siblings('.answer').css('height', answerHeight);
				$(this).parent('.qaItem').siblings().children('.answer').css('height', '0');

				$(this).parent('.qaItem').addClass('active');
				$(this).parent('.qaItem').siblings().removeClass('active');
			}
		});
	});
}



//文字超過高度變...
if($('.waterfall').length){
	$(".galleryTitle").each(function(i){
		var divH = $(this).height();
		var $p = $("span", $(this)).eq(0);
		while ($p.outerHeight() > divH) {
			$p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
		};
	});

	$(".galleryInfo").each(function(i){
		var divH = $(this).height();
		var $p = $("span", $(this)).eq(0);
		while ($p.outerHeight() > divH) {
			$p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
		};
	});
}

if($('.articleList').length){
	$(".topTwoTitle").each(function(i){
		var divH = $(this).height();
		var $p = $("span", $(this)).eq(0);
		while ($p.outerHeight() > divH) {
			$p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
		};
	});

	$(".articleTitle").each(function(i){
		var divH = $(this).height();
		var $p = $("span", $(this)).eq(0);
		while ($p.outerHeight() > divH) {
			$p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
		};
	});

	$(".articleDes").each(function(i){
		var divH = $(this).height();
		var $p = $("span", $(this)).eq(0);
		while ($p.outerHeight() > divH) {
			$p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
		};
	});

	$(".newsTitle").each(function(i){
		var divH = $(this).height();
		var $p = $("span", $(this)).eq(0);
		while ($p.outerHeight() > divH) {
			$p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
		};
	});

	$(".newsDes").each(function(i){
		var divH = $(this).height();
		var $p = $("span", $(this)).eq(0);
		while ($p.outerHeight() > divH) {
			$p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
		};
	});
}



//contactForm
if($('.contactForm').length){
	$('.radio').click(function(){
		$(this).addClass('checked');
		$(this).siblings('.radio').removeClass('checked');
	});

	$('.check').click(function(){
		$(this).toggleClass('checked');
	});

	$('.value').change(function() {
		var filename = $(this).val().replace(/C:\\fakepath\\/i, '');

		if(filename == ''){
			$(this).parents('.btnType1_2').siblings('.valuetarget').text('未選擇任何檔案');
		}
		else{
			$(this).parents('.btnType1_2').siblings('.valuetarget').text(filename);
		}
	});

	$('.contactForm .submit').click(function(){
		$(this).siblings('input').click();
	});
}



//searchForm popbox
if($('.searchForm').length){
	$('.searchFormPop').click(function(){
		$('.searchForm').addClass('open');
	});
	$(".searchForm .closeBtn").click(function(){
        $(".searchForm").removeClass('open');
    });
}



//fontSizing
if($('.articleList').length){
	var fontSize = parseInt($('.fontSizing').css('font-size'));
	var fontSizeMin = fontSize;
	var fontSizeMax = fontSize + 4;
	var shellHeight =  parseInt($('.fontSizing').parent().css('height'));

	$('.font_big').click(function(){
		if(fontSize < fontSizeMax){
			fontSize = fontSize + 2;
			shellHeight = shellHeight + 8;
			$('.fontSizing').css('font-size', fontSize);
			$('.fontSizing').parent().css('height', shellHeight);
		}
	});

	$('.font_small').click(function(){
		if(fontSize > fontSizeMin){
			fontSize = fontSize - 2;
			shellHeight = shellHeight - 8;
			$('.fontSizing').css('font-size', fontSize);
			$('.fontSizing').parent().css('height', shellHeight);
		}
	});
}

if($('body.comments').length || $('body.guide').length){
	var fontSize = parseInt($('.fontSizing').css('font-size'));
	var fontSizeMin = fontSize;
	var fontSizeMax = fontSize + 4;

	$('.font_big').click(function(){
		if(fontSize < fontSizeMax){
			fontSize = fontSize + 2;
			$('.fontSizing').css('font-size', fontSize);
		}
	});

	$('.font_small').click(function(){
		if(fontSize > fontSizeMin){
			fontSize = fontSize - 2;
			$('.fontSizing').css('font-size', fontSize);
		}
	});
}



//gotop
if($('.gotop').length){
	$(window).on('load scroll resize',function(){
		var navBarHeight = $('.navBar').outerHeight();
		var bannerHeight = $('.banner').outerHeight();
		var scrollHeight = bannerHeight - navBarHeight;

		$(window).scroll(function(){    
		    var scroll = $(window).scrollTop();

		    if (scroll >= scrollHeight) {
		        $(".gotop").addClass("show");
		    } else {
		        $(".gotop").removeClass("show");
		    }
		});
	});

	$('.gotop').click(function(){
	    $('html, body').animate({scrollTop: 0}, 'slow');
	    return false;
	});
}



//preord
if($('.preord').length){
	$('.preord > div:nth-child(1)').click(function(){
		$('.preord').toggleClass('open');
	});
	$('.preord .preordClose').click(function(){
		$('.preord').removeClass('open');
	});
}



//pageloading (for hiding)
if($('.pageLoading').length){
	$(window).on("load", function(){
		$('.pageLoading').fadeOut();
    });
}



//scroll animation 自訂
if($(".block_slogan").length){
	$(window).on('load scroll resize',function(){
		$('.block_slogan').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });
	});
}

if($(".block_book").length){
	$(window).on('load scroll resize',function(){
		$('.book_content > div').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });
	});
}

if($(".block_floatingBalls").length){
	$(window).on('load scroll resize',function(){
		$('.ball').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });

	    $('.ballsInfo').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });
	});
}

if($(".block_cards").length){
	$(window).on('load scroll resize',function(){
		$('.card').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });
	});
}

if($(".overview_area").length){
	$(window).on('load scroll resize',function(){
		var scroll = $(window).scrollTop();

		$('.milestone li').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        if(scroll >= targetPos){
	            $(this).addClass('animate');
	        }
	    });
	});
}

if($(".belief_area").length){
	$(window).on('load scroll resize',function(){
		$('.belief_img').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });

	    $('.belief_content').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });
	});
}

if($(".slogan").length){
	$(window).on('load scroll resize',function(){
		$('.sloganText').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });
	});
}

if($(".seriesList").length){
	$(window).on('load scroll resize',function(){
		$('.seriesImg').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });

	    $('.seriesInfo > div').each(function(){
	    	var targetPos = $(this).offset().top - $(window).innerHeight()*.85;
	        var scroll = $(window).scrollTop();    
	        if(scroll >= targetPos){
	            $(this).addClass('in');
	        }
	    });
	});
}