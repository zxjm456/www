<? 
	session_start();
    
      @extract($_POST);
      @extract($_GET);
      @extract($_SESSION);
       /*
        $userid = $_SESSION['userid']=> 가장중요
        $_SESSION['username']
        $_SESSION['usernick']
        $_SESSION['userlevel']

        $userid='green';
    */
?>

<!DOCTYPE html>
<html lang="Ko">
<head>
	<meta charset="UTF-8">
	<title>회원가입</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../common/css/common.css">
	<link rel="stylesheet" href="css/member_form.css">
	
	<script src="../common/js/prefixfree.min.js"></script>
    <script src="https://kit.fontawesome.com/2d56222f57.js" crossorigin="anonymous"></script>
    <script src="../common/js/jquery-1.12.4.min.js"></script>
    <script src="../common/js/jquery-migrate-1.4.1.min.js"></script>
    <!--[if IE9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script>
	 $(document).ready(function() {
  
   
 
 
		 
//nick 중복검사		 
$("#nick").keyup(function() {    // id입력 상자에 id값 입력시
    var nick = $('#nick').val();

    $.ajax({
        type: "POST",
        url: "check_nick.php",
        data: "nick="+ nick,  
        cache: false, 
        success: function(data)
        {
             $("#loadtext2").html(data);
        }
    });
});		 


});
	
	
	
	</script>
	<script>
   

  
   function check_input()
   {
      

      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("닉네임을 입력하세요");    
          document.member_form.nick.focus();
          return;
      }


      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit(); 
		   // modify.php 로 변수 전송
   }

   function reset_form()
   {
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
	  
      document.member_form.pass.focus();

      return;
   }
</script>
<?
    include "../lib/dbconn.php";

    $sql = "select * from member where id='$userid'"; //'green'을 담고 있다
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);

    $hp = explode("-", $row[hp]);
    $hp1 = $hp[0];
    $hp2 = $hp[1];
    $hp3 = $hp[2];

    $email = explode("@", $row[email]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysql_close();
?>


</head>
<body>
<article id="content">
	  
<div class="inner">
        
            <div class="top_us">
                <h3>Change Info</h3>
                <a href="../index.html" class="logo">로고</a>
            </div>

            <ul class="join_notice">
             <li>* 가입시 설정한 아이디와 이름은 변경이 불가능합니다.</li>
             <li>* 모든 항목은 <span>필수항목</span>입니다.</li>
         </ul>
        <form  name="member_form" method="post" action="modify.php"> 
            <ul class="list_wrap">
                <li class="form_row">
                    <ul>
                        <li class="tit">
                            <label for="id">ID</label>
                        </li>
                        <li style="font-size: 20px; padding-top: 20px; padding-left: 20px; font-weight: bold; color: #333;"> 
                            <?= $row[id] ?>
                        </li>
                    </ul>
                </li>
                <li class="form_row pw">
                    <ul>
                        <li class="tit">
                            <label for="pass">PASSWORD</label>
                        </li>
                        <li>
                            <input type="password" name="pass" id="pass" placeholder="비밀번호를 입력해주세요." required>
                        </li>
                    </ul>
                </li>
                <li class="form_row pw_check">
                    <ul>
                        <li class="tit">
                            <label for="pass_confirm">PW Confirm</label>
                        </li>
                        <li>
                            <input type="password" name="pass_confirm" id="pass_confirm" placeholder="비밀번호 확인"  required>
                        </li>
                    </ul>
                </li>
                <li class="form_row">
                    <ul>
                        <li class="tit">
                            <label for="name">NAME</label>
                        </li>
                        <li>
                            <input type="text" name="name" id="name"  value="<?= $row[name] ?>" required>
                        </li>
                    </ul>
                </li>
                <li class="form_row">
                    <ul>
                        <li class="tit">
                            <label for="nick">Nickname</label>
                        </li>
                        <li>
                             <input type="text" name="nick" id="nick" value="<?= $row[name] ?>" required>
                         <span id="loadtext2"></span>

                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="form_row tel push_15_t">
                    <ul>
                        <li class="tit">
                            <span>H.P.</span>
                        </li>
                        <li class="border-r-1">
                             <label class="hidden" for="hp1">전화번호앞3자리</label>
                    <select class="hp" name="hp1" id="hp1"  value="<?= $hp1 ?>"> 
                  <option value='010'>010</option>
                  <option value='011'>011</option>
                  <option value='016'>016</option>
                  <option value='017'>017</option>
                  <option value='018'>018</option>
                  <option value='019'>019</option>
                  </select> 
              

                        </li>
                        <li class="border-r-1">
                            <label class="hidden" for="hp2">전화번호중간4자리</label><input type="text" class="hp" name="hp2" id="hp2" value="<?= $hp2 ?>"  required>
                        </li>
                        <li>
                            <label class="hidden" for="hp3">전화번호끝4자리</label><input type="text" class="hp" name="hp3" id="hp3" value="<?= $hp3 ?>"  required>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="form_row email push_15_t">
                    <ul>
                        <li class="tit">
                            <span>이메일</span>
                        </li>
                        <li>
                          <label class="hidden" for="email1">이메일아이디</label>
                    <input type="text" id="email1" name="email1" value="<?= $email1 ?>"  required> <span>@ </span>
                    <label class="hidden" for="email2">이메일주소</label>
                    <input type="text" name="email2" id="email2" value="<?= $email2 ?>"  required>
                       </li>
                    </ul>
                </li>
            </ul>
            <ul class="button">
                <li class="join_btn"><a href="#" onclick="check_input()">정보수정</a></li>
                <li class="reset_btn"><a href="#" onclick="reset_form()">지우기</a></li>
            </ul>
        </form> 
    </div> 
	  
</article>
	 <? include "../common/subfoot.html" ?>
</body>
</html>


