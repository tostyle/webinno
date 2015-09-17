<?php   
	require_once('PHPMailer/PHPMailerAutoload.php');
    include('connect.php');
	$mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "innovation.inno@gmail.com";
    $mail->Password = "inno";
    $mail->CharSet = 'UTF-8';
    $mail->SetFrom("innovation.inno@gmail.com"); 

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
            $result['error']=true;
         	
           
         }
         else
         {
         	$result['success']=true;
             $sql="INSERT INTO career (name,position,address,mobile,email,portfolio,send_date) VALUES 
                (:name,:position,:address,:mobile,:email,:portfolio,CURDATE())";
            $query = $db->prepare($sql);
             $query->bindParam(':name'     , $_POST['registerName']);
             $query->bindParam(':position' , $_POST['position']);
             $query->bindParam(':address'  , $_POST['address']);
             $query->bindParam(':mobile'   , $_POST['mobile']);
             $query->bindParam(':email'    , $_POST['email']);
             $query->bindParam(':portfolio', $_POST['detail']);
             $query->execute();
         }
         echo json_encode($result);