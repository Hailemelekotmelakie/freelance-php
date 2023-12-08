<?php
session_start();
 $_SESSION['captchaChecking']=10;
// set_session("captchaChecking", "PAY");
 echo $_SESSION["captchaChecking"];
header('Location: fillBankInfo.php');
?>