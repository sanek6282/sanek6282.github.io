jQuery(document).ready(function(){
    function random(min, max)  {
     return Math.floor(Math.random() * (max - min + 1)) + min;
    }


    var i = random(1,4);
    if (i == 1) {
    $('#uniq_right_img').attr('src','img/santa_view.jpg');
    }
    if (i == 2) {
     $('#uniq_right_img').attr('src','img/TF_view.jpg');
    }
    if (i == 3) {
    $('#uniq_right_img').attr('src','img/gift_view.jpg');
    }
    if (i == 4) {
    $('#uniq_right_img').attr('src','img/raketa_view.jpg');
      //$("#home_slider .vjs-poster").css({'background-image': 'url("http://mykinkydope.com/wp-content/uploads/2017/11/4_thumb25.jpg")'});
    }

    $(function(){
     $(".hero_choose-1").click(function() {
     $('#uniq_right_img').attr('src','img/raketa_view.jpg');
    });
     $(".hero_choose-2").click(function() {
     $('#uniq_right_img').attr('src','img/gift_view.jpg');
    });
     $(".hero_choose-3").click(function() {
     $('#uniq_right_img').attr('src','img/santa_view.jpg');
   });

     $(".hero_choose-4").click(function() {
     $('#uniq_right_img').attr('src','img/TF_view.jpg');
   });
 
      
});
        
        });