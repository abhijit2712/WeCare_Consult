<?php
$docName; //declaring varible
session_start(); //starting session
$docName = $_SESSION['username']; //fetching doctors's name which is send from login.php 
echo $docName;
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>WeCare</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/fevi.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
    <link href="\App/assets/css/style.css" rel="stylesheet">
    <style>
    .chat-bot {
        position: fixed;
        text-decoration: none;
        right: 5%;
        bottom: 5%;
        width: 5%;
        height: 8%;
        display: block;
        border-radius: 100%;
        border: 2px solid white;
        box-shadow: 0 0 30px 0 rgba(black, 0.3);
        font-size: 0px;
        background: url("https://cdn-icons-png.flaticon.com/512/3649/3649460.png") no-repeat center;
        background-size: cover;
    }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">WeCare</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="Doc/login.php">Doctors </a></li>

                    <li><a class="nav-link scrollto" href="#details">About Us</a></li>
                    <!--<li><a class="nav-link scrollto" href="#faq">covid  19</a></li>-->
                    <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Mental health</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="Pages\Addiction_main.html">Addiction</a></li>
                                    <li><a href="Pages\suicide_main.html">Suicide</a></li>
                                    <li><a href="Pages\Stress_main.html">Stress</a></li>
                                    <li><a href="Pages\Depression_main.html">Depression</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Living Healthy

                                    </span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="Pages\Happiness_main.html">Happiness </a></li>
                                    <li><a href="Pages\Sleep_main.html">Sleep</a></li>
                                    <li><a href="Pages\Career_main.html">Career</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Health & Wellness</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="Pages\Hearthealth.html">Heart Health</a></li>
                                    <li><a href="Pages\Cancer.html">Cancer</a></li>
                                </ul>
                            </li>
                            <li><a href="covid 19\index.html">Covid 19</a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>


                    <li><a class="getstarted scrollto" href="http://localhost/aPP/login/Login.php"
                            style="visibility:hidden">Login</a></li>
                    <div class="logo">
                        <p text-decoration: none;"><?php echo "<p> $docName "?>logged in</p>
                    </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1>WeCare</h1>
                        <h2>Book Appointment as Patient</h2>
                        <a href="Patient/index.php" class="download-btn"><i class='bx bxs-user'></i>Book Appointment
                            with
                            Doctors</a>
                        <a href="Patient/OnlineIndex.php" class="download-btn"><i class='bx bxs-user'></i>Book Online
                            consult</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <img src="assets/doctors.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= App Features Section ======= -->
        <section id="features" class="features">
            <div id="carouselExampleInterval" class="carousel slide ms-6" data-bs-ride="carousel">
                <h5 class="mx-6">Our Top Doctors:</h5>
                <div class="carousel-inner">
                    <!--Card 1-->
                    <div class="carousel-item active mx-6" data-bs-interval=" 10000">
                        <div class="card" style="width: 35rem; height:35rem;">
                            <img src="/App\Patient\image\doc-4.jpg" class="card-img-top" alt="..." width="60%"
                                height="60%">
                            <div class="card-body">
                                <h5 class="card-title">Dr.Anish Giri</h5>
                                <p class="card-text">expert doctor</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!--Card 2-->
                    <div class="carousel-item mx-6" data-bs-interval="2000">
                        <div class="card" style="width: 35rem; height:35rem;">
                            <img src="https://wikibio.in/wp-content/uploads/2020/09/Vidit-Gujrathii.jpg"
                                class="card-img-top" alt="..." width="60%" height="60%">
                            <div class="card-body">
                                <h5 class="card-title">Dr.Vidit Gujrathi</h5>
                                <p class="card-text">expert doctor</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!--Card 3-->
                    <div class="carousel-item mx-6">
                        <div class="card" style="width: 35rem; height:35rem;">
                            <img src="/App\Patient\image\doc-6.jpg" class="card-img-top" alt="..." width="60%"
                                height="60%">
                            <div class="card-body">
                                <h5 class="card-title">Dr.Rajvardhan Shelke</h5>
                                <p class="card-text">expert doctor</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span>Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span>Next</span>
                </button>
            </div>
        </section><!-- End App Features Section -->

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <h3>Core Value</h3>
                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="row content col-md-3 pt-4 " data-aos="fade-up">
                        <div>
                            <h4>Empowerment</h4>
                            <img src="https://www.medicoverhospitals.in/images/empowerment.png">
                        </div>
                        <div>
                            <h4>Teamwork</h4>
                            <img src="https://www.medicoverhospitals.in/images/teamwork.png">
                        </div>

                    </div>
                    <div class="row content col-md-3 pt-4 mt-0" data-aos="fade-up">
                        <div>
                            <h4>Integrity</h4>
                            <img src="https://www.medicoverhospitals.in/images/Integrity.png">
                        </div>
                        <div>
                            <h4> Entrepreneurship</h4>
                            <img src="https://www.medicoverhospitals.in/images/Entrepreneurship.png">

                        </div>
                    </div>

                </div>
                <h4>The Passion for Quality Value Division of Health Care Service has increased emphasis as it is vital
                    to
                    deliver on our cause. All our values are important, but our quality value enables us to live, to
                    save life, to
                    maintain and to improve life.</h4>
            </div>

        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>We are always looking to make things easier for you.Our aim is to provide our customers with the
                        best
                        medical facilities, constant care, and reliable support.If you would like to get in touch with a
                        doctor from
                        a specific department, would like some specific information about the services we provide, or
                        just have a
                        question for us, please fill up the Form given below and we will get back to you. </p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 info">
                                <i class="bx bx-map"></i>
                                <h4>Address</h4>
                                <p>Nashik Road,<br>Nashik, 422101</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-phone"></i>
                                <h4>Call Us</h4>
                                <p>+91 9307086022<br>+91 80802 61490</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-envelope"></i>
                                <h4>Email Us</h4>
                                <p>wecareweb1@gmail.com
                                </p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-time-five"></i>
                                <h4>Working Hours</h4>
                                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                            data-aos="fade-up">
                            <div class="form-group">
                                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <input placeholder="Your Email" type="email" class="form-control" name="email"
                                    id="email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input placeholder="Subject" type="text" class="form-control" name="subject"
                                    id="subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea placeholder="Message" class="form-control" name="message" rows="5"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <a href="/App\chatbot\database.html" target=" _self" class="chat-bot" title="Chat-Bot">WeCare Bot</a>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Join WeCare Newsletter to see latest update and sevices.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>WeCare</h3>
                        <p>Nashik Road,<br>Nashik, 422101</p>
                        <strong>Phone:</strong> +91 9307086022<br>
                        <strong>Email:</strong> wecareweb1@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><a class="nav-link scrollto" href="#features">Doctors </a></li>
                            <li><a class="nav-link scrollto" href="#details">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                            <li><a class="getstarted scrollto" href="#features">Login</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Get in touch with us:</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>WeCare</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">WeCare</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>