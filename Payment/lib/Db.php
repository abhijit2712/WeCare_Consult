<?php
$host = 'localhost:3307';
$user = 'root';
$pass = '';
$database = "doctors";
$database2 = "hospital";
$database3 = "patient";
$conn = mysqli_connect($host, $user, $pass, $database);
$conn2 = mysqli_connect($host, $user, $pass, $database2);
$conn3 = mysqli_connect($host, $user, $pass, $database3);


if ($conn) {

}
else {
    echo "unsucess";
}

if ($conn3) {

}
else {
    echo "f3";

}
?>