$(function () {

  $(".header-controller-area").click(function(){
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

  $(".header-menu-shadow").click(function(){
    $('.header-controller-area').removeClass('active');
    $(this).slideUp();
    $('.header-menu-area').slideUp();
  });
  
  $(".btn-page-top").click(function(){
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
  
  $(".header-menu-item").click(function(){
    var target = $(this).data('target');
    $("html,body").animate({scrollTop:$('#' + target).offset().top});
    return false;
  });

})
