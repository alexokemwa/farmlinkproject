<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>
<?php
require "../app/core/database.php"; 
header("Content-Type: application/json");
$stkCallbackResponse = file_get_contents('php://input');
$logFile = "Mpesastkresponse.json";
$log = fopen($logFile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);

$mpesaResponse = file_get_contents('Mpesastkresponse.json');
$data = json_decode($mpesaResponse);

$MerchantRequestID = $data->Body->stkCallback->MerchantRequestID;
$CheckoutRequestID = $data->Body->stkCallback->CheckoutRequestID;
$ResultCode = $data->Body->stkCallback->ResultCode;
$ResultDesc = $data->Body->stkCallback->ResultDesc;
$Amount = $data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
$TransactionId = $data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
$UserPhoneNumber = $data->Body->stkCallback->CallbackMetadata->Item[4]->Value;
if (isset($_SESSION["user"])) {
  $user_id = $_SESSION["user"];
  $farmer_id = $_SESSION["user"]; 
}
else {
  echo "User session not set!<br>";
}
//CHECK IF THE TRASACTION WAS SUCCESSFUL 
if ($ResultCode == 0) {
  //STORE THE TRANSACTION DETAILS IN THE DATABASE
  mysqli_query($conn, "INSERT INTO transactions (MerchantRequestID,CheckoutRequestID,ResultCode,Amount,MpesaReceiptNumber,PhoneNumber,farmer_id) VALUES ('$MerchantRequestID','$CheckoutRequestID','$ResultCode','$Amount','$TransactionId','$UserPhoneNumber','$farmer_id')");
}