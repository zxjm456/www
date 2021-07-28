$(document).ready(function(){   
    
    //var date = new Date();
   
       /*숫자 자동입력*/
     function count1(){
     //년도처리
     var memberCountConTxt= 1967;
   
     $({ val : 0 }).delay(1000).animate({ val : memberCountConTxt }, {
      duration: 2000,
     step: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count1").text(number);
     },
     complete: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count1").text(number);
     }
     });
   };
    //월처리
   
    function count2(){
   
    memberCountConTxt= 54;
   
     $({ val : 0 }).delay(2000).animate({ val : memberCountConTxt }, {
      duration: 2000,
     step: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count2").text(number);
     },
     complete: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count2").text(number);
     }
     });
    };
   function numberWithCommas(x) {
       return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "");
   }
   
   
   //스크롤
   count1();
   count2();
   
   
   
   });