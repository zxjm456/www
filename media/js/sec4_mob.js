$(document).ready(function(){
    

 
      $(this).siblings('li').removeClass('current');

      
   
   
    $('.select li:eq(0)').find('img').css('filter','blue(100%)');
   $('.select a').click(function(){
       $('.current img').hide();
       $('.current img').fadeIn('slow');
       var ind = $(this).parent('li').index();
       var chr='';		
       
       $('.select img').css('filter','blue(0%)');
       $(this).find('img').css('filter','blue(100%)');
       if(ind==0){
             $('.current img').attr('src','images/sec3_con3.png'); 
           $('.other01').text('Red Pig');
               
        }else if(ind==1){
             $('.current img').attr('src','images/sec3_con4.png'); 
           $('.other01').text('Tales Earthsea');
  
        }else if(ind==2){
             $('.current img').attr('src','images/sec3_con1.png'); 
            $('.other01').text('Witch Delivery Kiki');
  
        }else if(ind==3){
           $('.current img').attr('src','images/sec3_con2.png');   
            $('.other01').text('Ponyo on the Cliff');
            
       
        }
       
   });

   
  
  

   
   
   
});


      
   
   