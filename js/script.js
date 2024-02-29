$(document).ready(function(){
	//space sound
	$('#space').YTPlayer();
	$('.toggle_volume_space').hover(function(){
		$('.space_tip').addClass('show');
	}, function(){
		$('.space_tip').removeClass('show');
	});
	$('.toggle_volume_space').on('click', function(){
		$('#space').YTPToggleVolume();
		$('.space_on, .space_off').toggle();
	});

	//coding sound
	$('#coding_video').YTPlayer();
	$('.toggle_volume_coding').hover(function(){
		$('.coding_tip').addClass('show');
	}, function(){
		$('.coding_tip').removeClass('show');
	});
	$('.toggle_volume_coding').on('click', function(){
		$('#coding_video').YTPToggleVolume();
		$('.coding_on, .coding_off').toggle();
	});

	//corner console
	$('.corner_console a').hover(function(){
		$('.corner_console').addClass('show');
		$('.corner_console img:nth-child(2)').addClass('show');
	}, function(){
		$('.corner_console').removeClass('show');
		$('.corner_console img:nth-child(2)').removeClass('show');
	});
	$('.corner_console a').on('click', function(){
		$('.corner_console img:nth-child(2)').addClass('active');
		$('.profile').addClass('active');
		// $('.bridge_header, .toggle_volume, .get_in_touch').hide();
	});

	//console close
	$('.console.close .btn').on('click', function(){
		$('.corner_console img:nth-child(2)').removeClass('active');
		$('.dashboard').removeClass('active');
		// $('.bridge_header, .toggle_volume, .get_in_touch').show();
	});

	//get_in_touch
	$('.info_btn').on('click', function(){
		$('body').addClass('no_overflow');
		$('.summon_ways').addClass('active');
	});
	$('.summon_exit').on('click', function(){
		$('body').removeClass('no_overflow');
		$('.summon_ways').removeClass('active');
	});

	//guide anchor
	$('.guide .guide_inner a').on('click', function(){
		if(location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname){
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

			if(target.length){
				event.preventDefault();

				$('html, body').animate({scrollTop: target.offset().top}, 300, function(){
					var $target = $(target);
					$target.focus();

					if($target.is(":focus")){
						return false;
					} else {
						$target.attr('tabindex','-1');
						$target.focus();
					};
				});
			}
		}
	});

	//work section
	$('.work_age .age').on('click', function(){
		let age = $(this).data('age');

		$(this).addClass('active');
		$(this).siblings('.age').removeClass('active');

		$('.work_list[data-age="' + age + '"]').addClass('active');
		$('.work_list:not([data-age="' + age + '"])').removeClass('active');
	});


	//sound effect setting
	if(window.matchMedia('(min-width: 1025px)').matches){
		$('.mouseover').mouseenter(function(){
			let mouseover = new Audio('sound/over.wav');
			mouseover.play();
		});
	}

	$('.mousebutton').on('click', function(){
		let mousebutton = new Audio('sound/button.wav');
		mousebutton.play();
	});

	$('.mousedown').on('click', function(){
		let mousedown = new Audio('sound/down.wav');
		mousedown.play();
	});

	$('.mousedownin').on('click', function(){ //total 1.3s
		let mousedown = new Audio('sound/down.wav'); //0.4s
		let mousein = new Audio('sound/swishin.wav');
		let mouselock = new Audio('sound/swishlock.wav');
		mousedown.play();
		mousedown.addEventListener('ended', function(){
			mousein.play();
		});
		mousein.addEventListener('ended', function(){
			mouselock.play();
		});
	});

	$('.mousedownout').on('click', function(){ //total 0.6s
		let mousedown = new Audio('sound/down.wav'); //0.3s
		let mouseout = new Audio('sound/swishout.wav');
		mousedown.play();
		mousedown.addEventListener('ended', function(){
			mouseout.play();
		});
	});
});