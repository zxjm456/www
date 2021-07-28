$(document).ready(function() {
  var boxHeight =  $('.box1 div:eq(1)').outerHeight(); 
  var boxHeight2 =  $('.box2 div:eq(1)').outerHeight(); 
  var screenSize = $(window).width();
       

    function screenWH(){
          if(screenSize>1025){


          $(".box1 div:eq(2)").height(boxHeight);
          $(window).resize(function(){ 
              boxHeight =  $('.box1 div:eq(1)').outerHeight();
            $(".box1 div:eq(2)").css('height',boxHeight);
          });

          $(".box2 div:eq(0)").height(boxHeight2);
          $(window).resize(function(){ 
                boxHeight2 =  $('.box2 div:eq(1)').outerHeight();
              $(".box2 div:eq(0)").css('height',boxHeight2);
            });


          }else if(screenSize<1024){
            
            $(window).resize(function(){ 
              boxHeight =  $('.box1 div:eq(2)').css('height','auto');
            
          });
          $(window).resize(function(){ 
            boxHeight2 =  $('.box2 div:eq(0)').css('height','auto');
          
          });
            
                
              
          }
        };
            
   
  screenWH();  //함수호출    
      
  $(window).resize(function(){ 
    screenSize = $(window).width(); 
      
    screenWH();//함수호출
  });     

});