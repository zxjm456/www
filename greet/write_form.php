<? 
	session_start(); 

	@extract($_POST);
	@extract($_GET);
	@extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="Ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>포스코케미칼 고객센터</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../common/css/common.css">
    <link rel="stylesheet" href="./common/css/sub5common.css">
    <link rel="stylesheet" href="write_form.css">
    <script src="../common/js/prefixfree.min.js"></script>

        <!--[if IE 9]>  
          <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
</head>
<body>
    <div class="wrap">
        <!--서브 헤더-->
        <? include "../common/sub_head.html" ?>
        <div class="visual">
            <img src="./common/images/sub5_bg.jpg" alt="5서브페이지 비주얼">
        </div>
        <div class="sub_menu">
            <h3>고객센터</h3>
            <p>Service center<br />service</p>
            <div class="right_line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul>
                <li class="overview"><a href="./sub5_1.html">공지사항</a></li>
                <li><a href="./sub5_2.html">고객문의</a></li>
                <li><a href="./sub5_3.html">홍보영상</a></li>
                <li><a href="./sub5_4.html">채용FAQ</a></li>
            </ul>
            <div class="left_line">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <article id="content">
            <div class="title_area">
                <div class="inner">
                    <div class="line_map">
                        HOME &gt; 회사소개 &gt; <strong>기업개요</strong>
                    </div>
                    <h2>공지사항</h2>
                    <p class="sub_txt"><span>포스코케미칼</span>는 지역사회와 함께 성장하는 것을 기업의 사회적 책임으로 생각하고,<br>
다양한 사회문제 해결을 통해 기업과 사회가 함께
발전하는 모델을 제시하기 위해 노력하고 있습니다.</p>
                </div>
            </div>
            <div class="content_area">


        <form  name="board_form" method="post" action="insert.php"> 
            <div id="write_form">
                <div class="write_line"></div>
                <div id="write_row1">
                    <div class="col1"><i class="fas fa-user-alt"></i> 닉네임 :</div>
                    <div class="col2"><?=$usernick?></div>
                    <div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
                </div>

                <div class="write_line"></div>
                <div id="write_row2">
                    <div class="col1"> 제목 </div>
                    <div class="col2"><input type="text" name="subject" placeholder="제목을 입력해주세요"></div>
                </div>
                <div class="write_line"></div>
                <div id="write_row3">
                    <div class="col1"><i class="fas fa-comments"></i>내용</div>
                    <div class="col2">
                        <textarea rows="15" cols="79" name="content"></textarea>
                    </div>
                </div>

                <div class="write_line"></div>
            </div>

            <div id="write_button">
                <input type="submit" value="확인">&nbsp;
                <a href="list.php?page=<?=$page?>"><i class="fas fa-bookmark"></i>목록</a>
            </div>
		</form>




            </div>
        </article>
        <!--서브푸터영역-->
        <? include "../common/sub_foot.html" ?>
    </div>
              <!--JQuery-->
              <script src="../common/js/jquery-1.12.4.min.js"></script>
              <script src="../common/js/jquery-migrate-1.4.1.min.js"></script>
              <script src="../common/js/fullnav.js"></script>
</body>
</html>