<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
include 'Partial/Db.php';
$username= $_POST['username'];
$password= $_POST['password'];
$Cpassword=$_POST['CPassword'];
$exitsSql="SELECT * FROM `names` WHERE `username` = '$username'";
$result=mysqli_query($conn,$exitsSql);
$numExitsRows=mysqli_num_rows($result);
if($numExitsRows > 0){
  $showError="Username Already exits";
}else{
  $sql2="CREATE TABLE `hospital`.`$username` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(30) NOT NULL ,  `email` VARCHAR(40) NOT NULL ,  `date` DATE NOT NULL ,  `time` TIME NOT NULL ,  `status` BOOLEAN NOT NULL ,  `Payment` BOOLEAN NOT NULL ,  `Charges` INT NOT NULL ,    PRIMARY KEY  (`sno`)) ENGINE = InnoDB;";
  
  $result2=mysqli_query($conn2,$sql2);
  
  if($password==$Cpassword ){
  $sql="INSERT INTO `names` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp());";
  $result=mysqli_query($conn,$sql);
  if($result){
    $showAlert= true;
  }
  
}else{
  $showError="Password do not match ";
}}}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    form {}

    .container {
        border-radius: 3%;
        width: 40%;
        display: flex;
        flex-direction: row;
    }

    .handel {
        display: flex;
        justify-content: center;


    }
    </style>
    <!-- font awesome cdn link  -->
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

    <title>SignUp</title>
</head>

<body>
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

    <div class="handel" style="margin-top:7%">
        <div class="container" class="row justify-content-center" class="php-email-form">
            <div class="col-lg-8  rounded px-2">
                <h4>Signup to our website</h4>
                <hr>
                <form action="SignUp.php" method="POST">
                    <div class="col-md-14" style=" margin:3% 0;">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">

                    </div>
                    <div class="col-md-14 " style=" margin:3% 0;">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-md-14" style=" margin:3% 0;">
                        <label class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control" id="CPassword" name="CPassword">
                    </div>

                    <button type="submit" class="btn btn-primary" style=" margin:3% 0;">SignUp</button>
                </form>

            </div>

            <div class="image">
                <img src="/App\Patient\image\book-img.svg" alt="" height="100%" width="100%">
            </div>
        </div>
        <script src="\App/assets/vendor/aos/aos.js"></script>
        <script src="\App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="\App/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="\App/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="\App/assets/vendor/php-email-form/validate.js"></script>


        <!-- custom js file link  -->
        <script src="js/script.js"></script>
</body>

</html>