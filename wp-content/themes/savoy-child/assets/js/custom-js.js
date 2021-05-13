$(function(){
   $('#customer_details > .col-1').removeClass('col-1');
   $('#customer_details > .col-2').removeClass('col-2');
   $('#order_comments').attr('cols', 110);
   $('#order_comments').attr('rows', 5);
   $('.menu-item-1175').removeClass('megamenu col-2 shop-link menu-item-home ');
   $('.menu-item-1152').removeClass('megamenu full col-5 menu-item-home mobile-thumbnail-menu');
   $('.menu-item-1199').removeClass('megamenu col-3 current-menu-ancestor current_page_ancestor');
   $('#menu-item-972').removeClass('nm-menu-text-hide');
   $('.text-2').addClass('');
   $('.nm-order-view.nm-row').css({'margin-right': '50px', 'margin-left': '50px'});

   $('#pause_btn1').on('click', function(){
      $('#video1').get(0).pause();
      $(this).css('display', 'none');
      $('#play_btn1').show();
   });
   $('#play_btn1').on('click', function(){
      $('#video1').get(0).play();
      $(this).css('display', 'none');
      $('#pause_btn1').show();
   });

   $('#pause_btn2').on('click', function(){
      $('#video2').get(0).pause();
      $(this).css('display', 'none');
      $('#play_btn2').show();
   });
   $('#play_btn2').on('click', function(){
      $('#video2').get(0).play();
      $(this).css('display', 'none');
      $('#pause_btn2').show();
   });
});