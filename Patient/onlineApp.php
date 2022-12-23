<?php
include 'Connect.php';
?>

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


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fDate = $_POST['fDate'];
  $fDoc = $_POST['fDoc'];
}
echo $fDate;
$sql="SELECT * FROM `$fDoc` WHERE `date` = '$fDate'";
$result = mysqli_query($conn2, $sql);
$times=array();  
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) { 
       $date = $row['date'];
        $time = $row['time'];
        array_push($times,$time);        
    }
}


function CheckTime($times,$slot){
    for($i=0;$i<count($times);$i++){
        if($slot==$times[$i]){
          echo 'disabled';

        }
    }


    
}
session_start();
$_SESSION['Doctorname']=$fDoc;
$_SESSION['date']=$fDate;
?>

<body>
    <?php require'C:\xampp\htdocs\App\nav.php'?>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Book Appointment</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 info">
                            <div class="card" style="width: 17rem; height:17rem;">
                                <img src="/App\Patient\image\doc-6.jpg" class="card-img-top" alt="..." width="60%"
                                    height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Rajvardhan Shelke</h5>
                                    <p class="card-text">Expert doctor</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 info">
                            <div class="card" style="width: 17rem; height:17rem;">
                                <img src="/App\Patient\image\doc-4.jpg" class="card-img-top" alt="..." width="60%"
                                    height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Anish Giri</h5>
                                    <p class="card-text">Expert doctor</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 info">
                            <div class="card" style="width: 17rem; height:17rem;">
                                <img src="https://wikibio.in/wp-content/uploads/2020/09/Vidit-Gujrathii.jpg"
                                    class="card-img-top" alt="..." width="60%" height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Vidit Gujrathi</h5>
                                    <p class="card-text">Expert doctor</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 info">
                            <div class="card" style="width: 17rem; height:17rem;">
                                <img src="/App\Patient\image\doc-2.jpg" class="card-img-top" alt="..." width="60%"
                                    height="60%">
                                <div class="card-body">
                                    <h5 class="card-title">Dr.Anand Mahajan</h5>
                                    <p class="card-text">Expert doctor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="PatientPhp/online.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <input placeholder="Your Name" type="text" name="name" class="form-control" id="name"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <input placeholder="Your Email" type="email" class="form-control" name="email" id="email"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" placeholder="Your number" class="form-control" required name="num">
                        </div>
                        <div class="form-group mt-3">
                            <textarea placeholder="Message" class="form-control" name="message" rows="5"
                                required></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlSelect1">Select Time of Appointment</label>
                            <select required class="form-control" placeholder="thi d s s" name="Time"
                                onchange="showTime(this.value)">
                                <option value="">Select Time
                                </option>
                                <option <?php $slot='11:00:00';
                                CheckTime($times,$slot);?> value="11:00 am"> 11:00 am
                                </option>
                                <option <?php $slot='11:30:00';
                                CheckTime($times,$slot);?> value="11:30 am"> 11:30 am
                                </option>
                                <option <?php $slot='12:00:00';
                                CheckTime($times,$slot);?> value="12:00 am"> 12:00 am
                                </option>
                                <option <?php $slot='12:30:00';
                                CheckTime($times,$slot);?> value="12:30 pm"> 12:30 pm
                                </option>
                                <option <?php $slot='01:00:00';
                                CheckTime($times,$slot);?> value="1:00 pm"> 1:00 pm
                                </option>
                                <option disabled>Please choose another date if all slots are booked
                                </option>
                            </select>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            <div class="loading">Appointment Book sucessfully</div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Book Appointment</button></div>
                    </form>

                </div>
            </div>
        </div>
        <div style="margin-top: 20%;">

        </div>
    </section>

    <!-- booking section ends // require'C:\xampp\htdocs\App\footer.php' -->
    <!-- review section starts  -->
    <!-- blogs section ends -->
    <!-- footer section starts  -->
    <!-- Vendor JS Files -->
    <script src="\App/assets/vendor/aos/aos.js"></script>
    <script src="\App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="\App/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="\App/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="\App/assets/vendor/php-email-form/validate.js"></script>
</body>

</html>