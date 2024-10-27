( function( $ ) {
	
	$('.mini-toggle').on('click', function(){
	   $(this).parent().toggleClass('menushow');
	});
	$('.header-top-search i').on('click', function(){
	   $('.header-top-search form').toggleClass('sbar-show');

	});

	$('#masthead').on('click', function(){
	   $('.header-top-search form').removeClass('sbar-show');
	});
	$('.mmenu-hide').on('click', function(){
	   $('#site-navigation').removeClass('toggled');
	});

	$.fn.asthirAccessibleDropDown = function () {
		 var el = $(this);

			    /* Make dropdown menus keyboard accessible */

			  $("button.mini-toggle", el).focus(function() {
			        $(this).parents("li").addClass("befocus");
			  })/*.blur(function() {
			        $(this).parents("li").removeClass("befocus");
			  });*/
	}
	 $("#primary-menu").asthirAccessibleDropDown();
	
	 $(window).load(function() {
		var menu      =  $('#primary-menu');
		  menu.slicknav({
			  'allowParentLinks': true,
			  'nestedParentLinks': false,
			  'closeOnClick': true,
			  'closedSymbol': '&#9658;', // Character after collapsed parents.
			  'openedSymbol': '&#9660;', // Character after expanded parents.
		  });
	  
	  $(document).on("click", "#menu-close", function(e) {
		  e.preventDefault();
		  $(".slicknav_nav").addClass('slicknav_hidden mhide');
		});
	  
		  $(".slicknav_menu .slicknav_nav").append('<a id="menu-close" class="slicknav_arrow xshop-carrow" href="#menuclose"><i class="fas fa-times"></a></i>');
  
  });


}( jQuery ) );