<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
include 'Partial/Db.php';
$username= $_POST['username'];
$password= $_POST['password'];

$sql="SELECT * FROM `names` WHERE `username` = '$username' AND `password` = '$password'";

$result =mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1){
  $login=true;
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['username']=$username;
  header('location:Doctor2.php');
}else{
  $showError="Invalid Credentials";
}

}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="\App/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="\App/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="\App/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="\App/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="\App/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="\App/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="\App\assets\css\style.css" rel="stylesheet">
    <style>
    .container {
        border-radius: 3%;

        display: flex;
        flex-direction: row;
    }

    .handel {
        display: flex;
        justify-content: center;


    }
    </style>
     <link rel="shortcut icon" href="https://icons.iconarchive.com/icons/mathijssen/tuxlets/256/Nurse-Tux-icon.png" />


<title>WeCare</title>
</head>

<body>
    <?php require'C:\xampp\htdocs\App\nav.php'?>
    <?php
  if($login){
 echo '<div class="alert alert-primary alert-dismissible fade show mt-5" role="alert">
 <strong>Login</strong> You are logged in
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  if($showError){
    echo '<div class="alert alert-primary alert-dismissible fade show mt-5" role="alert">
    <strong>Login</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
     }
  ?>
    <div class="handel" style="margin-top:7%">

        <div class="container" class="row justify-content-center">
            <div class="col-lg-8  rounded px-2 ">
                <div class="d-flex flex-row justify-content-between">
                    <h4>Login to our website</h4>
                    <p><a href="SignUp.php">Create an account</a></p>
                </div>
                <hr>
                <form action="login.php" method="POST">
                    <div class="col-md-14" style=" margin:3% 0;">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">

                    </div>
                    <div class="col-md-14 " style=" margin:3% 0;">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>


                    <button type="submit" class="btn btn-primary" style=" margin:3% 0;">Login</button>
                </form>
            </div>
            <div class="image">
                <img src="/App\Patient\image\home-img.svg" alt="" height="100%" width="100%">
            </div>
        </div>
    </div>
    <script src="\App/assets/vendor/aos/aos.js"></script>
    <script src="\App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="\App/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="\App/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="\App/assets/vendor/php-email-form/validate.js"></script>
    <script src="js/script.js"></script>
</body>

</html>