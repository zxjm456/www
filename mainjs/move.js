// JavaScript Document

$(document).ready(function() {
	var timeonoff;   //타이머 처리
	var imageCount=3;   //이미지개수
	var cnt=1;   //이미지 순서 1 2 3 4 5 1 2 3 4 5....
	var onoff=true; // true=>타이머 동작중 , false=>동작하지 않을때

	$('.gallery .link1').fadeIn('slow'); //첫번째 이미지 보인다..\
	$('.inner').css('background','url(./images/thumb_1.png)'); //자신만 이미지가 보인다..
	$('.inner').hide().fadeIn('slow');

	function moveg(){
			
		cnt++;  //카운트 1씩 증가.. 5가되면 다시 초기화 0  1 2 3 4 5 1 2 3 4 5..
	
		$('.gallery ul li').hide();//위에 for 문이랑 같음
		$('.gallery .link'+cnt).fadeIn('fast'); //자신만 이미지가 보인다..

		$('.inner').css('background','url(./images/thumb_'+cnt+'.png)');
        $('.inner').hide().fadeIn('slow');

		if(cnt==imageCount)cnt=0;  //카운트 초기화
	}
	timeonoff= setInterval( moveg , 4000);// 타이머를 동작 1~5이미지를 순서대로 자동 처리

	$('.main .btnRight').click(function(){
		clearInterval(timeonoff); 
		cnt++;

        $('.gallery ul li').hide();//위에 for 문이랑 같음
		$('.gallery .link'+cnt).fadeIn('fast'); //자신만 이미지가 보인다..

		$('.inner').css('background','url(./images/thumb_'+cnt+'.png)');
        $('.inner').hide().fadeIn('slow');

        if(cnt==imageCount)cnt=0;

		timeonoff= setInterval( moveg , 4000);
	});

});








	


