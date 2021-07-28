$(document).ready(function(){
    //스크롤 이벤트


    $(window).on('scroll',function(){
       var scroll = $(window).scrollTop();
        
        
        
        if(scroll>3360){
            $('.top_left').css('top',0);
        }
        else{
            $('.top_left').css('top',-650);
        }

        if(scroll>3260){
            $('.top_mid').css('top',-110);
        }
        else{
            $('.top_mid').css('top',-650);
        }

        if(scroll>3160){
            $('.top_right').css('top',-110);
        }
        else{
            $('.top_right').css('top',-650);
        }
    });
    
    $('.top_btn').click(function(e){
        e.preventDefault();
        //탑버튼 클릭 시 탑으로 이동
        $("html,body").stop().animate({"scrollTop":0},1500); 
    });
});