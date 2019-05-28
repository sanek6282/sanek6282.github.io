jQuery( document ).ready(function() {
	
	jQuery('.header_wrapper_list_toggle').on('click', function() {
		
		jQuery('.header_wrapper_list_ul').slideToggle(700, function(){
			if(jQuery(this).css('display') === 'none') {
			jQuery(this).removeAttr('style');
		}
			});
		
		});
	
	});


