function vw_clothing_store_menu_open_nav() {
	window.vw_clothing_store_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function vw_clothing_store_menu_close_nav() {
	window.vw_clothing_store_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.vw_clothing_store_currentfocus=null;
  	vw_clothing_store_checkfocusdElement();
	var vw_clothing_store_body = document.querySelector('body');
	vw_clothing_store_body.addEventListener('keyup', vw_clothing_store_check_tab_press);
	var vw_clothing_store_gotoHome = false;
	var vw_clothing_store_gotoClose = false;
	window.vw_clothing_store_responsiveMenu=false;
 	function vw_clothing_store_checkfocusdElement(){
	 	if(window.vw_clothing_store_currentfocus=document.activeElement.className){
		 	window.vw_clothing_store_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_clothing_store_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_clothing_store_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_clothing_store_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_clothing_store_gotoHome = true;
			} else {
				vw_clothing_store_gotoHome = false;
			}

		}else{

			if(window.vw_clothing_store_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_clothing_store_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_clothing_store_responsiveMenu){
				if(vw_clothing_store_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_clothing_store_gotoClose = true;
				} else {
					vw_clothing_store_gotoClose = false;
				}

			}else{

			if(window.vw_clothing_store_responsiveMenu){
			}}}}
		}
	 	vw_clothing_store_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  jQuery(".product-tab.nav-tabs a").click(function(){
	jQuery(this).tab('show');
  });
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

jQuery(document).ready(function () {
  function vw_clothing_store_search_loop_focus(element) {
	  var vw_clothing_store_focus = element.find('select, input, textarea, button, a[href]');
	  var vw_clothing_store_firstFocus = vw_clothing_store_focus[0];
	  var vw_clothing_store_lastFocus = vw_clothing_store_focus[vw_clothing_store_focus.length - 1];
	  var KEYCODE_TAB = 9;

	  element.on('keydown', function vw_clothing_store_search_loop_focus(e) {
	    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	    if (!isTabPressed) {
	      return;
	    }

	    if ( e.shiftKey ) /* shift + tab */ {
	      if (document.activeElement === vw_clothing_store_firstFocus) {
	        vw_clothing_store_lastFocus.focus();
	          e.preventDefault();
	        }
	      } else /* tab */ {
	      if (document.activeElement === vw_clothing_store_lastFocus) {
	        vw_clothing_store_firstFocus.focus();
	          e.preventDefault();
	        }
	      }
	  });
	}
	jQuery('.search-box span a').click(function(){
    jQuery(".serach_outer").slideDown(1000);
  	vw_clothing_store_search_loop_focus(jQuery('.serach_outer'));
  });
  jQuery('.closepop a').click(function(){
    jQuery(".serach_outer").slideUp(1000);
  });
});

jQuery('#banner .slider-for').slick({
  slidesToShow: 1,
  infinite: true,
  arrows: true,
  fade: true,
  asNavFor: '.slider-nav',

});
jQuery('#banner .slider-nav').slick({
  slidesToShow: 3,
  infinite: true,
  centerPadding: '0px',
  arrows: false,
  slidesToScroll: 1,
  asNavFor: '#banner .slider-for',
  prevArrow: '<i class="fa fa-chevron-left"></i>',
  nextArrow: '<i class="fa fa-chevron-right"></i>',
  dots: true,
  focusOnSelect: true,
  responsive: [
  {
    breakpoint: 1024,
    settings: {
    slidesToShow: 1,
  }
},
  {
    breakpoint: 1200,
    settings: {
    slidesToShow: 2,
  }
  }
]
})

// product

jQuery('#product-section .slick').slick({
	dots: false,
	infinite: true,
	autoplay: true,
  autoplaySpeed: 2000,
	speed: 300,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	slidesToScroll: 1,
	prevArrow: '<i class="fa fa-chevron-left"></i>',
	nextArrow: '<i class="fa fa-chevron-right"></i>',
	dots: true,
	responsive: [
	  {
	    breakpoint: 1024,
	    settings: {
	      slidesToShow: 1,
	      slidesToScroll: 1,
	      infinite: true,
	      dots: false
	    }
	  },
	  {
	    breakpoint: 600,
	    settings: {
	      slidesToShow: 1,
	      slidesToScroll: 1
	    }
	  },
	  {
	    breakpoint: 480,
	    settings: {
	      slidesToShow: 1,
	      slidesToScroll: 1
	    }
	  }
	]
});

jQuery(document).ready(function(){
  var vw_clothing_store_mydate =jQuery('.date').val();
	jQuery(".countdown").each(function(){
    	vw_clothing_store_countdown(jQuery(this),vw_clothing_store_mydate);
	});
});

function vw_clothing_store_countdown($timer,vw_clothing_store_mydate){
    // Set the date we're counting down to
    var vw_clothing_store_countDownDate = new Date(vw_clothing_store_mydate).getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get todays date and time
        var now = new Date().getTime();
        // Find the distance between now an the count down date
        var distance = vw_clothing_store_countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Output the result in an element with id="timer"
        $timer.html( "<div class='numbers'><span class='count'>" + days + "</span><br><span class='text'>Days</span>" + "</div>" + "   " +"<div class='numbers'><span class='count'>" + hours + "</span><br><span class='text'>Hrs</span>" + "</div>" + "   " + "<div class='numbers'><span class='count'>" + minutes + "</span><br><span class='text'>Mins</span>" + "</div>" + "   " + "<div class='numbers'><span class='count'>" + seconds + "</span><br><span class='text'>Sec</spn" + "</div>");

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            $timer.html("EXPIRED");
        }
    }, 1000);
}

jQuery('document').ready(function(){
  var owl = jQuery('.pro-sec .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    loop: false,
    dots:false,
    navText : ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});
