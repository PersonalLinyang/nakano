$(function(){
  $('.faq-ac dt').click(function(){
    $(this).toggleClass('selected');
    $(this).next().slideToggle();
  });

  $('a[href^="#"]').on('click', function() {
    var speed = 300;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHight;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });

});