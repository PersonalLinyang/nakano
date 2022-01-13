$(function () {

  $('.header-controller-area').click(function(){
    if($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.header-menu-shadow').slideUp();
      $('.header-menu-area').slideUp();
    } else {
      $(this).addClass('active');
      $('.header-menu-shadow').slideDown();
      $('.header-menu-area').slideDown();
    }
  });

  $('.header-menu-shadow').click(function(){
    $('.header-controller-area').removeClass('active');
    $(this).slideUp();
    $('.header-menu-area').slideUp();
  });
  
  $('.btn-page-top').click(function(){
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
  
  $('.scroll-link').click(function(){
    var target = $(this).data('target');
    var target_top = $('#' + target).offset().top - $('.header').innerHeight() - 20;
    $('html,body').animate({scrollTop:target_top});
    return false;
  });
  
  $('.modal-shadow').click(function(){
    $(this).hide();
    $('.modal-body').hide();
    $('html').css('overflow','visible');
    $(window).off('.noScroll');
  });
  
  $('.modal-close').click(function(){
    $(this).closest('.modal-body').hide();
    $('.modal-shadow').hide();
    $('html').css('overflow','visible');
    $(window).off('.noScroll');
  });
  
  var urlHash = location.hash;
  if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
      var target = $(urlHash);
      var position = target.offset().top - $('.header').outerHeight();
      $('body,html').stop().animate({scrollTop:position}, 500);
    }, 100);
  }

  
  var flag = false;
  var pageTopFlag = false;

  $(window).on('scroll', function() {
    var scroll = $(window).scrollTop();

    /* header box-shadow */
    if(flag == false && 0 < scroll) {
      $('body > .header').addClass('shadow');
      flag = true;
    }else if(flag == true && scroll <= 0) {
      $('body > .header').removeClass('shadow');
      flag = false;
    }

    /* page top */
    if(pageTopFlag == false && 600 < scroll) {
      $('.btn-page-top').stop().animate({
        'opacity': 1
      },600)
      pageTopFlag = true;
    }else if(pageTopFlag == true && scroll <= 600) {
      $('.btn-page-top').stop().animate({
        'opacity': 0
      },600)
      pageTopFlag = false;
    }
  })
})
