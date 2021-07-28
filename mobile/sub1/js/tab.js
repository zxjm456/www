$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        autoHeight: true,
        speed : 500,
        onSlideChangeStart : function() {
            
            $(".tabs .active").removeClass('active');
            
            $(".tabs a").eq(swiper.activeIndex).addClass('active');
        }
    });
    
    $(".tabs a").on('touchstart mousedown', function(e) {
        e.preventDefault();
        
        $(".tabs .active").removeClass('active');
        
        $(this).addClass('active');

        //swiper.swipeTo($(this).index());					
        swiper.slideTo($(this).index());
    });
    
    $(".tabs a").click(function(e) {
    
        e.preventDefault();
    
    });
});