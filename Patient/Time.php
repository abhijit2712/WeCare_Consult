<?php
include 'Connect.php';
?>
<?php

$sql = "SELECT * FROM `dr.rajvardhan shelke`";
$result = mysqli_query($conn2, $sql);



$sql2 = "SELECT * FROM `dr.anish giri`";
$result2 = mysqli_query($conn2, $sql2);


$sql3 = "SELECT * FROM `dr.vidit gujrathi`";
$result3 = mysqli_query($conn2, $sql3);


$sql4 = "SELECT * FROM `dr.anand mahajan`";
$result4 = mysqli_query($conn2, $sql4);





if ($result) {
    while ($row = mysqli_fetch_assoc($result)) { 
        $date = $row['date'];
        $time = $row['time'];
        array_push($times,$time);        
    }
}



if ($result2) {
    while ($row = mysqli_fetch_assoc($result2)) { 
        $date = $row['date'];
        $time = $row['time'];
        array_push($times,$time);        
    }
}


if ($result3) {
    while ($row = mysqli_fetch_assoc($result3)) { 
        $date = $row['date'];
        $time = $row['time'];
        array_push($times,$time);        
    }
}



if ($result4) {
    while ($row = mysqli_fetch_assoc($result4)) { 
        $date = $row['date'];
        $time = $row['time'];
        array_push($times,$time);        
    }
}




function CheckTime($times,$slot){
    for($i=0;$i<count($times);$i++){
        if($slot==$times[$i]){
          echo 'disabled';
        }
    }
}




?>