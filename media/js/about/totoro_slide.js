$(document).ready(function(){
    //스크롤 이벤트


    $(window).on('scroll',function(){
       var scroll = $(window).scrollTop();
        if(scroll>700){
            $('.totoro .slide_img').css('left','42%');
        }
        else{
            $('.totoro .slide_img').css('left',-500);
        }
    });
    $('.top_btn').click(function(e){
        e.preventDefault();
        //탑버튼 클릭 시 탑으로 이동
        $("html,body").stop().animate({"scrollTop":0},1500); 
    });
});




$(document).ready(function(){
    //스크롤 이벤트
    $(window).on('scroll',function(){
       var scroll = $(window).scrollTop();
        if(scroll>1485){
            $('.momono .slide_img').css('right','38%');
        }
        else{
            $('.momono .slide_img').css('right',-500);
        }
    });

});

$(document).ready(function(){
    //스크롤 이벤트
    $(window).on('scroll',function(){
       var scroll = $(window).scrollTop();
        if(scroll>2085){
            $('.sen .slide_img').css('left','40%');
        }
        else{
            $('.sen .slide_img').css('left',-500);
        }
    });

});