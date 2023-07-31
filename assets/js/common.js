window.onpageshow = function(event) {
  if (event.persisted) {
   window.location.reload();
 }
};

window.ontouchstart = function() {};
window.addEventListener('touchstart', function() {}, true);
window.addEventListener('touchstart', function() {}, false);

document.ontouchstart = function() {};
document.addEventListener('touchstart', function() {}, true);
document.addEventListener('touchstart', function() {}, false);

var movefun = function( event ){
  event.preventDefault();
}

window.addEventListener( 'touchmove' , movefun , { passive: false } );

window.removeEventListener( 'touchmove' , movefun, { passive: false } );

document.body.addEventListener("touchstart", function(e){
  if (e.touches && e.touches.length > 1) {
    e.preventDefault();
  }
}, {passive: false});
document.body.addEventListener("touchmove", function(e){
  if (e.touches && e.touches.length > 1) {
    e.preventDefault();
  }
}, {passive: false});


jQuery(function($) {
  if($('body').hasClass('home')) {
    $('body').addClass('white');
    $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_w.svg');
    $(window).on('load', function(){
      if($('#loadingScreen').length){
        $('#loadingScreen').delay(800).animate({opacity:0}, 800,'easeOutQuart').queue(function() {
          //$('html,body').animate({scrollTop:0},'1');
          $(this).remove().dequeue();
          animate_init();
          $('.slick-active').addClass('phLoad').delay(1000).queue(function(next){
            $('.full').find('.phLoad').not('.slick-active').removeClass('phLoad');
            next();
          });
        });
      }
    });

    if($('#loadingScreen').length){
      setTimeout(function(){
        $('#loadingScreen').animate({opacity:0}, 800,'easeOutQuart').queue(function() {
          $(this).remove().dequeue();
        });
      }, 3000);}


      //top slide
      $('.full').on('beforeChange',function(event, slick, currentSlide, nextSlide){
        if(nextSlide > 0 ) {
          $(this).slick('slickSetOption', 'autoplaySpeed', 5000, true);
        }

        var w = window.innerWidth;
        if( 980 < w ){
          $('body').removeClass('whiteSp');
          $('body').removeClass('blackSp');
          if(nextSlide == 0 || nextSlide == 1 || nextSlide == 2) {
            //header w
            $('body').removeClass('black');
            $('body').addClass('white');
            if(!$('body').hasClass('bottom')){
              $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_w.svg');
            }
          } else {
            //header b
            $('body').removeClass('white');
            $('body').addClass('black');
            $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_b.svg');
          }
        } else {
          $('body').removeClass('white');
          $('body').removeClass('black');
          if(nextSlide == 0 || nextSlide == 1 || nextSlide == 2) {
            //header w
            $('body').removeClass('blackSp');
            $('body').addClass('whiteSp');
            if(!$('body').hasClass('bottom')){
              $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_w.svg');
            }
          } else {
            //header b
            $('body').removeClass('whiteSp');
            $('body').addClass('blackSp');
            $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_b.svg');
          }
        }
      })

      $(window).on('resize', function(){
        setTimeout(function(){
          $('.full').slick('slickGoTo', 0, true);
          var w = window.innerWidth;
          if( 980 < w ){
            $('body').removeClass('white');
            $('body').removeClass('black');
            $('body').removeClass('whiteSp');
            $('body').removeClass('blackSp');
            $('body').addClass('white');
            if(!$('body').hasClass('bottom')){
              $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_w.svg');
            }
          } else {
            $('body').removeClass('white');
            $('body').removeClass('black');
            $('body').removeClass('whiteSp');
            $('body').removeClass('blackSp');
            $('body').addClass('whiteSp');
            if(!$('body').hasClass('bottom')){
              $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_w.svg');
            }
          }
        }, 500);
      });

      $('.full').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-active').addClass('phLoad').delay(1000).queue(function(next){
          $('.full').find('.phLoad').not('.slick-active').removeClass('phLoad');
          next();
        });
      });

      $('.full').slick({
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
      });


      $('.full').on('touchmove', function(event, slick, currentSlide, nextSlide){
        $('.full').slick('slickPlay');
       });


    //headerChange
    function headerChange() {
      var h = window.innerHeight,
      startPos = 0;

      $(window).scroll(function(){
        var currentPos = $(this).scrollTop();
        if($(window).scrollTop() >= h) {
          $('body').addClass('bottom');
          $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_b.svg');
        } else if (h > currentPos) {
          $('body').removeClass('bottom');
          if($('body').hasClass('white') || $('body').hasClass('whiteSp')){
            $('#logo_img').attr('src', '/wp-content/themes/ecoala/assets/img/header_logo_w.svg');
          }
        }
        startPos = currentPos;

      });
    }

    $(window).on('load resize', function(){
      headerChange();
    });

    $(window).on('load resize', function(){
      setTimeout(function(){
        var topics = $('#topTopicsList li').length;
        if (topics <= 3 ) {
          $('#topTopics .iScrollHorizontalScrollbar').css({
            'cssText':'display: none !important;'
          });
        }
      }, 400);
    });

  } else {
    $(window).on('load', function(){
      animate_init();
    });
  }

  $(window).on("pagebeforehide",function(e){
    $('#wrapper,.mainTtl').fadeOut();
  });

  //parallax
  animate_init = function(){
    $('.i').on('inview', function(event, isInView) {
      if (isInView) {
        var delay = $(this).data('delay') ? $(this).data('delay') : 0;

        $(this).css('visibility', 'visible');

        if( delay > 0 ){
          $(this).css('animation-delay', delay+ 's');
        }
        $(this).addClass('animated '+ $(this).data('animate'));

        $(this).off('inview');

        $(this).delay(1600).queue(function(next){
          $(this).removeClass('fIU');
          next();
        });
      }
    });
  };

  var links = document.links;
  for (let i = 0, linksLength = links.length ; i < linksLength ; i++) {
    if (links[i].href == window.location.href) {
      links[i].classList.add('current');
    }
    var $url = window.location.href;
    var $withoutHash = $url.substr(0,$url.indexOf('?'));
    if (links[i].href == $withoutHash) {
      links[i].classList.add('current');
    }
  }
  if(document.URL.match(/topics/)) {
    $('.topicsBtn a').addClass('current');
  }

  $(window).on('load resize', function(){
    setTimeout(function(){
      var f = $('#footer').outerHeight(true);
      $('#contentWrap').css('padding-bottom', f + 'px');
    }, 500);
  });

  $('h1.mainTtl').clone().insertAfter('#buyBtnWrap').addClass('clone');

  var ua = window.navigator.userAgent.toLowerCase();

  if(ua.indexOf("windows nt") !== -1) {
    $('body').addClass('windows');
  }
  if(ua.indexOf("chrome") !== -1 || ua.indexOf("crios") !== -1) {
    $('body').addClass('chrome');
  } 

  function iscroller_init() { 
    $('.iScrollHorizontalScrollbar').remove();
    var iscroller = $('.scroll.content'); 
    iscroller.each(function(index){ 

      if($(this).hasClass('contentInsta')){
        var array = [];
        for(var i = 0; i < $(this).find('.sbi_item').length; i++){
          array.push($(this).find('.sbi_item').eq(i).outerWidth(true));
        }
        var childElementWidth = 0;
        for(var j = 0; j < array.length; j++){
          childElementWidth += array[j];
        }
        $(this).find('#sb_instagram').css('width', childElementWidth + 17 +'px');

      } else if($(this).hasClass('contentAllinone')){
        var childElementWidth = $(this).find('#list').outerWidth(true);
        var w = window.innerWidth;
        if( w <= 834 ){
          $(this).find('#list').css('width', childElementWidth + 17 +'px');
        }  else {
          $(this).find('#list').css('width', '100%');
        }
      } else {
        var array = [];
        for(var i = 0; i < $(this).find('li.box').length; i++){
          array.push($(this).find('li.box').eq(i).outerWidth(true));
        }
        var childElementWidth = 0;
        for(var j = 0; j < array.length; j++){
          childElementWidth += array[j];
        }

        if($('body').hasClass('windows') || $('body').hasClass('chrome')){
          if($('body').hasClass('page-template-products')) {
            $(this).find('ul').css('width', childElementWidth + 17 +'px');
          } else {
            $(this).find('ul').css('width', childElementWidth + 2 +'px');
          }
        } else {
          $(this).find('ul').css('width', childElementWidth + 2 +'px');
        }
      }
      $(this).addClass('iscroller'+index).attr('iscroller_id','iscroller'+index); 
      var tmpfnc = new Function('var myScroll'+index); 
      tmpfnc(); 
      var tmpfnc = new Function('myScroll'+index+' = new IScroll(\'.iscroller'+index+'\', {tap: true, scrollX : true, scrollY : false, bounce : false, mouseWheel : false, scrollbars : true, fadeScrollbars : true });'); 
      tmpfnc(); 
    }); 
  }

  const delta= 6;
  let startX;
  let startY;

  $(".scroll a").on('click',function(e){
    e.preventDefault();
  });
  $(".scroll a").on('mousedown',function(e){
    startX= event.pageX;
    startY= event.pageY;
    e.preventDefault();
  });
  $(".scroll a").on('mouseup',function(e){
    const diffX= Math.abs(event.pageX -startX);
    const diffY= Math.abs(event.pageY -startY);
    if (diffX < delta && diffY < delta) {
      $(this).off();
      setTimeout(function(){
        e.preventDefault();
      }, 400);
    } else {
      e.preventDefault();
    }
  });

  $(window).on('load resize', function(){
    setTimeout(function(){
      iscroller_init();
    }, 300);
  });

  $('.drawer').drawer({
    showOverlay: true
  });

  function scroll_control(event) {
    event.preventDefault();
  }
  function no_scroll(){
    document.addEventListener("mousewheel", scroll_control, {passive: false});
    document.addEventListener("touchmove", scroll_control, {passive: false});
    document.addEventListener("DOMMouseScroll", scroll_control, {passive: false});
  }
  function return_scroll(){
    document.removeEventListener("mousewheel", scroll_control, {passive: false});
    document.removeEventListener('touchmove', scroll_control, {passive: false});
    document.removeEventListener("DOMMouseScroll", scroll_control, {passive: false});
  }

  $('.drawer').on('drawer.opened', function(){
    no_scroll();
  });

  $('.drawer').on('drawer.closed', function(){
    return_scroll();
  });

  $(document).on('click touchstart', '.drawer-open .drawer-hamburger', function(){
    $('.drawer-menu .rl').on('inview', function(event, isInView) {
      if (isInView) {
        var delay = $(this).data('delay') ? $(this).data('delay') : 0;
        $(this).css('visibility', 'visible');
        if( delay > 0 ){
          $(this).css('animation-delay', delay+ 's');
        }
        $(this).addClass('animated '+ $(this).data('animate'));
      } else {
        $(this).css('visibility', 'hidden');
        if( delay > 0 ){
          $(this).css('animation-delay', delay+ 's');
        }
        $(this).removeClass('animated '+ $(this).data('animate'));
      }
    });
    return false;
  });
  var myScroll;

  window.onload = function() {
    myScroll = new IScroll('.drawer-nav', {
      mouseWheel: true,
      click: false
    });
    $(document).on('click touchstart', '.drawer-hamburger', function(){
      setTimeout(function(){
        myScroll.refresh();
      }, 500);
    });
  };

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
  }, "label,input,textarea,button,a");

  $('.ss').smoothScroll({
    target: 'a[href^="#"]',
    easing: 'easeOutQuint'
  });

  //pagetop



  function buyBtnWrap(){
    var topBtn = $('#buyBtnWrap');
    btn = topBtn.height();
    scrollHeight = $(document).height();
    scrollPosition = window.innerHeight + $(window).scrollTop();
    footHeight = $("footer").innerHeight();
    now = $(window).scrollTop();

    var w = window.innerWidth;
    if( 834 < w ){
      if ( scrollHeight - scrollPosition <= 25 ) {
        topBtn.css({
          "position":"absolute",
          "bottom": 42
        });
      } else if ( scrollHeight - scrollPosition  <= 130 ) {
        //topBtn.addClass('w');
        topBtn.css({
          "position":"fixed",
          "bottom": "20px"
        });
      } else {
        //topBtn.removeClass('w');
        topBtn.css({
          "position":"fixed",
          "bottom": "20px"
        });
      }
    } else {
      if ( scrollHeight - scrollPosition  <= 198 ) {
        //topBtn.addClass('w');
        topBtn.css({
          "position":"fixed",
          "bottom": "0"
        });
      } else {
        //topBtn.removeClass('w');
        topBtn.css({
          "position":"fixed",
          "bottom": "0"
        });
      }
    }
  }

  $(window).on('load resize', function(){
    setTimeout(function(){
      buyBtnWrap();
    }, 300);
  });

  $(window).on("scroll", function () {
    buyBtnWrap();
  });

  if($('body').hasClass('page-template-products')) {

    $(window).on('load', function(){
      setTimeout(function(){
        var url = $(location).attr('href');
        if(url.indexOf("?id=") != -1){
          var id = url.split("?id=");
          var $target = $('#' + id[id.length - 1]);
          if($target.length){
            var pos = $target.offset().top;
            $("html, body").animate({scrollTop:pos}, 500,'easeOutQuint');
          }
        }
      }, 500);

      setTimeout(function(){
        var hashString = location.hash.substr(1); 
        history.replaceState('', document.title, window.location.pathname);
      }, 1000);
    });

    $(window).on('load resize', function(){
      setTimeout(function(){
        var w = window.innerWidt;
        $('#productsWrap #productsMerit .contentScroll .scroll').css({
          'cssText':'width: ' + w + 'px !important;'
        });
        if( w <= 834 ){
          $('#productsWrap #productsAllinone .contentScroll .scroll').css({
            'cssText':'width: ' + w + 'px !important;'
          });
        }  else {
          $('#productsWrap #productsAllinone .contentScroll .scroll').css('width', '100%');
        }
      }, 400);
    });

    $("#moreFeature").click(function() {
      var show_text = $(this).parent('.wrap').find('.hidden');
      var small_height = 248 //This is initial height.
      var original_height = show_text.css({
        height: 'auto'
      }).height();

      if (show_text.hasClass('open')) {
        /*CLOSE*/
        show_text.height(original_height).animate({
          height: small_height
        }, 300);
        show_text.removeClass('open');
        $(this).find('div').text('VIEW MORE').parent().parent().removeClass('active');
      } else {
        /*OPEN*/
        show_text.height(small_height).animate({
          height: original_height
        }, 300, function() {
          show_text.height('auto');
        });
        show_text.addClass('open');
        $(this).find('div').text('CLOSE').parent().parent().addClass('active');
      }
    });

    $("#moreSpec").click(function() {
      var show_text = $(this).parent('.wrap').find('.hidden');
      var small_height = 557 //This is initial height.
      var original_height = show_text.css({
        height: 'auto'
      }).height();

      if (show_text.hasClass('open')) {
        /*CLOSE*/
        show_text.height(original_height).animate({
          height: small_height
        }, 300);
        show_text.removeClass('open');
        $(this).find('div').text('VIEW MORE').parent().parent().removeClass('active');
      } else {
        /*OPEN*/
        show_text.height(small_height).animate({
          height: original_height
        }, 300, function() {
          show_text.height('auto');
        });
        show_text.addClass('open');
        $(this).find('div').text('CLOSE').parent().parent().addClass('active');
      }
    });
  }

});
/*
if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0) {
    // スマートフォン向けの記述
  } else if (navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('Android') > 0) {
    // タブレット向けの記述
  } else {
    luxy.init({
      wrapper: '#wrapper',
      targets: '.luxy-el',
      wrapperSpeed: 0.1,
      targetSpeed: 0.02,
      targetPercentage: 0.1
    });
  }
*/