'use strict';

//　ナビゲーションを動的に動かす
$(function(){
    let headNav = $(".header_nav");
    $(window).on('load scroll', function(){
        if($(this).scrollTop() > 500 && headNav.hasClass('fixed') == false){
            headNav.css({"top":'-100px'});
            headNav.addClass('fixed');
            headNav.animate({"top": 0}, 600);
        }else if($(this).scrollTop() < 300 && headNav.hasClass('fixed') == true){
            headNav.removeClass('fixed');
        }
    });
});

// ナビのレスポンシブ対応
$(function(){
    $("#toggle").click(function(){
      $("#menu").slideToggle();
      return false;
    });
    $(window).resize(function(){
      let win = $(window).width();
      let p = 480;
      if(win > p){
        $("#menu").show();
      }
    });
  });

//　背景画像をスクロールと一緒に動かす
$(function(){
    $(window).on('scroll', function(){
        let scrollTop = $(window).scrollTop();
        let bgPosition = scrollTop / 2; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）

        if(bgPosition){
        $('#back_image').css('background-position', 'center top -'+ bgPosition + 'px');
        }
    });
});

// クリックしてtextareaをクリップボードにコピー
$(function($) {
    $('.copy_clipboard').click(function() {
        let clipboard = $('<textarea></textarea>');
        clipboard.val($(this).prev().html());
        $(this).append(clipboard);
        clipboard.select();
        document.execCommand('copy');
        clipboard.remove();
    });
});

//　文字の輪郭をアニメーションする
anime({
    targets: '.line-drawing-demo .lines path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: true
  });

  $(function() {
    $('.anime_h1').textFx({
    　　　　type: 'fadeIn',
    　　　　iChar: 20,
    　　　　iAnim: '1000'
　　　　});
});
