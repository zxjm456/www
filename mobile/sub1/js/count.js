$(document).ready(function(){   
    

   
       /*숫자 자동입력*/
     function count1(){

     var memberCountConTxt= 1967;
   
     $({ val : 0 }).delay(3000).animate({ val : memberCountConTxt }, {
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

   
    function count2(){
   
    memberCountConTxt= 523;
   
     $({ val : 0 }).delay(4000).animate({ val : memberCountConTxt }, {
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

  




   function count3(){
   
    memberCountConTxt= 5215;
   
     $({ val : 0 }).delay(5000).animate({ val : memberCountConTxt }, {
      duration: 2000,
     step: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count3").text(number);
     },
     complete: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count3").text(number);
     }
     });
    };
    function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "");
  }



  function count4(){
   
    memberCountConTxt= 21;
   
     $({ val : 0 }).delay(6000).animate({ val : memberCountConTxt }, {
      duration: 2000,
     step: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count4").text(number);
     },
     complete: function() {
       var number = numberWithCommas(Math.floor(this.val));
       $(".count4").text(number);
     }
     });
    };
    function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "");
  }
   
   
   //스크롤
   count1();
   count2();
   count3();
   count4();
   
   });