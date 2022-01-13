$(function () {
  
  function init_works_product() {
    $('.aboutus-works-product-content').each(function(){
      var scroll = $(this).find('.aboutus-works-product-scroll');
      var list = $(this).find('.aboutus-works-product-list');
      
      var scroll_width = scroll.width();
      var list_width = list.width();
      
      if(list_width > scroll_width) {
        $(this).find('.aboutus-works-product-button').removeClass('unvisible');
      } else {
        $(this).find('.aboutus-works-product-button').addClass('unvisible');
      }
    });
  }
  
  init_works_product();
  
  $('.aboutus-works-product-next').click(function(){
    var content = $(this).closest('.aboutus-works-product-content')
    var scroll = content.find('.aboutus-works-product-scroll');
    var list = content.find('.aboutus-works-product-list');
    var item = scroll.find('.aboutus-works-product-item');
    
    var scroll_width = scroll.width();
    var list_width = list.width();
    var margin_left = parseInt(list.css('margin-left'), 10);
    var scroll_left = scroll.scrollLeft();
    var item_width = item.width();
    var margin_right = parseInt(item.css('margin-right'), 10);
    
    content.find('.aboutus-works-product-prev').addClass('active');
    
    if((list_width - scroll_left - scroll_width) <= (item_width + margin_right)) {
      scroll.animate({'scrollLeft': (list_width - scroll_width)});
      $(this).removeClass('active');
    } else {
      scroll.animate({'scrollLeft': Math.ceil((parseInt(scroll_left / (item_width + margin_right)) + 1) * (item_width + margin_right))});
    }
  });
  
  $('.aboutus-works-product-prev').click(function(){
    var content = $(this).closest('.aboutus-works-product-content')
    var scroll = content.find('.aboutus-works-product-scroll');
    var list = content.find('.aboutus-works-product-list');
    var item = scroll.find('.aboutus-works-product-item');
    
    var scroll_width = scroll.width();
    var list_width = list.width();
    var margin_left = parseInt(list.css('margin-left'), 10);
    var scroll_left = scroll.scrollLeft();
    var item_width = item.width();
    var margin_right = parseInt(item.css('margin-right'), 10);
    
    content.find('.aboutus-works-product-next').addClass('active');
    
    if((item_width + margin_right - scroll_left) >= 0) {
      scroll.animate({'scrollLeft': 0});
      $(this).removeClass('active');
    } else {
      scroll.animate({'scrollLeft': ((Math.ceil(scroll_left / (item_width + margin_right)) - 1) * (item_width + margin_right))});
    }
  });
  
  $('.aboutus-factory-map-handle').click(function(){
    $('html').css('overflow','hidden');
    $(window).on('touchmove.noScroll', function(e) {
        e.preventDefault();
    });
    var target = $(this).data('target');
    $('.modal-shadow').show();
    $('.modal-body').hide();
    $('.modal-factory').closest('.modal-body').show();
    $('.modal-factory-content').hide();
    $('.modal-factory-content[data-name="' + target + '"]').show();
    $('.modal-factory-prev').show();
    $('.modal-factory-next').show();
    if(target == '1') {
      $('.modal-factory-prev').hide();
    } else if(target == '10') {
      $('.modal-factory-next').hide();
    }
    $('.modal-factory').data('no', target);
    $('.modal-factory').fadeIn();
  });
  
  $('.modal-factory-prev').click(function(){
    var no = $(this).closest('.modal-factory').data('no');
    var target = parseInt(no) - 1;
    $('.modal-factory-content').hide();
    $('.modal-factory-content[data-name="' + target + '"]').show();
    $('.modal-factory-next').show();
    if(target == '1') {
      $('.modal-factory-prev').hide();
    }
    $('.modal-factory').data('no', target);
  });
  
  $('.modal-factory-next').click(function(){
    var no = $(this).closest('.modal-factory').data('no');
    var target = parseInt(no) + 1;
    $('.modal-factory-content').hide();
    $('.modal-factory-prev').show();
    $('.modal-factory-content[data-name="' + target + '"]').show();
    if(target == '10') {
      $('.modal-factory-next').hide();
    }
    $('.modal-factory').data('no', target);
  });
  
  // $('.aboutus-leave-handle').click(function(){
  //   $('html').css('overflow','hidden');
  //   $(window).on('touchmove.noScroll', function(e) {
  //       e.preventDefault();
  //   });
  //   var target = $(this).data('target');
  //   $('.modal-shadow').show();
  //   $('.modal-body').hide();
  //   $('.modal-leave').fadeIn();
  //   $('.modal-leave').find('.modal-content').scrollTop(0);
  //   if(target != '1') {
  //     var top = $('.modal-leave-item[data-name="' + target + '"]').position().top;
  //     $('.modal-leave').find('.modal-content').scrollTop(top);
  //   }
  // });

  /* leave */
  $('.aboutus-leave-handle').click(function() {
    $('html').css('overflow', 'hidden');
    $(window).on('touchmove.noScroll', function(e) {
      e.preventDefault();
    });
    var target = $(this).data('target');
    $('.modal-shadow').show();
    $('.modal-body').hide();
    $('.modal-leave').closest('.modal-body').show();
    $('.modal-leave-item').hide();
    $('.modal-leave-item[data-name="' + target + '"]').show();
    $('.modal-leave-prev').show();
    $('.modal-leave-next').show();
    if (target == '1') {
      $('.modal-leave-prev').hide();
    } else if (target == '8') {
      $('.modal-leave-next').hide();
    }
    $('.modal-leave').data('no', target);
    $('.modal-leave').fadeIn();
  });

  $('.modal-leave-prev').click(function() {
    var no = $(this).closest('.modal-leave').data('no');
    var target = parseInt(no) - 1;
    $('.modal-leave-item').hide();
    $('.modal-leave-item[data-name="' + target + '"]').show();
    $('.modal-leave-next').show();
    if (target == '1') {
      $('.modal-leave-prev').hide();
    }
    $('.modal-leave').data('no', target);
  });

  $('.modal-leave-next').click(function() {
    var no = $(this).closest('.modal-leave').data('no');
    var target = parseInt(no) + 1;
    $('.modal-leave-item').hide();
    $('.modal-leave-prev').show();
    $('.modal-leave-item[data-name="' + target + '"]').show();
    if (target == '8') {
      $('.modal-leave-next').hide();
    }
    $('.modal-leave').data('no', target);
  });

})
