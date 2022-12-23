<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    .movecenter {
        display: flex;
        justify-content: center;
    }
    </style>
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $time = $_POST['Time'];

  session_start();
  $doctor=$_SESSION['Doctorname'];
  $date=$_SESSION['date'];

  $host = 'localhost:3307';
  $user = 'root';
  $pass = '';
  $database = "hospital";
  $conn = mysqli_connect($host, $user, $pass, $database);
  $sql = "INSERT INTO `$doctor` ( `name`, `email`, `date`, `time`) VALUES ('$name', '$email', '$date', '$time')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo'<div class="alert alert-success" role="alert">
        <strong>Success</strong> Your Entry has submitted succesfully!
        </div>';
  } else {
    echo mysqli_error($conn);
  }
  $_SESSION['username']= $doctor;
  $_SESSION['email']= $email;
}
?>

<body>
    <!--
    <div class="movecenter">

        <div class="card text-center ">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div class="card-header">
            </div>
            <div class="card-body">
                <h5 class="card-title">Wait for docotor's response</h5>
                <p class="card-text"></p>
                <form action="last.php" method="post">
                    <div class="mb-3">
                        <label for="EMAIL" class="form-label">Enter Your Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            name="Email_address">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                You will recived message!!!
            </div>
        </div>
        <div>-->
</body>

</html>