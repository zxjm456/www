$(document).ready(function(){
    $('.eventSlideMenu ul li span').mouseenter(function(event){
       var $target=$(event.target);

if($target.is('.eventSlideMenu .buttonMenu01')){
     $('.eventSlideMenu .img02').animate({left:[550,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img03').animate({left:[730,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img04').animate({left:[910,'easeOutQuad']},450).clearQueue();
}else if($target.is('.buttonMenu02')){
     $('.eventSlideMenu .img02').animate({left:[180,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img03').animate({left:[730,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img04').animate({left:[910,'easeOutQuad']},450).clearQueue();
}else if($target.is('.buttonMenu03')){
     $('.eventSlideMenu .img02').animate({left:[180,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img03').animate({left:[360,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img04').animate({left:[910,'easeOutQuad']},450).clearQueue();
}else if($target.is('.buttonMenu04')){
     $('.eventSlideMenu .img02').animate({left:[180,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img03').animate({left:[360,'easeOutQuad']},450).clearQueue();
     $('.eventSlideMenu .img04').animate({left:[540,'easeOutQuad']},450).clearQueue();
}
    });
 });