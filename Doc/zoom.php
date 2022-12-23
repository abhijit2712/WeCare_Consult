<?php
session_start();
$docName;
$docName = $_SESSION['username'];
echo $docName;
include('zoom/config.php');
include('zoom/api.php');
include 'C:\xampp\htdocs\App\Doc\Connect.php';
$email = '';
$date = '';
$time = '';
$link = '';
$Zpass = '';
$Stime = '';
$Etime = '';
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
$DateTime = $date . " " . $time;
$arr['topic'] = 'Doctor Advice';
$arr['start_date'] = date($DateTime, );
$arr['duration'] = 40;
$arr['password'] = 'wecare';
$arr['type'] = '2';
$result = createMeeting($arr);
if (isset($result->id)) {
	$link = "Join URL: <a href='" . $result->join_url . "'>" . $result->join_url . "</a><br/>";
	$Zpass = "Password: " . $result->password . "<br/>";
	$Stime = $result->start_time . "<br/>";
	$Etime = "Duration: " . $result->duration . "<br/>";
}
else {
	echo '<pre>';
	print_r($result);
}
echo "From last line";
echo $email;
echo $link;
echo $Zpass;
echo $Stime;
echo $Etime;
$_SESSION['email'] = $email;
$_SESSION['link'] = $link;
$_SESSION['Zpass'] = $Zpass;
$_SESSION['Stime'] = $Stime;
$_SESSION['time'] = $Etime;
header('location:smtp/index.php');
?>