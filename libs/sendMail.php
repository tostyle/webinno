<?php  
	require_once('PHPMailer/PHPMailerAutoload.php');

	$mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "ttwtnt2d@gmail.com";
    $mail->Password = "tt2038353";
    $mail->CharSet = 'UTF-8';
    $mail->SetFrom("ttwtnt2d@gmail.com"); 

     $mail->Subject = 'สมัครงาน ตำแหน่ง '.$_POST['position'];
    $mail->Body = "<p>ชื่อ : {$_POST['registerName']}</p>";
    $mail->Body .= "<p>ที่อยู๋ : {$_POST['address']}</p>";
    $mail->Body .= "<p>เบอร์โทรศัพท์ : {$_POST['mobile']}</p>";
    $mail->Body .= "<p>อีเมล์ : {$_POST['email']}</p>";
    $mail->Body .= "<p>รายละเอียด : {$_POST['detail']}</p>";
    $mail->AddAddress('hr@inno.co.th');
    // $mail->Send();
         if( !$mail->Send() )
         {
         	echo 'mail senrdd';
         }
         else
         {
         	echo 'noetrnsetf'ว
         }