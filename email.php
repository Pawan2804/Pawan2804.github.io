<?php
include "db_conn.php";

if(isset($_POST['Submit'])){
	 require 'PHPMailerAutoload.php';
	 require 'credential.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = Email;                 // SMTP username
$mail->Password = Password;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(Email, 'Pawan');
$mail->addAddress($_POST['Email'],);     // Add a recipient

$mail->addReplyTo(Email);

$mail->isHTML(true); // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    =$_POST['body'];
//$mail->AltBody = ;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
   Enter Your Email:<br>
  <input type="text" name="Email" placeholder="enter ur email">
  <br>
  Subject:<br>
  <input type="text" name="subject">
  <br>
  Body:<br>
  <textarea placeholder="body of EMAIL" rows="10" cols="50" name="body"></textarea>
  <br><br>
  <input type="Submit" name="Submit"> 
</form>
</body>
</html>