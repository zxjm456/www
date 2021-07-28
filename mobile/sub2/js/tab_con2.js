// JavaScript Document


$(document).ready(function(){
    var cnt=3; //탭메뉴 개수************************
    $('.tabs .contlist:eq(0)').show(); 
    $('.tabs .tab1').css('background','#0069ab').css('color','#fff');
    

      $('.tabs .tab').click(function(e){   
        e.preventDefault();// a태그의 기능을 막는다. 
        var ind =  $(this).index('.tabs .tab');// 클릭시 해당 index를 뽑아 준다

        $(".tabs .contlist").hide(); 
        $(".tabs .contlist:eq("+ind+")").fadeIn('fast');
        $('.tab').css('background','#eee').css('color','#0069ab');
        $(this).css('background','#0069ab').css('color','#fff'); 
     });
  
  });