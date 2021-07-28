$(document).ready(function(){
    //시리즈 - 탭스
     var info=$('.trail_bg');
     
     $('.trail_tit a').click(function(e){//각각질문클릭
         e.preventDefault();
         var selectBox=$(this).parents('.trail_bg');
         var findImg=$(this).parents('.trailer_wrap').children('.trail_img').find('img');
         
         if(selectBox.hasClass('hide')){
             info.find('.tit_sub').slideUp(200);
             info.removeClass('show').addClass('hide').removeClass('active');
             selectBox.removeClass('hide').addClass('show').addClass('active');
             selectBox.find('.tit_sub').slideDown(200);
         };
         if(selectBox.hasClass('link1')){
             findImg.attr('src','images/sec3_con3.png');
         }else if(selectBox.hasClass('link2')){
             findImg.attr('src','images/sec3_con4.png');
         }else if(selectBox.hasClass('link3')){
             findImg.attr('src','images/sec3_con1.png');
         }else if(selectBox.hasClass('link4')){
             findImg.attr('src','images/sec3_con2.png');
         };
     });
     
     //높이맞추기
     var boxHeight =  $('.trailer_wrap div:eq(0)').height(); 
     
     $(".trailer_wrap .trail_img img").height(boxHeight).width('auto');
     
     $(window).resize(function(){
         var boxHeight =  $('.trailer_wrap div:eq(0)').height(); 
         
         $(".trailer_wrap .trail_img img").height(boxHeight).width('auto');
         
     });
 
 });