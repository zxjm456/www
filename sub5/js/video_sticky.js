$(document).ready(function(){

    var $content = $('.content_area  .wrap');
    $(window).scroll(function(){
        if($(this).scrollTop() > 715){
            $content.addClass('sticky').offset();
        }else{
            $content.removeClass('sticky').offset();
        }
        });
    });
