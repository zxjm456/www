<meta charset="utf-8">
<?
   
   @extract($_POST); //값을 입력하지 않았다면
   @extract($_GET);
   @extract($_SESSION);
    //$id='a';

    if(!$id) 
   {
      echo("아이디를 입력하세요.");
   }
   else    //아이디 값을 입력했다면
   {
      include "../lib/dbconn.php";
 
      $sql = "select * from member where id='$id' ";

      $result = mysql_query($sql, $connect);
      $num_record = mysql_num_rows($result);


     
      if ($num_record)  //아이디 중복이 잇으면
      {
       
         echo "<span style='color:red'>다른 아이디를 사용하세요.</span>";
      }
      else  //중복된 아이가 없으면
      {
         echo "<span style='color:skyblue'>사용가능한 아이디입니다.</span>";
      }
    
 
      mysql_close();
   }

?>

