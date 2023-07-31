jQuery(function($) {
  //hover
  $("body").on({
    "touchstart": function() {
      return $(this).off("mouseover mouseout");
    },
    "touchstart mouseover": function() {
      return $(this).addClass("hover");
    },
    "touchend touchmove mouseout click": function() {
      return $(this).removeClass("hover");
    }
  }, ".list");

  $(document).on('click touchstart', '.tabBtn', function(){
    var index = $('.tabBtn').index(this);
    $('.tabBtn, .panel').removeClass('on');
    $(this).addClass('on');
    $('.panel').eq(index).addClass('on');
  });
/*
  $(window).on('load resize', function(){
    var w = window.innerWidth;
    if( 834 < w ){
      $(window).scroll(function() {
        var area = $("#areaBtn"),
        aH = area.height(),
        header = $('header').height(),
        c = $("#salonContent .content").height(),
        n = $(window).scrollTop(),
        pT = parseInt($('#salonWrap').css('margin-top'), 10),
        head = $('#salonHead').outerHeight(true),
        t = pT + head,
        endline = c - 20,
        salon = parseInt($('#salonContent').css('padding-top'), 10),
        start = t + salon,
        fix = n + header + salon;

        if(n <= t - header ){
          area.css({
            "position": "absolute",
            "top" : 0
          });
        }else if (n > t - header && n < endline) {
          area.css({
            "position": "fixed",
            "top" : fix
          });

        }else{
          area.css({
            "position": "absolute",
            "top" : c - aH
          });
        }
      });
    } else {

    }
  });
*/
});