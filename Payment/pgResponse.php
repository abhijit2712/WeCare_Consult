<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include 'lib/Db.php';
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";


//session_start();
//$name=$_SESSION['name'];
//$email=$_SESSION['paymentMail'];
//$num=$_SESSION['num'];
//$Doctorname=$_SESSION['Doctorname'];


$paramList = $_POST;
//$sql = "UPDATE `$Doctorname` SET `Payment` = '1' WHERE `$Doctorname`.`email` =$email;";
//$result = mysqli_query($conn2, $sql);


/*\if($result){
 header('location:TxnStatus.php'); }else{
 echo "not working"; }*/


$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if ($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
	//Process your transaction here as success transaction.
	//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}
/*if (isset($_POST) && count($_POST) > 0) {
 echo "<b>Transaction status is sucess</b>" . "<br/>";
 }*/
}
else {
	echo "<b>Checksum mismatched.</b>";
//Process transaction as suspicious.
}
?>