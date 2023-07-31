jQuery(function($) {
  $(window).on('load resize', function(){
    var w = window.innerWidth;
    if( 834 < w ){
      setTimeout(function(){
        var aH = $("aside > ul").height();
        $("aside").css({
          "height" : aH
        });
      }, 500);
    } else {
    }
  });
});