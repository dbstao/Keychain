/*===============================================
COUNTDOWN
=============================================== */

jQuery(document).ready(function($) {
  // Function to update countdown timer
  function updateCountdown(targetDate) {
    const newYearsDate = new Date(targetDate);

    const updateDisplay = () => {
      const currentDate = new Date();
      const totalSeconds = (newYearsDate - currentDate) / 1000;

      const days = Math.floor(Math.abs(totalSeconds / 3600 / 24));
      const hours = Math.floor(Math.abs(totalSeconds / 3600) % 24);
      const minutes = Math.floor(Math.abs(totalSeconds / 60) % 60);
      const seconds = Math.floor(Math.abs(totalSeconds) % 60);

      // Update HTML elements with countdown values
      $('#days').text(days);
      $('#hours').text(hours);
      $('#mins').text(minutes);
      $('#seconds').text(seconds);
    };

    // Initial call to update countdown
    updateDisplay();

    // Update countdown every second
    setInterval(updateDisplay, 1000);
  }

  // Get target date from hidden input field
  const targetDate = $('#new-year-date').val();

  // Call updateCountdown with target date
  if (targetDate) {
    updateCountdown(targetDate);
  }
});

/* ===============================================
	OWL CAROUSEL SLIDER
=============================================== */
jQuery('document').ready(function(){
  jQuery(function($) {

      //slider
      var carousel_thumbs = jQuery("#carousel-thumbs").owlCarousel({
          margin:20,
          autoplay:true,
          autoplayTimeout:4000,
          autoplayHoverPause:true,
          loop: true,
          nav:false,
          dots: false,
          slide:1,
          responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 2
          }
        },
          navText : ["",""]
        
      });

      $('#carousel-thumbs .owl-item.active:first').addClass('review-center');

      $('#carousel-thumbs .owl-item.active:first').addClass('review-center');

      carousel_thumbs.on('changed.owl.carousel', function(event) {
       
        $('#carousel-thumbs .owl-item').removeClass('review-center');

        setTimeout(function(){
          $('#carousel-thumbs .owl-item.active').first().addClass('review-center');
          },50)
       
        $('#carouselExampleInterval [data-bs-slide="next"]').trigger('click');
      });


      $(document).on('click', '.owl-item>div', function() {
        var $speed = 300;  // in ms,
      });

    $('button#prev').click(function(){
      carousel_thumbs.trigger('#carousel-thumbs button.owl-prev');
      $('#carousel-thumbs .owl-item').removeClass('review-center');
      $('#carousel-thumbs .owl-item.active:first').addClass('review-center');
    });
     
    $('button#next').click(function(){
      carousel_thumbs.trigger('#carousel-thumbs button.owl-next');
      $('#carousel-thumbs .owl-item').removeClass('review-center');
      $('#carousel-thumbs .owl-item.active:first').addClass('review-center');
    });

  });
});

/* ===============================================
  OWL CAROUSEL TRENDING PRODUCTS
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#hot_products .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/* ===============================================
  OPEN CLOSE Menu
============================================= */

function cloth_rental_shop_open_menu() {
  jQuery('button.menu-toggle').addClass('close-panal');
  setTimeout(function(){
    jQuery('nav#main-menu').show();
  }, 100);

  return false;
}

jQuery( "button.menu-toggle").on("click", cloth_rental_shop_open_menu);

function cloth_rental_shop_close_menu() {
  jQuery('button.close-menu').removeClass('close-panal');
  jQuery('nav#main-menu').hide();
}

jQuery( "button.close-menu").on("click", cloth_rental_shop_close_menu);

/* ===============================================
  TRAP TAB FOCUS ON MODAL MENU
============================================= */

jQuery('button.close-menu').on('keydown', function (e) {
  if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('button.menu-toggle').focus();
  }
});

/* ===============================================
  Scroll Top //
============================================= */

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
      jQuery('.scroll-up').fadeIn();
  } else {
      jQuery('.scroll-up').fadeOut();
  }
});

jQuery('a[href="#tobottom"]').click(function () {
  jQuery('html, body').animate({scrollTop: 0}, 'slow');
  return false;
});

/* ===============================================
  STICKY-HEADER
============================================= */

jQuery(window).scroll(function () {
  var sticky = jQuery('.sticky-header'),
  scroll = jQuery(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed-header');
  else sticky.removeClass('fixed-header');
});

  /*===============================================
 PRELOADER
=============================================== */

jQuery('document').ready(function($){
  setTimeout(function () {
  jQuery(".cssloader").fadeOut("slow");
},1000);
});