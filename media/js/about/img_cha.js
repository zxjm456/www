// $(document).ready(function(){
        
//     var screenSize = $(window).width();

//    function screenW(){     
//     if(screenSize<768){
//         $('.cha1').attr('src','../images/about/con2_1cha.png');  
//         $('.cha2').attr('src','../images/about/con2_2cha.png');       
//     }
//    }
    
//    screenW();  //함수호출    
       
//    $(window).resize(function(){ 
//      screenSize = $(window).width(); 
       
//      screenW();//함수호출
//    });     

// });
// $(document).ready(function(){
        
//   var screenSize = $(window).width();

//  function screenW(){     
//   if(screenSize>769){
//       $('.cha1').attr('src','./images/about/con2_1.png');  
//       $('.cha2').attr('src','./images/about/con2_6.png');            
//   }else if(screenSize>768){
//         $('.cha1').attr('src','./images/about/con2_1cha.png');  
//         $('.cha2').attr('src','./images/about/con2_2cha.png');   
//   }else if(screenSize>640){         
      
//   }
//  }
  
//  screenW();  //함수호출    
     
//  $(window).resize(function(){ 
//    screenSize = $(window).width(); 
     
//    screenW();//함수호출
//  });     

// });


$(document).ready(function(){
        
  var screenSize = $(window).width();

 function screenW(){     
  if(screenSize>768){         
    $('.cha1').attr('src','./images/about/con2_1.png');  
    $('.cha2').attr('src','./images/about/con2_6.png'); 
  }else{
    $('.cha1').attr('src','./images/about/con2_1cha.png');  
    $('.cha2').attr('src','./images/about/con2_2cha.png');          
  }if(screenSize>640){         
    $('.cha3').attr('src','./images/about/con2_2.png');  
    $('.cha4').attr('src','./images/about/con2_4.png');  
  }else{
    $('.cha3').attr('src','./images/about/con2_3cha.png');  
    $('.cha4').attr('src','./images/about/con2_4cha.png');         
  }
  
 }
  
 screenW();  //함수호출    
     
 $(window).resize(function(){ 
   screenSize = $(window).width(); 
     
   screenW();//함수호출
 });     

});