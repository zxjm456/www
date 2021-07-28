<?
   function latest_article($table, $loop, $char_limit, $cnt) 
   {
		include "dbconn.php";

		$sql = "select * from $table order by num desc limit $loop";
		$result = mysql_query($sql, $connect);

		while ($row = mysql_fetch_array($result))
		{
			$num = $row[num];
			$len_content = strlen($row[content]);
			$len_subject = strlen($row[content]);
			$subject = $row[subject];
			$content = $row[content];

			if ($len_content > $char_limit)   //제목의 길이가 지정한 길이보다 크면
			{
				$content = mb_substr($row[content], 0, 30, 'utf-8');   // 첫번째 문자부터 $char_limit만큼 잘라낸다.
                                                  //mb_substr 은 입력받은 문자열을 정해진 길이만큼 잘라서 리턴하는데 
                                                  //2byte 문자인 한글에 대해서도 처리가 가능한 함수입니다. 

				$content = $content."...";   // 잘라낸 문자열에 ...을 추가한다.
			}
			if ($len_subject > $char_limit)
			{
                $subject = mb_substr($subject, 0, $char_limit, 'utf-8');
				$subject = $subject."...";
			}





			if($cnt==2){
				$file_copied = $row[file_copied_0];  //2021_07_23_09_37_02_0.jpg 
				if($file_copied){  //첨부된 첫번째 이미지가 있으면
				   $file_copied = './'.$table.'/data/'.$file_copied; // './concert/data/2021_07_23_09_37_02_0.jpg' 
				}else{  // 첨부된 이미지가 없으면
				   $file_copied = './'.$table.'/data/default.jpg';
				}	
			 }
			$regist_day = substr($row[regist_day], 0, 10);
			
			if($cnt==1){
				echo "      
				<li>
					<a href='./$table/view.php?table=$table&num=$num'>
						<span>$regist_day</span>
						<p>$subject</p>
						<p>$content</p>	
					</a>
				</li>
				";
		}else if($cnt==2){
				echo "      
					<li>
						<a href='./$table/view.php?table=$table&num=$num'>
						   <img src='$file_copied' width='270' height='200'>
						   
						   <span>$regist_day</span>
						   <p>$subject</p>
						   <p>$content</p>
						   
							
						</a>
					</li>
				";
			}
		}
		mysql_close();
   }
?>