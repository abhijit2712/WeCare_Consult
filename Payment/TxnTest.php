<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head>
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
    <title>Payment</title>
    <meta name="GENERATOR" content="Evrsoft First Page">
</head>

<body>
    <?php require'C:\xampp\htdocs\App\nav.php'?>
   


    <section id="contact" class="contact">
        <div class="container mt-5">
        <div class="col-lg-3">
                <div >
             <h5><a href="/aPP\login\SignUp.php">Create Account</a></h5>
             <p>Create account if account is not created</p>
                </div>
        </div>
            <div class="col-lg-6 mx-auto">
                <div class="section-title ">
                    <h2>Make Payment</h2>
                </div>
                <form method="post" action="pgRedirect.php">
                <div class="form-group">
                    <label for="your_name" >Username:</label>
                    <input type="text" name="username" id="your_name" placeholder="Enter username" class="form-control"/>
                </div>
                 <div class="form-group mt-3">
                    <label for="your_pass" >Password:</label>
                    <input type="password" name="password" id="your_pass" placeholder="Enter Password" class="form-control"/>
                </div>


                    <div class="form-group mt-3">
                        <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
                    </div>

                    <div class="form-group mt-3">
                        <input placeholder="Your Email" type="email" class="form-control" name="email" id="email"
                            required>
                    </div>


                    <div class="form-group mt-3">
                        <input type="text" placeholder="Your number" class="form-control" required name="num">
                    </div>


                    <div class="form-group mt-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Doctor</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="Doctorname">
                                <option value="dr.rajvardhan shelke">Dr.Rajvardhan Shelke</option>
                                <option value="Dr.Anish Giri">Dr.Anish Giri</option>
                                <option value="Dr.Vidit Gujrathi">Dr.Vidit Gujrathi</option>
                                <option value="Dr.Anand Mahajan">Dr.Anand Mahajan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <input type="hidden" class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                            autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                    </div>

                    <div class="form-group mt-3">
                        <input  type="hidden" class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                            autocomplete="off" value="<?php echo  "Cust" . rand(10000,99999999)?>">
                    </div>

                    <div class="form-group mt-3">
                        <label>Amout to Pay:</label>                     
                        <input class="form-control" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT"
                            value="200" >
                    </div>
                    <input value="CheckOut" type="submit" class="btn btn-outline-success mt-3">
                </form>
            </div>
        </div>
    </section>

    <?php require'C:\xampp\htdocs\App\footer.php'?>

    <!-- Vendor JS Files -->
    <script src="\App/assets/vendor/aos/aos.js"></script>
    <script src="\App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="\App/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="\App/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="\App/assets/vendor/php-email-form/validate.js"></script>

</body>

</html>