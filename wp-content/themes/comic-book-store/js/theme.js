// preloader
jQuery(window).on('load', function() {
  jQuery('#status').fadeOut();
  jQuery('#preloader').delay(350).fadeOut('slow');
  jQuery('body').delay(350).css({'overflow':'visible'});
})

// toggle button
jQuery(function($){
  $( '.toggle-nav button' ).click( function(e){
    $( 'body' ).toggleClass( 'show-main-menu' );
    var element = $( '.sidenav' );
    comic_book_store_trapFocus( element );
  });

  $( '.close-button' ).click( function(e){
    $( '.toggle-nav button' ).click();
    $( '.toggle-nav button' ).focus();
  });
  $( document ).on( 'keyup',function(evt) {
    if ( $( 'body' ).hasClass( 'show-main-menu' ) && evt.keyCode == 27 ) {
      $( '.toggle-nav button' ).click();
      $( '.toggle-nav button' ).focus();
    }
  });
});

function comic_book_store_trapFocus( element, namespace ) {
  var comic_book_store_focusableEls = element.find( 'a, button' );
  var comic_book_store_firstFocusableEl = comic_book_store_focusableEls[0];
  var comic_book_store_lastFocusableEl = comic_book_store_focusableEls[comic_book_store_focusableEls.length - 1];
  var KEYCODE_TAB = 9;

  element.keydown( function(e) {
    var isTabPressed = ( e.key === 'Tab' || e.keyCode === KEYCODE_TAB );

    if ( !isTabPressed ) {
      return;
    }

    if ( e.shiftKey ) /* shift + tab */ {
      if ( document.activeElement === comic_book_store_firstFocusableEl ) {
        comic_book_store_lastFocusableEl.focus();
        e.preventDefault();
      }
    } else /* tab */ {
      if ( document.activeElement === comic_book_store_lastFocusableEl ) {
        comic_book_store_firstFocusableEl.focus();
        e.preventDefault();
      }
    }
  });
}

// scroll to top
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 0) {
      jQuery('#button').fadeIn();
    } else {
      jQuery('#button').fadeOut();
    }
  });
  jQuery('#button').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });
  
});

// Banner sub-title
jQuery(document).ready(function() {
  jQuery("#banner-cat .banner-smalltitle").each(function() {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    console.log(splitT);
    
    if (splitT.length > 0) {
      var lastWordIndex = splitT.length - 1;
      var newText = "";
      
      for (var i = 0; i < splitT.length; i++) {
        if (i === lastWordIndex) {
          newText += "<span style='color:#D71515'>";
          newText += splitT[i] + " ";
          newText += "</span>";
        } else {
          newText += splitT[i] + " ";
        }
      }

      jQuery(this).html(newText.trim());
    }
  });
});

// Banner Title
jQuery(document).ready(function() {
  jQuery("#banner-cat .bannerbox h1 a").each(function() {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    console.log(splitT);
    
    if (splitT.length > 1) {
      var lastIndex = splitT.length - 1;
      var secondLastIndex = splitT.length - 2;
      var newText = "";
      
      for (var i = 0; i < splitT.length; i++) {
        if (i === secondLastIndex || i === lastIndex) {
          newText += "<span style='color:#D71515'>";
          newText += splitT[i] + " ";
          newText += "</span>";
        } else {
          newText += splitT[i] + " ";
        }
      }
      
      jQuery(this).html(newText.trim());
    }
  });
});
