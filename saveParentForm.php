<?php
$studentName = $_POST["studentName"];
$studentPhone = $_POST["studentPhone"];
$studentArea = $_POST["studentArea"];
$studentArea2 = $_POST["studentArea2"];
$house = $_POST["house"];
$studentYear = $_POST["studentYear"];
$studentSubject = $_POST["hiddenStudentSubject"];
$studentRemark = $_POST["studentRemark"];

$email = "man0551hk@yahoo.com.hk";
$mail_header = "補習登記";
$text = "學生姓名:".$studentName."\r\n".
"聯絡電話".$studentPhone."\r\n".
"地區".$studentArea." ".$studentArea2." ".$house."\r\n".
"年級".$studentYear."\r\n".
"科目".$studentSubject."\r\n".
"備註".$studentRemark;

if (mail($email,$mail_header,$text,"Return-path:info@kits-tutor.com\r\n"."From:info@kits-tutor.com\r\n" .
			 "Reply-To:info@kits-tutor.com\r\n" .
			 "X-Mailer: PHP/" . phpversion()."\r\nContent-type: text/plain; charset=big5\r\n")==1)
			{
				echo ("Mail is sent <BR>");
			}
			else {
				echo ("Fail to send mail<BR>");
			}


?>