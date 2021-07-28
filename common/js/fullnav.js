
$(document).ready(function() {
  
    //2depth 열기/닫기
    $('ul.dropdownmenu').hover(
       function() { 
          $('ul.dropdownmenu li.menu ul').fadeIn('normal',function(){$(this).stop();}); //모든 서브를 다 열어라
          $('#headerArea').animate({height:430},'fast').clearQueue();
          $('#headerArea').css('background','#f0f0f0');
       },function() {
          $('ul.dropdownmenu li.menu ul').hide(); //모든 서브를 다 닫아라
          $('#headerArea').animate({height:180},'fast').clearQueue();
          $('#headerArea').css('background','#fff');
     });
     
     //1depth 효과
     $('ul.dropdownmenu li.menu').hover(
       function() { 
           $('.depth1',this).css('color','#0070d1');
       },function() {
          $('.depth1',this).css('color','#333');
     });

     //tab 처리
     $('ul.dropdownmenu li.menu .depth1').on('focus', function () {        
        $('ul.dropdownmenu li.menu ul').slideDown('normal');
        $('#headerArea').animate({height:430},'fast').clearQueue();
     });

    $('ul.dropdownmenu li.m5 li:last').find('a').on('blur', function () {        
        $('ul.dropdownmenu li.menu ul').hide('fast');
        $('#headerArea').animate({height:180},'normal').clearQueue();
    });
});



//상단이동 코드
$(document).ready(function () {
            
   $('.topMove').hide(); //top버튼 안보이게

  $(window).on('scroll',function(){ //스크롤의 위치가 바뀌면 발생 하는 이벤트
       var scroll = $(window).scrollTop(); //스크롤의 상단 부터의 거리
      
      
       //$('.text').text(scroll); //스크롤의 거리를 출력
       if(scroll>700){  //스크롤의 top 의 거리가 500ㅔㅌ 보다 크면
           $('.topMove').fadeIn('slow');
       }else{
           $('.topMove').fadeOut('fast');
       }
  });


  //top메뉴를 클릭하면 상단으로이동

   $('.topMove').click(function(e){
      e.preventDefault();
       //상단으로 스르륵 이동합니다.
      $("html,body").stop().animate({"scrollTop":0},1000);
   });

});




$(document).ready(function() {
	// $('.select .arrow').click(function(){
	// 	$('.select .aList').slideDown('slow');			  
	// });
	// $('.select .aList').mouseleave(function(){
	// 	$(this).fadeOut('slow');			  
	// });
	$('.famil_wrap .arrow').toggle(function(){
		$('.famil_wrap .aList').fadeIn('fast');
	}, function(){
		$('.famil_wrap .aList').fadeOut('fast');
	});
	//tab키 처리
	  $('.famil_wrap .arrow').bind('focus', function () {        
              $('.famil_wrap .aList').show();	
       });
       $('.famil_wrap .aList li:last').find('a').bind('blur', function () {        
              $('.famil_wrap .aList').hide();
       });  
});




