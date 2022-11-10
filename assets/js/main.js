$(function() {
    "use strict";

	
    AOS.init(), $(".bt-top").on("click", function(o) {
        o.preventDefault(), $("html,body").animate({
            scrollTop: 0
        }, 700)
    })

   

	// frontend
	$("#frontend").owlCarousel({
		autoplay:true,
		autoplayTimeout:8000,
    	autoplayHoverPause:true,
		nav: !0,
		dots: false,
		items: 1,
		center: !0,
		loop: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		
	})
	
	

    /****---- Portfolio End ----****/
	
	/****----- Counter ---------*/
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});

	$(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });

	 $(document).ready(function() {
            setTimeout(openColorBox, 20000);

            function openColorBox() {
                $("#getstarted").modal('show');
            }
        });
	
});