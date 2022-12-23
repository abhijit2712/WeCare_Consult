

<?php


$host = 'localhost:3307';  
$user = 'root';  
$pass = '';  
$hospital="hospital";
$database = "doctors";
$conn = mysqli_connect($host, $user, $pass, $database);
$conn2=mysqli_connect($host, $user, $pass, $hospital);

if($conn){
}else{
    echo "Connection unsuccesfull";
}

?>