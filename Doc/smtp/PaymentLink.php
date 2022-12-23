<?php 

session_start();
$docName;
$docName = $_SESSION['username'];
echo $docName;
include 'C:\xampp\htdocs\App\Doc\Connect.php';
$email = '';
$date = '';
$time = '';
$str="http://localhost/aPP/Payment/TxnTest.php";
//$link = "Payment URL: <a href='" . $str. "'>" .$str . "</a><br/>";
$link = "Join URL: <a href='" . $str. "'>" . $str. "</a><br/>";



if (isset($_GET['Yesid']) || ($_GET['date'])) {
	$id = $_GET['Yesid'];
	echo $id . "<br>";
	$sql = "SELECT * FROM `$docName` WHERE `sno` = $id";
	$result2 = mysqli_query($conn2, $sql);
	if ($result2) {
		while ($row = mysqli_fetch_assoc($result2)) {
			$email = $row['email'];
			$date = $row['date'];
			$time = $row['time'];
		}
	}
	else {
		echo "not connectd";
	}
}


include('smtp/PHPMailerAutoload.php');
$html = 'Msg';
echo smtp_mailer('wecareweb1@gmail.com', 'subject', $html, $email, $docName,$link);
function smtp_mailer($to, $subject, $msg, $email, $docName,$link)
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
	$mail->Subject = $subject = "Payment Link";
	$mail->Body = $msg = $link;

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