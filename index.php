<?php 
$to_email="sec19cs080@sairamtap.edu.in";
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
echo "\n";
echo  "$k1";
?>
