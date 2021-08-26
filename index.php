<?php 
require 'class/class.phpmailer.php';
$mail=new PHPMALIER;
$mail->IsSMTP();
$mail->Host='smtpout.secureserver.net';
$mail->Port='80';
$mail->SMTPAuth=true;
$mail->Username='karthi@ info';
$mail->Password='password';
$mail->SMTPSecure='';
$mail->From='karthi@info';
$mail->FromName='karthi';
$mail->AddAddress('karthi');
$mail->IsHTML(true);
$mail->Subject='password';
$message_body='otp';
$mail->Body=$message_body;
if($mail->send())
{
	echo "Success";
}
else{
	echo "fail";
}


/*$to_email="sec19cs080@sairamtap.edu.in";
$subject="To learn";
$body="Hi, This is sample email";
$headers="From: deepdrones@gmail.com";
if(mail($to_email,$subject,$body,$headers)){
	echo "Email successfully sent to $to_email...";
}
else{
	echo "Failed";
}
$karthi=md5("karthi");
$k1=md5("karthi");
echo "$karthi";
?>
<html>
<br>
</html>
<?php
echo  "$k1";
*/
?>
