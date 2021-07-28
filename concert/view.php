<? 
	session_start(); 
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
//table=concert & num=2 & page=1
	include "../lib/dbconn.php";

	$sql = "select * from $table where num=$num";
	$result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	$item_num     = $row[num];
	$item_id      = $row[id];
	$item_name    = $row[name];
  	$item_nick    = $row[nick];
	$item_hit     = $row[hit];

	$image_name[0]   = $row[file_name_0];  //첨부파일의 실제이름
	$image_name[1]   = $row[file_name_1];
	$image_name[2]   = $row[file_name_2];


	$image_copied[0] = $row[file_copied_0];    //날싸시간으로 바뀐이름 => 실제로 서브에 저장되는 파일명
	$image_copied[1] = $row[file_copied_1];
	$image_copied[2] = $row[file_copied_2];

    $item_date    = $row[regist_day];
	$item_subject = str_replace(" ", "&nbsp;", $row[subject]);

	$item_content = $row[content];
	$is_html      = $row[is_html];

	if ($is_html!="y")
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}
	
	for ($i=0; $i<3; $i++) //첨부된 이미지 처리를 위한 반복문
	{
		if ($image_copied[$i]) //업로드한 파일이 존재하면 0 1 2
		{
			$imageinfo = GetImageSize("./data/".$image_copied[$i]);
            //GetImageSize(서버에 업로드된 파일 경로 파일명) => 배열형태의 리턴값이 됨
            /*=> GetImageSize에서 사이즈 하나만 넘어가는것이 아니라
            파일의 너비와 높이값, 종류(jpg,png,mp4,zip,...) : 이렇게 3가지가 순서대로 넘어감*/
            
			$image_width[$i] = $imageinfo[0];  //파일너비:이미지가 안깨져야함
			$image_height[$i] = $imageinfo[1]; //파일높이
			$image_type[$i]  = $imageinfo[2];  //파일종류

        if ($image_width[$i] > 785) //첨부된 이미지의 최대 폭 너비
				$image_width[$i] = 785;
		}
		else //첨부된 이미지가 없으면 모두 null값
		{
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i]  = "";
		}
	}

	$new_hit = $item_hit + 1;

	$sql = "update $table set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
	mysql_query($sql, $connect);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>포스코케미칼-해외투자</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../common/css/common.css">
    <link rel="stylesheet" href="./common/sub4common.css">
    <link rel="stylesheet" href="./css/news.css">
    <script src="../common/js/prefixfree.min.js"></script>
    <script src="https://kit.fontawesome.com/f8a0f5a24e.js" crossorigin="anonymous"></script>
    <!--[if IE9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->  
    <script>
        function del(href) 
        {
            if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                    document.location.href = href;
            }
        }
    </script>
    
</head>
<body>
<? include "../common/sub_head.html" ?>
 <div class="wrap">
        <!--서브 헤더-->
        <? include "../common/sub_head.html" ?>
        <div class="visual">
            <img src="./common/investment.png" alt="4서브페이지 비주얼">
        </div>
        <div class="sub_menu">
            <h3>투자정보</h3>
            <p>investment information<br />service</p>
            <div class="right_line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul>
                <li><a href="./sub4_1.html">IR 기업이념</a></li>
                <li><a href="./sub4_2.html">재무정보</a></li>
                <li class="overview"><a href="../concert/list.php">해외사업</a></li>
            </ul>
            <div class="left_line">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
<article id="content">
    <div class="title_area">
        <div class="line_map">
            <span>HOME</span>&gt;<span>소식 / 홍보</span>&gt;<strong>새소식</strong>
        </div>
        <h2>해외사업</h2>
		<p class="sub_txt"><span>세계 철강회사 1위</span>,
글로벌 기업으로 성장한 포스코의 해외 사업을 안내합니다.</p>
    </div>
<div class="content_area">
<div id="col2">
        <div id="view_title">
			<div id="view_title1"><?= $item_subject ?></div><div id="view_title2"><i class="fas fa-user"></i><?= $item_nick ?>  |  <?= $item_date ?> </div>
			<div id="hit_title"><i class="fas fa-eye">조회수: </i> <?= $item_hit ?></div>
		</div>

		<div id="view_content">
            
<?
	for ($i=0; $i<3; $i++)  //업로드된 이미지를 출력한다
	{
		if ($image_copied[$i])
		{
			$img_name = $image_copied[$i]; //2019_03_22_10_07_15_0.jpg
			$img_name = "./data/".$img_name; 
             // ./data/2019_03_22_10_07_15_0.jpg => 경로까지 더한 애가 최종으로 들어
			$img_width = $image_width[$i];
			
			echo "<img src='$img_name' width='$img_width' alt=''>"."<br><br>";
		}
	}
?>
			<?= $item_content ?>
		</div>

		<div id="view_button">
				<a href="list.php?table=<?=$table?>&page=<?=$page?>"><i class="fas fa-bookmark"></i>목록</a>&nbsp;
<? 
	if($userid==$item_id || $userid=="master" || $userlevel==1 )
	{
?>
				<a href="write_form.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>"><i class="fas fa-exchange-alt"></i>수정</a>&nbsp;
				<a href="javascript:del('delete.php?table=<?=$table?>&num=<?=$num?>')"><i class="fas fa-cut"></i>삭제</a>&nbsp;
<?
	}
?>
<? 
	if($userid)
	{
?>
				<a href="write_form.php?table=<?=$table?>"><i class="fas fa-pen-square"></i>글쓰기</a>
<?
	}
?>
		</div>

		<div class="clear"></div>

	</div> <!-- end of col2 -->

</div>
</article>

<? include "../common/sub_foot.html" ?>   
</div>
                <!--JQuery-->
                <script src="../common/js/jquery-1.12.4.min.js"></script>
              <script src="../common/js/jquery-migrate-1.4.1.min.js"></script>
              <script src="../common/js/fullnav.js"></script>
</body>
</html>