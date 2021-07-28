$(document).ready(function(){
        
    var screenSize = $(window).width();

   function screenW(){     
    if(screenSize>1024){
        $('.changes2').attr('src','images/sce1_con2.png');  
        $('.changes1').attr('src','images/sce1_con3.png');            
    }else if(screenSize>768){
        $('.changes2').attr('src','images/sce1_con6.png');         
        $('.changes1').attr('src','images/sce1_con5.png');   
    }else if(screenSize>640){         
        
    }
   }
    
   screenW();  //함수호출    
       
   $(window).resize(function(){ 
     screenSize = $(window).width(); 
       
     screenW();//함수호출
   });     

});

