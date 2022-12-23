<?php
$docName;                            //declaring varible
session_start();                     //starting session
$docName = $_SESSION['username'];    //fetching doctors's name which is send from login.php 
?>
<!doctype html>
<html lang="en">

<head>
    <!--using css-->
    <style>
    .mt-6 {
        margin-top: 6%;
    }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--css links-->
    <link href="\App/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="\App/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="\App/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="\App/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="\App/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="\App/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="\App\assets\css\style.css" rel="stylesheet">
    <?php
        include 'Connect.php';
    ?>

    <title>WeCare</title>
</head>

<body>
    <?php require'C:\xampp\htdocs\App\nav.php'?>


    <div class="container mt-6">
        <div class="container" class="row justify-content-center">
            <div class="col-lg-8  rounded px-2 ">
                <div class="d-flex flex-row justify-content-between">
                    <h4><?php echo "<h4>$docName's "?>Patient</h4>
                    <p style="visibility:hidden"><?php echo "<p style='visibility:hidden'>$docName's "?>this is hidden
                    </p>
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
        </div>


        <table class="table caption-top">
            <caption>List of Patients</caption>
            <thead>
                <tr>
                    <th scope="col">Sno:</th>
                    <th scope="col">Patient Name:</th>
                    <th scope="col">Email:</th>
                    <th scope="col">Date:</th>
                    <th scope="col">Time:</th>
                    <th scope="col">Status:</th>
                    <th scope="col">Payment:</th>
                    <th scope="col">Operation:</th>
                </tr>
            </thead>
            <tbody>


                <?php
    $sql = "SELECT * FROM `$docName`";
    $result = mysqli_query($conn2, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $row['sno'];
            $name = $row['name'];
            $email = $row['email'];
        $date = $row['date'];
        $time = $row['time'];
        $status = $row['status'];
        $payment = $row['Payment'];
        $str = '';
        $pay = '';
        if ($status == 1) {
            $str = 'Online Appointement';
        }
        else {
            $str = 'Offline Appointment';
        }

        if ($payment == 1) {
            $pay = 'Done';
        }
        else {
            $pay = 'Pending';
        }


        echo '<tr>
              <th scope="row">' . $sno . '</th>
              <td>' . $name . '</td>
              <td>' . $email . '</td>
              <td>' . $date . '</td>
              <td>' . $time . '</td>
              <td>' . $str . '</td>
              <td>' . $pay . '</td>
              <td>   
      <button class="btn btn-primary m-1"><a href="zoom.php ?Yesid=' . $sno . '  " = class="text-light">Online</a></button>
      <button class="btn btn-danger m-1"><a href="No.php? Noid=' . $sno . '" class="text-light">Reject</a></button>
      <button class="btn btn-primary m-1"><a href="/App\Doc\smtp\OfflineLink.php ? Yesid=' . $sno . '" class="text-light">Confirm</a></button>
      <button class="btn btn-primary m-1"><a href="/App\Doc\smtp\PaymentLink.php ? Yesid=' . $sno . '" class="text-light">Send Payment Link</a></button>
    </td>
              </tr>
              ';
    }
}
?>
            </tbody>
        </table>


    </div>

    <script src="\App/assets/vendor/aos/aos.js"></script>
    <script src="\App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="\App/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="\App/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="\App/assets/vendor/php-email-form/validate.js"></script>


    <!-- custom js file link  -->
    <a href="C:\xampp\htdocs\Doc\smtp\index.php"></a>

</body>

</html>