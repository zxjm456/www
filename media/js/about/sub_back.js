$(document).ready(function() {
    var screenSize = $(window).width(); //가로 해상도
      var screenHeight = $(window).height(); //세로 해상도
    var current=false;
    
      $("#content").css('margin-top',screenHeight);//content의margin-top을 세로 해상도의 높이로 반환한다
      
    if( screenSize > 768){//768보다 큰 해상도
      $("#maxBG").show(); //비디오만 나오게
      $("#minBG").hide();
    }
  if(screenSize <= 768){ //768보다 이하
      $("#maxBG").hide();
      $("#maxBG").attr('src',''); //비디오 경로 를 제거
      $("#minBG").show();
    }
    
 $(window).resize(function(){    //웹브라우저 크기 조절시 반응하는 이벤트 메소드()
    screenSize = $(window).width(); 
    screenHeight = $(window).height();
        
        $("#content").css('margin-top',screenHeight); 
       
    if( screenSize > 768 && current==false){ 
        
      $("#maxBG").show();
      $("#maxBG").attr('src','images/about/about_max.jpg');
      $("#minBG").hide();
      current=true;
    }
    if(screenSize <= 768){
      $("#maxBG").hide();
      $("#maxBG").attr('src','');
      $("#minBG").show();
      current=false;
    }
  }); 
      
      
      $('.down').click(function(){
            screenHeight = $(window).height(); //클릭하는 순간의 해상도의 높이를 처리
            $('html,body').animate({'scrollTop':screenHeight}, 1000);
      });
      
      
});