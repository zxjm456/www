$(document).ready(function(){
    //스크롤 이벤트


    
    $('.top_btn').click(function(e){
        e.preventDefault();
        //탑버튼 클릭 시 탑으로 이동
        $("html,body").stop().animate({"scrollTop":0},1500); 
    });
});