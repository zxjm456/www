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
       $("html,body").stop().animate({"scrollTop":0},500);
    });
 
 });