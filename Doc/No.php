<?php
 session_start();
  $docName=$_SESSION['username'];
?>

<?php
    include 'Connect.php';
    if(isset($_GET['Noid'])){
        $id=$_GET['Noid'];
        $sql="DELETE FROM `$docName` WHERE `$docName`.`sno` = $id";
        $result2=mysqli_query($conn2,$sql);
        if($result2){
            header('location:Doctor2.php');
        }else{
            echo "not working";
        }
    }
    ?>