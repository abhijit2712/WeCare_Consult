<?php include 'C:\xampp\htdocs\App\Doc\Connect.php';
session_start();
$docName;
$docName = $_SESSION['username'];
echo $docName ."<br>";
$email = $_SESSION['email'];
$link = $_SESSION['link'];
$Zpass = $_SESSION['Zpass'];
$Stime = $_SESSION['Stime'];
$Etime = $_SESSION['time'];

echo $email."<br>";
echo $link."<br>";



include('smtp/PHPMailerAutoload.php');
$html = 'Msg';
echo smtp_mailer('wecareweb1@gmail.com', 'subject', $html, $email, $link, $docName, $Zpass, $Stime, $Etime);
function smtp_mailer($to, $subject, $msg, $email, $link, $docName, $Zpass, $Stime, $Etime)
{
	$mail = new PHPMailer();
	$mail->SMTPDebug = 3;
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "wecareweb1@gmail.com";
	$mail->Password = "Yash@0493";
	$mail->SetFrom("wecareweb1@gmail.com");
	$mail->Subject = $subject = "Zoom Meeing";
	$mail->Body = $msg = $docName . " Confirm  your Appointment on: " . $Stime . "  " . $link . $Zpass . " Meeting ends in: " . $Etime . " Minutes";

	$mail->AddAddress($to = $email);
	$mail->SMTPOptions = array('ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => false,
		));
	if (!$mail->Send()) {
		echo $mail->ErrorInfo;
	}
	else {
		echo "<br> <br> <br>  <br> <br>";
		echo '<a href="/doc/zoom.php">zoom </a>';
		header('location:/App\Doc\Doctor2.php');
	}
}

?>