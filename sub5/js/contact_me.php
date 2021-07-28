<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['성함을 입력해주세요.']));
$email_address = strip_tags(htmlspecialchars($_POST['이메일 답변을위해 사용중인 이메일을 입력해주세요.']));
$phone = strip_tags(htmlspecialchars($_POST['이메일 답변후 문자를 통해 안내드립니다.']));
$message = strip_tags(htmlspecialchars($_POST['고객님의 문의 사항을 적어주시면 신속하게 답변드리겟습니다 감사합니다.']));
	
// Create the email and send the message
$to = 'zxjm456@naver.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: webmaster@master.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
