<?php

if(isset($_POST["submit"]))
{

$to=$_POST['to_email'];
$subject=$_POST['subject'];
$msg=$_POST['message'];

$response['From']=$_POST['from_email'];
$response['To']=$_POST['to_email'];
$response['Subject']=$_POST['subject'];
$response['Message']=$_POST['message'];


function sanitize_my_email($field)
 {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL))
                 {
                    return true;
                    //$response['To']=$field;
                 }
             else 
                {
                    return false;
                }
 }

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
	$mail->Password = "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";
	$mail->SetFrom($_POST['from_email']);
	//$mail->addAttachment("dummy.pdf");
	//$mail->addAttachment("attach.txt");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
        $response['status']='True';
		echo $_POST['sender_name'].'  Your Mail Not sent';
        
		
	}else{
        $response['status']='False';
		echo $_POST['sender_name'].'  Your Mail sent successfully';
		

	}


    $secure_check = sanitize_my_email($to);
if ($secure_check == false) {
    echo "Invalid Email";
} else { 
    //send email 
     echo smtp_mailer($to,$subject,$msg);
    
}
}
echo json_encode($response);
}
?>