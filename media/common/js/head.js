var op = false;  //네비가 열려있으면(true) , 닫혀있으면(false)
var scroll_onoff=0;
var mouse_onoff=0;

$(document).ready(function(){
    $(window).on('scroll',function(e){
        e.preventDefault();

        $('#headerArea').hover(
            function(){
                mouse_onoff=1;
                if(scroll_onoff==0){
                    $('#headerArea').css('background','rgba(0,0,0,.8)');
                }
            }, function(){
                mouse_onoff=0;
                if(scroll_onoff==0){
                    $('#headerArea').css('background','rgba(0,0,0,.0)');
                }
        });
        var scroll = $(window).scrollTop();
           
        if(scroll>600){
            scroll_onoff=1;
            $('#headerArea').css('background','rgba(0,0,0,.8)');
           

        }else{
            scroll_onoff=0;
            if(mouse_onoff==0){
                $('#headerArea').css('background','rgba(0,0,0,.0)');
            }
          
        }
    });

});



