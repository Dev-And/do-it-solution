$(function() {

	if ( $('.main-question').length ) {
		var iframe = document.getElementById('video');

		// $f == Froogaloop
		var player = $f(iframe);

		// bind events
		var playButton = document.getElementById("play");
			playButton.addEventListener("click", function() {
			player.api("play");
		});

		var pauseButton = document.getElementById("pause");
			pauseButton.addEventListener("click", function() {
			player.api("pause");
		});
	}

	// Cookies
	if ($.cookie('test_status') == '1') {

		$('.question').addClass('hidden');
		$('.question-overlay').addClass('hidden');
	} else {
		$('.question').fadeIn(200);
		$('.question-overlay').fadeIn(200);
	}


	// Question
	$('.question .no').on('click', function() {
		$('.question').fadeOut(100);
		$('.question-overlay').fadeOut(100);

		// Cookie
		var date = new Date();
		var minutes = 60 * 24 * 1;
	    var d = date.getTime() + (minutes * 60 * 1000);
	    date.setTime(d);

		$.cookie('test_status', '1', { expires: date});
	});

	$('.question .yes').on('click', function() {
		$('.question').fadeOut(100);
		$('.video').fadeIn(100);

		// Cookie
		var date = new Date();
		var minutes = 60 * 24 * 1;
	    var d = date.getTime() + (minutes * 60 * 1000);
	    date.setTime(d);

		$.cookie('test_status', '1', { expires: date});
	});

	$('.question .yes').on('click', function() {
		$('.question').fadeOut(100);
		$('.video').fadeIn(100);
	});

	$('.v-close').on('click', function() {
		$('.question-overlay').fadeOut(100);
		$('.video').fadeOut(100);
	});

	// What we cant
	$(".what-we-can .offers li").on("mouseenter", function() {
        $('li').removeClass("active");
        $(this).addClass("active");
    });

	// Mobile menu
	$('.m-trigger').on('click', function() {
		$('.m-menu').addClass('visible');
	});

	$('.m-close').on('click', function() {
		$('.m-menu').removeClass('visible');
	});

	// Statistic counters
	$('.counter').counterUp({
		delay: 10,
		time: 1500
	});

	// Feed slider
	$('.feed-slider').owlCarousel({
	    lazyLoad: false,
	    loop: true,
	    margin: 10,
	    autoplay: true,
	    autoplayTimeout: 3000,
	    responsive:{
	        0:{
	            items: 1,
	            nav: true
	        },
	        600:{
	            items: 1,
	            nav: false
	        },
	        1000:{
	            items: 1,
	            nav: true,
	            loop: true
	        }
	    }
	});


	// Ajax News Load
	$.ajaxSetup({cache:false});

    $(".partners-link").click(function() {
    	$('.modal-overlay').fadeIn(200);
    	$('.partner-modal').fadeIn(200);

    	
        var post_link = $(this).attr("href");

        $(".partner-content").html("content loading");
        $(".partner-content").load(post_link);
    	return false;
    });

    $('body').on('click', '.partners-close', function() {
    	console.log('click');
    	$('.modal-overlay').fadeOut(200);
    	$('.partner-modal').fadeOut(200);
    });

    $('#modal-close').on('click', function() {
    	$('#modal-overlay').fadeOut(200);
    	$('.modal').fadeOut(200);
    });


	// Form Trigger
	$('.form-trigger').on('click', function() {
		$('.modal-overlay').fadeIn(200);
		$('.modal').fadeIn(200);
	});

	$('.close').click(function() {
		$('.modal').fadeOut(100);
		$('.modal-overlay').fadeOut(200);
	});

	$(document).keydown(function(e) {
        var code = e.keyCode || e.which;
        if (code == '27') {
			$('.modal-overlay').fadeOut(100);
            $('.modal').fadeOut(100);

            $('.modules-overlay').fadeOut(200);
			$('.module-modal').fadeOut(200);
			$('.partner-modal').fadeOut(200);
        }
    });

	// Work Trigger
	$('.w-trigger').on('click', function() {
		$('.modal-overlay').fadeIn(200);
		$('.work-details').fadeIn(200);
	});

	$('.close').click(function() {
		$('.work-details').fadeOut(100);
		$('.modal-overlay').fadeOut(200);
	});

	$(document).keydown(function(e) {
        var code = e.keyCode || e.which;
        if (code == '27') {
			$('.modal-overlay').fadeOut(100);
            $('.work-details').fadeOut(100);

            $('.question-overlay').fadeOut(100);
			$('.video').fadeOut(100);

			if ($('.video').length) {
				player.api("pause");
			}
        }
    });

	// Vacancies
	$(".v-trigger").on("click", function() {
        $(".v-trigger").removeClass("active");
        $(this).addClass("active");
    });

    // Vacancies
	$(".works-filter li").on("click", function() {
        $('li').removeClass("active");
        $(this).addClass("active");
    });

	// Map
	if ( $('#map').length ) {
		function initialize() {
		    var latlng = new google.maps.LatLng(46.472932, 30.741017);
		    var myOptions = {
		        zoom: 2,
		        scrollwheel: false,
		        navigationControl: false,
	    		mapTypeControl: false,
		        center: latlng,
		        mapTypeId: google.maps.MapTypeId.TERRAIN
		    };

		    var map = new google.maps.Map(document.getElementById("map"),
		            myOptions);

		    var image = 'http://do-it.co/wp-content/themes/doit/img/marker.png';
			var myLatLng = new google.maps.LatLng(46.472932, 30.741017);
			var beachMarker = new google.maps.Marker({
				position: latlng,
				map: map,
				icon: image
			});

		}
		google.maps.event.addDomListener(window, "load", initialize);
	}

	$('.scroll').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});

	// Retrotax
	$(window).scroll(function(event) {

		if($(document).scrollTop() > 139) {
			$('.retrotax .header').addClass('fixed');
		} else {
			$('.retrotax .header').removeClass('fixed');
		}

	});
			
	// Modal
	$('.modal-trigger').on('click', function() {
		$('.modules-overlay').fadeIn(200);
	});
	
	// Modal Close
	$('.module-modal-close').on('click', function() {
		$('.modules-overlay').fadeOut(200);
		$('.module-modal').fadeOut(200);
	});

	// Modal 1
	$('.m1').on('click', function() {
		$('.modal1').fadeIn(200);
	});
	// Modal 2
	$('.m2').on('click', function() {
		$('.modal2').fadeIn(200);
	});
	// Modal 2
	$('.m3').on('click', function() {
		$('.modal3').fadeIn(200);
	});
	// Modal 2
	$('.m4').on('click', function() {
		$('.modal4').fadeIn(200);
	});
	// Modal 2
	$('.m5').on('click', function() {
		$('.modal5').fadeIn(200);
	});


	// Validation
    $.fn.wpcf7NotValidTip = function(message) {
        return this.each(function() {
            var into = $(this);

            $theParent = into.parent("span");
            $parentInp = $theParent.parent("input");

            into.find(':input').css('border-color', '#ff0000');

            into.find(':input').mouseover(function() {
                into.find(':input').css('border-color','#cccccc');
            });
            into.find(':input').focus(function() {
                into.find(':input').css('border-color','#cccccc');
            });
        });
    };

});	

