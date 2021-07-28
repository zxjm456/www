 $(document).ready(function() {
    var op = false;  //네비가 열려있으면(true) , 닫혀있으면(false)
      
     $(".menu_ham").click(function() { //메뉴버튼 클릭시
        
        var documentHeight =  $(document).height();
      $("#gnb").css('height',documentHeight); 
 
      if(op==false){
       $("#gnb").animate({right:0,opacity:1}, 'fast');
        $('#headerArea').addClass('mn_open');
       op=true;
     }else{
        $("#gnb").animate({right:'-100%',opacity:0}, 'fast');
       $('#headerArea').removeClass('mn_open');
       op=false;
       }
 
   });
    
    
//      //2depth 메뉴 교대로 열기 처리 
     var onoff=[false,false,false,false];
   var arrcount=onoff.length;
     
    // console.log(arrcount);
     
     $('#gnb .menu h3 a').click(function(){
   var ind=$(this).parents('.menu').index();
         
  //  console.log(ind);

   $('.menu .depth_inner').slideUp(500);
         
   if(onoff[ind]==false){
          for(var i=0; i<arrcount; i++) {
            onoff[i]=false;
            $('.menu:eq('+i+') h3').removeClass('nav_go');
        }
        $('.menu:eq('+ind+') .depth_inner').slideDown(500);
        $('.menu:eq('+ind+') h3').addClass('nav_go');
        onoff[ind]=true;
    }
    else{
        $('.menu:eq('+ind+') .depth_inner').slideUp(500);
        $('.menu:eq('+ind+') h3').removeClass('nav_go');
        onoff[ind]=false;
    }
     });    
   
  });
// $(document).ready(function(){
//   var op = false;  //네비가 열려있으면(true) , 닫혀있으면(false)
  
//   var documentHeight =  $(document).height();
//   $("#gnb").css('height',documentHeight);
//   $(".menu_ham").css('height',documentHeight);
  

//   $(".menu_btn").click(function(e) {
//       e.preventDefault();
//       if(op==false){
//           $(this).removeClass('menu_off').addClass('menu_on');
//           $('#gnb').animate({right:0,opacity:1}, 'fast');
//           $('.menu_ham').css('left',0);
//           $('#headerArea').css('background','rgba(255,255,255,1)');
//           op=true;

//       } else {
      
//           $(this).removeClass('menu_on').addClass('menu_off');
//           $('#gnb').animate({right:'-100%',opacity:0}, 'fast');
//           $('.menu_ham').css('left','-100%');
      
//           if(scroll_onoff==0){
//               $('#headerArea').css('background','rgba(255,255,255,.3)');
//           }
//           op=false;
//       }
//   });

//   var onoff=[false,false,false,false];
//   var arrcount=onoff.length;
  
//   $('#gnb .menu h3 a').click(function(e){
//       e.preventDefault();
//       var ind=$(this).parents('.menu').index();
      
//       $('.menu .depth_menu').slideUp(500);
      
//       if(onoff[ind]==false){
//           for(var i=0; i<arrcount; i++) {
//               onoff[i]=false;
//               $('.menu:eq('+i+') h3').removeClass('nav_go');
//           }
//           $('.menu:eq('+ind+') .depth_menu').slideDown(500);
//           $('.menu:eq('+ind+') h3').addClass('nav_go');
//           onoff[ind]=true;
//       }
//       else{
//           $('.menu:eq('+ind+') .depth_menu').slideUp(500);
//           $('.menu:eq('+ind+') h3').removeClass('nav_go');
//           onoff[ind]=false;
//       }
//   });

 
// });