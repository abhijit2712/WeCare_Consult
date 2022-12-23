<?php

session_start();
$link = $_SESSION['zoomLink'];
$Zpasswords = $_SESSION['Password'];

echo $link;
echo $Zpasswords;
?>