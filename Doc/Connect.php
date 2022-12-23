<?php
$host = 'localhost:3307';
$user = 'root';
$pass = '';
$hospital = "hospital";
$database = "doctors";
$conn = mysqli_connect($host, $user, $pass, $database); //creting a connection obj using db hospital
$conn2 = mysqli_connect($host, $user, $pass, $hospital); ///creting a connection obj using db doctors
?>