<?php 
	$strTo = 'unplugged2d@gmail.com';
	$strSubject = 'หัวข้อ';
	$strHeader = "Content-type: text/html; charset=utf-8\r\n"; // or UTF-8 //
	// $strHeader .= "From: ".$_POST["txtFormName"]."<".$_POST["txtFormEmail"].">\r\nReply-To: ".$_POST["txtFormEmail"]."";
	$strMessage = "ภาษาไทย";
	$flgSend = @mail($strTo,$strSubject,$strMessage);  // @ = No Show Error //
	if($flgSend)
	{
		echo "Email Sending.";
	}
	else
	{
		echo "Email Can Not Send.";
	}
