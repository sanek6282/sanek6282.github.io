$(document).ready(function() {
	
	
	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
	
	
    $("body").on("click","a.sb", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $("body").on("click","header ul li a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });


 	
  	$("#owl-demo").owlCarousel({
 	  nav: true,
 	  navText: false,
      navigation : true, // показывать кнопки next и prev 
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false
 
  	});

  	$("#owl-demo2").owlCarousel({
 	  nav: true,
 	  navText: false,
      navigation : true, // показывать кнопки next и prev 
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 4,
      responsive : {
	    // breakpoint from 0 up
	    0 : {

	        items : 2
	    },
	    // breakpoint from 480 up
	    480 : {
	        items : 3
	    },
	    // breakpoint from 768 up
	    768 : {
	        items : 4
	    }
	  },
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false
 
  	});

  	$("#owl-demo3").owlCarousel({
 	  nav: true,
 	  navText: false,
      navigation : true, // показывать кнопки next и prev 
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 4,
      responsive : {
	    // breakpoint from 0 up
	    0 : {

	        items : 2
	    },
	    // breakpoint from 480 up
	    480 : {
	        items : 3
	    },
	    // breakpoint from 768 up
	    768 : {
	        items : 4
	    }
	  },
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false
 
  	});
 
});