<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
include 'lib/Db.php';
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
$checkSum = "";
$paramList = array();
$username= $_POST['username'];
$password= $_POST['password'];
$name = $_POST["name"];
$email = $_POST["email"];
$num = $_POST["num"];
$Doctorname = $_POST["Doctorname"];
$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$TXN_AMOUNT = 200;
echo $Doctorname;
$sql="SELECT * FROM `names` WHERE `username` = '$username' AND `password` = '$password'";
$result =mysqli_query($conn3,$sql);
$num=mysqli_num_rows($result);
if($num==1){
	echo "valid Credentials";
}else{
  $showError="Invalid Credentials";
}

// Create an array having all required parameters for creating checksum.
$sql="UPDATE `$Doctorname` SET `Payment` = '1' WHERE `$Doctorname`.`email` = '$email'";
        $result2=mysqli_query($conn2,$sql);
        if($result2){
		
        }else{
            echo "not working";
        }

		$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = "Retail";
$paramList["CHANNEL_ID"] = "WEB";
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "http://localhost/App/Payment/pgResponse.php";
/*
$paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
?>
<html>

<head>
    <title>Merchant Check Out Page</title>
</head>

<body>
    <center>
        <h1>Please do not refresh this page...</h1>
    </center>
    <form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
        <table border="1">
            <tbody>
                <?php
			
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
                <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
            </tbody>
        </table>
        <script type="text/javascript">
        document.f1.submit();
        </script>
    </form>
</body>

</html>