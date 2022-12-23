<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

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



</head>

<body>
    <?php require'C:\xampp\htdocs\App\nav.php'?>

    <!-- header section starts  -->
    <!-- icons section ends -->

    <!-- services section starts  -->

    <!-- doctors section ends -->

    <!-- booking section starts   -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Book Appointment</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 info ">
                            <div class="card" style="width: 16rem; height:22rem;">
                                <img src="/App\Patient\image\doc-6.jpg" class="card-img-top" alt="..." width="20%"
                                    height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Rajvardhan Shelke</h5>
                                    <p class="card-text">Expert doctor</p>
                                    <form action="onlineApp.php" method="post">
                                        <input type="date" name="fDate" class="form-control">
                                        <input type="hidden" name="fDoc" id="" value="Dr.Rajvardhan Shelke"
                                            class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-warning m-1">Book Slot</button>
                            </form>
                        </div>
                        <div class="col-lg-3 info ">
                            <div class="card" style="width: 17rem; height:22rem;">
                                <img src="/App\Patient\image\doc-4.jpg" class="card-img-top" alt="..." width="40%"
                                    height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Anish Giri</h5>
                                    <p class="card-text">Expert doctor</p>
                                    <form action="onlineApp.php" method="post">
                                        <input type="date" name="fDate" class="form-control">
                                        <input type="hidden" name="fDoc" id="" value="Dr.Anish Giri"
                                            class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-warning m-1">Book Slot</button>
                            </form>
                        </div>
                        <div class="col-lg-3 info ">
                            <div class="card" style="width: 17rem; height:22rem;">
                                <img src="https://wikibio.in/wp-content/uploads/2020/09/Vidit-Gujrathii.jpg"
                                    class="card-img-top" alt="..." width="40%" height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Vidit Gujrathi</h5>
                                    <p class="card-text">Expert doctor</p>
                                    <form action="onlineApp.php" method="post">
                                        <input type="date" name="fDate" class="form-control">
                                        <input type="hidden" name="fDoc" id="" value="Dr.Vidit Gujrathi"
                                            class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-warning m-1">Book Slot</button>
                            </form>
                        </div>
                        <div class="col-lg-3 info ">
                            <div class="card" style="width: 17rem; height:22rem;">
                                <img src="/App\Patient\image\doc-2.jpg" class="card-img-top" alt="..." width="40%"
                                    height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Anand Mahajan</h5>
                                    <p class="card-text">Expert doctor</p>
                                    <form action="onlineApp.php" method="post">
                                        <input type="date" name="fDate" class="form-control">
                                        <input type="hidden" name="fDoc" id="" value="Dr.Anand Mahajan"
                                            class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-warning m-1">Book Slot</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>




    <!-- booking section ends -->

    <!-- review section starts  -->

    <!-- blogs section ends -->

    <!-- footer section starts  -->


    <!-- Vendor JS Files -->
    <script src="\App/assets/vendor/aos/aos.js"></script>
    <script src="\App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="\App/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="\App/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="\App/assets/vendor/php-email-form/validate.js"></script>


    <!-- custom js file link  -->

    <?php require'C:\xampp\htdocs\App\footer.php'?>

</body>


</html>