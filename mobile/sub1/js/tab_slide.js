// JavaScript Document

// JavaScript Document


$(document).ready(function(){
  var cnt=3; //탭메뉴 개수************************
  $('.slide_tab .contlist:eq(0)').show(); 
  $('.slide_tab .s_tab1').css('border-bottom','4px solid #0069ab').css('color','#0069ab');
  

    $('.slide_tab .s_tab').click(function(e){   
      e.preventDefault();// a태그의 기능을 막는다. 
      var ind =  $(this).index('.slide_tab .s_tab');// 클릭시 해당 index를 뽑아 준다

      $(".slide_tab .contlist").hide(); 
      $(".slide_tab .contlist:eq("+ind+")").fadeIn('fast');
      $('.s_tab').css('border-bottom','4px solid transparent').css('color','#333');
      $(this).css('border-bottom','4px solid #0069ab').css('color','#0069ab');
   });

});