<? 
	session_start();
	
	@extract($_POST);
	@extract($_GET);
	@extract($_SESSION);

	/*
		$_SESSION['userid']
		$_SESSION['username']
		$_SESSION['usernick']
		$_SESSION['userlevel']

		$num=1  (나야나~~~~~)
        $page=1
	*/

	include "../lib/dbconn.php";

	$sql = "select * from greet where num=$num";
	$result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	$item_num     = $row[num];
	$item_id      = $row[id];
	$item_name    = $row[name];
  	$item_nick    = $row[nick];
	$item_hit     = $row[hit];

    $item_date    = $row[regist_day];

	$item_subject = str_replace(" ", "&nbsp;", $row[subject]);

	$item_content = $row[content];
	$is_html      = $row[is_html];

	if ($is_html!="y")
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}	

	$new_hit = $item_hit + 1;

	$sql = "update greet set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
	mysql_query($sql, $connect);
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
    <link rel="stylesheet" href="view.css">
    <script src="../common/js/prefixfree.min.js"></script>
    <script>
    function del(href) 
    {
        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                document.location.href = href; //'delete.php?num=1'
        }
    }
    </script>
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
                <div id="view_title">
                    <div id="view_title1">
                        <?= $item_subject ?>
                    </div>
                    <ul id="view_title2">
                        <li><i class="fas fa-user-alt"></i><?= $item_nick ?></li>
                        <li><?= $item_date ?></li>
                        <li><i class="fas fa-eye"></i>조회 : <?= $item_hit ?></li>
                    </ul>
                </div>

                <div id="view_content">
                    <?= $item_content ?>
                </div>

                <div id="view_button">
                    <a href="list.php?page=<?=$page?>"><i class="fas fa-bookmark"></i>목록</a>&nbsp;
                    <? 
                        if($userid==$item_id || $userlevel==1 || $userid=="master")
                        {
                    ?>
                                    <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>"><i class="fas fa-exchange-alt"></i>수정</a>&nbsp;
                                    <a href="javascript:del('delete.php?num=<?=$num?>')"><i class="fas fa-cut"></i>삭제</a>&nbsp;
                    <?
                        }
                    ?>

                    <? 
                        if($userid )
                        {
                    ?>
                                    <a href="write_form.php"><i class="fas fa-pen-square"></i>글쓰기</a>
                    <?
                        }
                    ?>
                </div>
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