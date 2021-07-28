<?
	session_start();
    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION);  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>포스코케미칼-아이디찾기</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../common/css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/2d56222f57.js" crossorigin="anonymous"></script>
    <script src="../common/js/jquery-1.12.4.min.js"></script>
    <script src="../common/js/jquery-migrate-1.4.1.min.js"></script>
<script>
	$(document).ready(function() {

         $(".find").click(function() {    // id입력 상자에 id값 입력시
            var name = $('.find_input').val(); //aaa
            var hp1 = $('#hp1').val(); 
            var hp2 = $('#hp2').val(); 
            var hp3 = $('#hp3').val(); 

            $.ajax({
                type: "POST",
                url: "find.php", /*매개변수인 check_id.php파일을 post방식으로 넘기세요*/
                data: "name="+ name+ "&hp1="+hp1+ "&hp2="+hp2+ "&hp3="+hp3,  /*매개변수id도 같이 넘겨줌*/
                cache: false, 
                success: function(data) /*이 메소드가 완료되면 data라는 변수 안에 echo문이 들어감*/
                {
                     $("#loadtext").html(data); /*span안에 있는 태그를 사용할것이기 때문에 html 함수사용*/
                }
            });
             
            $("#loadtext").addClass('loadtexton');
        }); 

    });
</script>
</head>
<body>
    <div class="log_inner">
        <div class="inner">
        
	<div id="col2">
        <form name="find" method="get" action="find.php"> 

        <div class="login_top">
                <h2>Find ID</h2>
                <a href="../index.html" class="form_logo">포스코케미칼</a>
        </div>
		
       
		<div id="login_form">
			 <div class="clear"></div>

			 <div id="login2">
				<div id="id_input_button">
					<fieldset>
                        <input type="text" name="name" class="find_input" placeholder="이름을 입력해주세여">
                        <div class="telBox">
                            <label class="hidden" for="hp1">연락처 앞3자리</label>
                            <select name="hp1" id="hp1" title="휴대폰 앞3자리를 선택하세요." class="find_input">
                                <option>010</option>
                                <option>011</option>
                                <option>016</option>
                                <option>017</option>
                                <option>018</option>
                                <option>019</option>
                            </select> ㅡ
                            <label class="hidden" for="hp2">연락처 가운데3자리</label>
                            <input class="find_input" type="text" id="hp2" name="hp2" title="연락처 가운데3자리를 입력하세요." maxlength="4" placeholder="번호 4자리를 입력해주세요"> ㅡ
                            <label class="hidden" for="hp3">연락처 마지막3자리</label>
                            <input class="find_input" type="text" id="hp3" name="hp3" title="연락처 마지막3자리를 입력하세요." maxlength="4" placeholder="번호 4자리를 입력해주세요">
                        </div>
                            <div class="go">
                                <input type="button" value="아이디찾기" class="find">
                                <div class="log_go"><a href="login_form.php">login</a></div>
                            </div>
                    </fieldset>

                    <span id="loadtext"></span>

                    
                        
                        <div class="find_idpw">
                            <p>비밀번호를 잊으셨나요?</p>
                            <a href="pw_find.php">비밀번호 찾기</a>
                        </div>
                    

				</div>
				<div class="clear"></div>
				
                <div id="login_line"></div>
				<div class="join_button">
                        <span>JOIN US</span>
                        <p>포스코 케미칼 회원이 아니신가요?<br>회원가입을 통해 다양한 정보를 확인하세요.</p>
                        <a href="../member/member_check.html">회원가입</a>
                </div>
                <div  class="id_banner">
                        <p>포스코케미칼의 더욱 다양한 네트워크를 보여드립니다.</p>
                        <a href="../sub3/sub3_1.html" class="banner_more"><i class="fas fa-plus"></i></a>
                </div>
			 </div>			 
		</div> <!-- end of form_login -->

	    </form>
	</div> <!-- end of col2 -->
</div>
</div> <!-- end of wrap -->
</body>
</html>