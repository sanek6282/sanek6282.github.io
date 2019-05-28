$(document).ready(function(){
    var HeaderTop = $('#center-headbar').offset().top;
    $(window).scroll(function(){
        if( $(window).scrollTop() > HeaderTop ) {
            $('#center-headbar').addClass('fixedbar');
        } else {
            $('#center-headbar').removeClass('fixedbar');
        }
    });
	$("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1200);
    });
});