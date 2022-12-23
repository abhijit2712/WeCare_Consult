<?php
include 'Partial/Db.php';
?>
<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
$name= $_POST['name'];
$email= $_POST['email'];
$username= $_POST['username'];
$password= $_POST['pass'];
$Cpassword=$_POST['re_pass'];

$exitsSql="SELECT * FROM `names` WHERE `username` = '$username'";
$result=mysqli_query($conn3,$exitsSql);

$numExitsRows=mysqli_num_rows($result);
if($numExitsRows > 0){
  $showError="Username Already exits";
}else{  
  if($password==$Cpassword ){
  $sql="INSERT INTO `names` (`name`, `email`, `username`, `password`) VALUES ('$name', '$email', '$username', '$Cpassword');";
  $result2=mysqli_query($conn3,$sql);
  if($result2){
    $showAlert= true;
  }
}else{
  $showError="Password do not match ";
}
}
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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

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
  if($showAlert){
 echo '<div class="alert alert-primary" role="alert">
 Your Account is now created and you can login
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>'
    ;
  }
  if($showError){
    echo '<div class="alert alert-danger" role="alert">
    '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>'
       ;
     }
  ?>

        <!-- Sign up form -->
        <section class="signup" style="margin: 0; padding: 0;">
         
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="SignUp.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-accounts-add"></i></label>
                                <input type="text" name="username" id="email" placeholder="Your Username" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/Doctor1.jpg" alt="sing up image"></figure>
                        <a href="Login.php" class="signup-image-link">I am already member</a>
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