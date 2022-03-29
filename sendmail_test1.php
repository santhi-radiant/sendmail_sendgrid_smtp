<?php 
$html='<h2>Hello Santhi--success !</h2>';
echo smtp_mailer('santhi.g@radiantcloud.co','Test mail using SMTP MAILER',$html);
function smtp_mailer($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	$mail->Host = "smtp.sendgrid.net";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "apikey";
	$mail->Password = "";
	$mail->SetFrom("santhi.g@radiantcloud.co");
	$mail->addAttachment("dummy.pdf");
	$mail->addAttachment("attach.txt");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		echo 'Mail Not sent';
		//return 0;
	}else{
		echo 'Mail sent successfully';
		//return 1;

	}
}

?>

