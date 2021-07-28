$(document).ready(function () {
            
  

    //한페이지에서 메뉴 클릭시 원하는 위치로 이동시키는 코드
    $('.sub_overview a').click(function(e){
     e.preventDefault();

        var value=0;
        if($(this).hasClass('link1')){
           value= $('section:eq(0)').offset().top + 260;   //해당요소의 상단 (top)까지의 거리
        }else if($(this).hasClass('link2')){
           value= $('section:eq(1)').offset().top + 260; 
        }else if($(this).hasClass('link3')){
           value= $('section:eq(2)').offset().top + 260; 
        }
        
      $("html,body").stop().animate({"scrollTop":value},1000);
    });
});