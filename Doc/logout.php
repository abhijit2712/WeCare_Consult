<?php 
session_start();
session_unset();
session_destroy();
header("location:login.php");
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Logout</title>
</head>

<body>
    <?php require 'Partial/_nav.php' ?>
    <?php require 'Partial/_nav.php' ?>
    <h1>Logout</h1>
</body>

</html>