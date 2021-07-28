<? session_start(); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>포스코케미칼-로그인</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../common/css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/2d56222f57.js" crossorigin="anonymous"></script>
    <script src="../common/js/prefixfree.min.js"></script>
    <!--[if IE9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="log_inner">
        <div class="inner">
            <div class="login_top">
                <h2>Login</h2>
                <a href="../index.html" class="form_logo">포스코케미칼</a>
            </div>
            <form  name="member_form" method="post" action="login.php">     
                <div id="login_form">
                    <div class="id_pw_input">
                        <ul>
                            <li>
                            <label for="id" class="hidden">ID</label>
                            <input type="text" name="id" class="login_input" placeholder="아이디를 입력해주세요.">
                            </li>
                            <li>
                            <label for="pass" class="hidden">PASSWORD</label>
                            <input type="password" name="pass" class="login_input" placeholder="비밀번호를 입력해주세요.">
                            </li>
                        </ul>						
                    </div>
                    <div class="login_button">
                        <input type="submit" value="login">
                        <a href="javascript: void();" onclick="join_cancel()">취소</a>
                    </div>
                    <ul class="find_idpw">
                        <li><i class="fas fa-lock"></i>보안접속</li>
                        <li>
                            <span><a href="id_find.php">아이디 찾기</a></span>
                            <span><a href="pw_find.php">비밀번호 찾기</a></span>
                        </li>
	                </ul>
                    <div class="join_button">
                        <span>JOIN US</span>
                        <p>포스코 케미칼 회원이 아니신가요?<br>회원가입을 통해 다양한 정보를 확인하세요.</p>
                        <a href="../member/member_check.html">회원가입</a>
                    </div>
                    <div  class="login_banner">
                        <p>포스코케미칼의 더욱 다양한 네트워크를 보여드립니다.</p>
                        <a href="../sub3/sub3_1.html" class="banner_more"><i class="fas fa-plus"></i></a>
                    </div>
            </div>
            
       </form>
             </div>
    </div>
</body>
</html>