



$(document).ready(function () {
    $('.tabs .change .cont:eq(0)').show();  //첫번째 탭 내용만 열어라

    $('.video .change li a').click(function(){
       
        
        var ind = $('.video .change li a').index(this) + 1;

        $(".tabs .change .cont").hide(); //모든 탭내용을 숨긴다.
        $(".tabs .change .cont:eq("+ind+")").fadeIn(); //클릭한 해당 탭 내용만 보여라 

    });
});