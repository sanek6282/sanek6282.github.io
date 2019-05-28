$(document).ready(function() {
  $("#header_order, #main_btn").click(function(){
	  $(".modal-overlay").addClass("modal-overlay-show");
	  $(".modal-content-callback").addClass("modal-content-show");
   })
  $(".modal-overlay, .modal-content-callback-close").click(function(){
	  $(".modal-content-callback").removeClass("modal-content-show");
	  $(".modal-overlay").removeClass("modal-overlay-show");
	   })
  });