$(document).ready(function() {

  // Navigation scroll
  $(window).on("load scroll", function() {
    $(window).scrollTop() < 1 ? $("header").removeClass("scrolled") : $("header").addClass("scrolled");
  });

  // Center the menu for mobilenav - change width as you desire
  $(window).on('load resize', function() {
    if ($(window).width() < 1200) {
      $('.menu').addClass('perfect');
    } else {
      $('.menu').removeClass('perfect');
    }
  });

  // Navigation toggle
  $('.nav-toggle').on('click', function() {
    $(this).toggleClass('active-nav');
    $('.menu-main-menu-container').toggle();
  });
	
	// Reset css when resizing back up
	$(window).on('resize', function() {
		if( $(window).width() > 1211 ) {
			$('.menu-main-menu-container').css('display', 'block');
		} else {
			$('.menu-main-menu-container').css('display', 'none');
		}
	});
	
	// Reset toggle when resizing back up
	$(window).on('resize', function() {
		if( $(window).width() > 1211 ) {
			$('.nav-toggle').removeClass('active-nav');
		}
	});


	
	
	
  $("#btn-main-order, #info-order-btnl, #info-order-btnr").click(function(){
	  $(".modal-overlay").addClass("modal-overlay-show");
	  $(".modal-content-callback").addClass("modal-content-show");
   })
  $(".modal-overlay, .modal-content-callback-close").click(function(){
	  $(".modal-content-callback").removeClass("modal-content-show");
	  $(".modal-overlay").removeClass("modal-overlay-show");
	   })
  });
  
  