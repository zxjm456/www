/**옆으로 오는 메뉴**/
$(document).ready(function () {
    $('#content section:eq(0)').addClass('boxMove');
    //첫번째 내용글 애니메이션 처리
    var smh= $('.main').height();
    var h1= $('#content section:eq(1)').offset().top-500;
    var h2= $('#content section:eq(2)').offset().top-500;
    var h3= $('#content section:eq(3)').offset().top-500;
 
 
        //스크롤의 좌표가 변하면.. 스크롤 이벤트
    $(window).on('scroll',function(){
        var scroll = $(window).scrollTop();
        if(scroll>=0 && scroll<h1){
            $('#content section:eq(0)').addClass('boxMove');
        }else if(scroll>=h1 && scroll<h2){
            $('#content section:eq(1)').addClass('boxMove');
        }else if(scroll>=h2 && scroll<h3){
            $('#content section:eq(2)').addClass('boxMove');
        }else if(scroll>=h3){
            $('#content section:eq(3)').addClass('boxMove');
        }
    });
 });