<? 
	session_start(); 
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

	$table = "concert"; //해당 게시판의 테이블명
/*실제 sql의 테이블을 불러오는게 아니고 변수를 만들어서 테이블을 담았기 때문에 변수 이름만 써도 됨, 
필드를 같이 쓰는 여러 게시판이 있다고 해도 테이블명만 바꾸면 되기 때문에 수정이 쉽다*/
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
       
</head>
<?
	include "../lib/dbconn.php";

    
   if (!$scale)
    $scale=10;			// 한 화면에 표시되는 글 수

    
    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}

		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
	}

	$result = mysql_query($sql, $connect);

	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;

?>
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
                        HOME &gt; 투자정보 &gt; <strong>해외사업</strong>
    </div>
        <h2>해외사업</h2>
        <p class="sub_txt"><span>세계 철강회사 1위</span>,
글로벌 기업으로 성장한 포스코의 해외 사업을 안내합니다.</p>
    </div>

    <div class="content_area">
  
	<div id="col2">        
    <div id="sch">
                 

                    
                <form  name="board_form" method="post" action="list.php?table=<?=$table?>&mode=search"> 
    
                    <label for="sfl" class="sound_only hidden">검색대상</label>
                    <select name="find" id="sfl">
                        <option value='subject'>제목</option>
                        <option value='name'>이름</option>
                    </select>
                
                    <label for="stx" class="sound_only hidden">검색어<strong class="sound_only"> 필수</strong></label>
                    <input type="text" name="search" value="" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
                    <div class="sch_btn"><input type="submit" value="검색"></input></div>
    
                </form>
                    
     </div>
                
				<div id="button">
				    <a href="list.php?table=<?=$table?>&page=<?=$page?>"><i class="fas fa-bookmark"></i>목록</a>
<?
	if($userid)
	{
?>
                    <a href="write_form.php?table=<?=$table?>"><i class="fas fa-pen-square"></i>글쓰기</a>
<?
	}
?>
				</div>








        
























		<form  name="board_form" method="post" action="list.php?mode=search"> 
		<div id="list_search">
			
            <select name="scale" onchange="location.href='list.php?scale='+this.value" class="show">
                <option value=''>보기</option>
                <option value='5'>5</option>
                <option value='10'>10</option>
                <option value='15'>15</option>
                <option value='20'>20</option>
            </select>
            <ul class="list_view">
                <li><a href="javascript:void(0);" class="view1 view"><i class="fas fa-list"></i></a></li>
                <li><a href="javascript:void(0);" class="view2 view"><i class="fas fa-th-large"></i></a></li>
            </ul>
		</div>
		</form>
		
		<div class="clear"></div>
		
		<div id="list_content">	

<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysql_data_seek($result, $i);       
      // 가져올 레코드로 위치(포인터) 이동  
      $row = mysql_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	  $item_num     = $row[num];
	  $item_id      = $row[id];
	  $item_name    = $row[name];
  	  $item_nick    = $row[nick];
	  $item_hit     = $row[hit];
      $item_date    = $row[regist_day];
	  $item_date = substr($item_date, 0, 10);  
	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);
      $item_content = str_replace(" ", "&nbsp;", $row[content]);
                                     
      if($row[file_copied_0]){ //첫번째 첨부 이미지가 있으면
        $item_img = './data/'.$row[file_copied_0];  //2020_10_12_10_40_56_0.jpg 년월일시분초
          // ./는 같은 경로라는 뜻인데 개발언어에서는 써주는 것이 좋음
      }else{ //첨부된 이미지가 없으면
        $item_img = './data/default.jpg';
      }
      
?>
			<div class="list_item">
                <div class="list_item1">
                    <a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><!--table=테이블 변수concert 넘겨주고&num과 page도 일반 게시판처럼 넘겨줌-->
                    <img src="<?=$item_img?>" alt=""> <!--썸네일크기-->
                    <dl>
                        <dt><?= $item_subject ?></dt>
                        <dd><?= $item_content ?></dd><dd>...</dd>
                    </dl>
                </a>
                </div>

                <div class="list_item2">
                    <ul>
                        <li>NUM: <?= $number ?> </li>
                        <li><i class="far fa-user"></i><?= $item_nick ?></li>
                        <li><i class="far fa-calendar-alt"></i><?= $item_date ?></li>
                        <li><i class="far fa-eye"></i> <?= $item_hit ?></li>
                    </ul>  
                </div>
			</div>
<?
   	   $number--;
   }
?>
			<div id="page_button">
            <div id="list_search1">TOTAL <?= $total_record ?>  &nbsp;&nbsp;|&nbsp;&nbsp; PAGE <?= $page ?></div>
				<div id="page_num"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
            
          if($mode=="search"){
             echo "<a href='list.php?page=$i&scale=$scale&mode=search&find=$find&search=$search'> $i </a>"; 
          }else{    
            
			  echo "<a href='list.php?page=$i&scale=$scale'> $i </a>";
           }
            
          
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>
				</div>			
                
			</div> <!-- end of page_button -->		
        </div> <!-- end of list content -->
		<div class="clear"></div>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->

</article>
<? include "../common/sub_foot.html" ?>
</div>
                <!--JQuery-->
              <script src="../common/js/jquery-1.12.4.min.js"></script>
              <script src="../common/js/jquery-migrate-1.4.1.min.js"></script>
              <script src="../common/js/fullnav.js"></script>
              <script src="./common/view.js"></script>
</body>
</html>