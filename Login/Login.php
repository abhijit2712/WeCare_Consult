<?php
include 'Partial/Db.php';
?>

<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
$username= $_POST['username'];
$password= $_POST['password'];

$sql="SELECT * FROM `names` WHERE `username` = '$username' AND `password` = '$password'";

$result =mysqli_query($conn3,$sql);
$num=mysqli_num_rows($result);

if($num==1){
    $login=true;
    session_start();
    $_SESSION['username']=$username;
    header('location:\App/index2.php');  
}
}else{
  $showError="Invalid Credentials";
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
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

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">
        <?php require'C:\xampp\htdocs\App\nav.php'?>

        <?php
  if($login){
 echo '<div class="alert alert-primary alert-dismissible fade show mt-5" role="alert">
 <strong>Login</strong> You are logged in
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
    <strong>Login</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
     }
  ?>
        <!-- Sing in  Form -->
        <section class="sign-in" style="margin: 0; padding: 0;">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <a href="SignUp.php" class="signup-image-link">Create an account</a>
                        <figure><img src="img/Doctor5.jpg" alt="sing up image" width="80%" height="80
                            %"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login in</h2>
                        <form method="POST" class="register-form" id="login-form" action="Login.php">
                            <div class="form-group">
                                <label for="your_name" style="margin:0 3%;"><i
                                        class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Enter username" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass" style="margin:0 3%;"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Enter Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require'C:\xampp\htdocs\App\Login\footer.php'?>

    <script src="\App/assets/vendor/aos/aos.js"></script>
    <script src="\App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="\App/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="\App/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="\App/assets/vendor/php-email-form/validate.js"></script>
    <script src="js/script.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>