 var scrollPosition;
// モーダルウィンドウを開く
$('.js-modal-open').on('click', function(){
  var target = $(this).data('target');
  var modal = document.getElementById(target);
  scrollPosition = $(window).scrollTop();

  $('body').addClass('fixed').css({'top': -scrollPosition});
  $(modal).fadeIn();
  return false;
});

// モーダルウィンドウを閉じる
$('.js-modal-close').on('click', function(){
  $('body').removeClass('fixed');
  window.scrollTo( 0 , scrollPosition );
  $('.js-modal').fadeOut();
  return false;
});

var w = $(window).width();

$('.modal-content__features').on('scroll',function() {

  if(768 < w) {
    var scrollTop = $(this).scrollTop() + 32;
    var position = scrollTop - $(this).scrollTop();
    $('.js-modal-close-fixed').offset({top:position});
  }
})