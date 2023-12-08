<?php include('dbConfig.php');
session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
  header('Location: ../../Login and Signup Form with Email Verification - PHP/login-user.php');
 }
if ($_SESSION['captchaChecking'] == '')
{
  header('Location: captcha.php');
}
 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payments</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

  <!-- Boostrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="payment.css">
  <link rel="stylesheet" type="text/css" href="transfer.css">
  <script type="text/javascript" src="payment.js"></script>
  <style type="text/css">
    /*nav start*/
        .custom-div-nav{
          display: inline-flex;
          background: #daf2eb;
          /*box-shadow: 0px 0px 10px 1px green;*/
          border: 3px solid transparent;
          padding: 10px;
          margin: 2px;
          border-radius: 5px;

        }
        .custom-div-nav:hover{
          display: inline-flex;
          background: #88dcbe;
          border-bottom: 3px solid black;
          padding: 10px;
          transition: 0.5s;
          margin: 2px;
          border-radius: 5px;
        }
        .underline:hover{
          text-decoration: none;
        }
        /*nav end*/
  </style>
</head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script>
        function scrollWin() {
          window.scrollTo(0,9999);
        }
</script>
<body>
          <div>
            <span class="custom-div-nav"> <a  class="underline" href="../../afterLogin/Homepage.php">Home</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/contact.php">Contact</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/About.php">About</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/RandomJobs.php">Find Jobs</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/payment/fillBankInfo.php">Payment</a></span>
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/jobRequest.php">Post Jobs</a></span>
          </div>
<div class="row">
  <div class="menusContainer">
    <div class="menusContainerInner">
    <div id="btn-container">
      <a class="underline" href="fillBankInfo.php"><div class="custom-btn btn-13">Bank Information</div></a>
      <a class="underline" href="addFunds.php"><div class="custom-btn btn-13" >Deposite</div></a>
      <a class="underline" href="withdraw.php"><div class="custom-btn btn-13">Withdraw</div></a>
      <a class="underline" href="transfer.php"><div class="custom-btn btn-13 innerSelected">Transfer</div></a>
      <a class="underline" href="balance.php"><div class="custom-btn btn-13">Balance</div></a>
    </div>
  </div>
  </div>

  <div class="extendedContainer">
    <div class="extendedContainerInner"><br>
      <h1 style="color: #1efa1e; opacity: 0.7;">Checkout Page</h1><br>
      <!-- <p class="credit">By Hailemelekot</p> phone no: +251947053537 -->
      <div class="tab_container"><!-- 
        <input id="tab1" type="radio" name="tabs">
        <label for="tab1"><span class="numberCircle">1</span><span>Cart</span></label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2"><span class="numberCircle">2</span><span>Customer Information</span></label> -->

        <input id="tab3" type="radio" name="tabs" >
        <label for="tab3"><span class="numberCircle">1</span><span>Your Information</span></label>

        <input id="tab4" type="radio" name="tabs" checked>
        <label for="tab4"><span class="numberCircle">2</span><span>Payment</span></label>


        <section id="content3" class="tab-content">
          <h3>Your Bank Detail</h3>
          <h3 style="padding: 17px; color: rgb(74, 40, 60); line-height: 1.7rem; font-size: 20px; text-align: left;" class="pymt-type-name">
          <?php
                    $email=$_SESSION['email'];
                    $sqlSt = "SELECT * FROM fundtransactions WHERE funderEmail = '$email'";
                    $runSql = mysqli_query($con, $sqlSt);
                    $rowID = mysqli_fetch_assoc($runSql);
                    if (!empty($rowID['bankType'])) {
                    echo " Name: ".$rowID['funderName']."<br>";
                    echo " Email: ".$rowID['funderEmail']."<br>";
                    echo " Account Balance: ".$rowID['accountBalance']." ETB<br>";
                    echo " Account Number: ".$rowID['BankAccount']."<br>";
                    echo " Bank Type: Commercial Bank of Ethiopia<br>";
                    echo " Phone Number: 0".$rowID['tel']."<br>";
                  }
                    ?>
              </h3>
        </section>

        <section id="content4" class="tab-content">
                  <h4 class="payment-title">Choose your payment method</h4>
                    <form action="" method="post" autocomplete="off">

                                <!-- CBE LOGO starts -->
                              <!-- <div class="pymt-radio"> -->
                                <div class="row-payment-method payment-row-last">
                                  <div class="select-icon hr">
                                    <input type="radio" id="radio2" name="radios" value="pp" checked>
                                    <label for="radio2"></label>
                                  </div>
                                  <div class="select-txt hr">
                                    <p class="pymt-type-name">Commercial Bank of Ethiopia</p>
                                    <p class="pymt-type-desc">Safe money transfer using your bank account.</p>
                                  </div>
                                  <div class="select-logo">
                                    <div class="select-logo-sub logo-spacer">
                                      <img class="imageLogo" style="width:100px; height:100px;" src="bankImages/cbe.png" alt="CBE LOGO"/>
                                    </div>
                                  </div>
                                  
                                  </div>
                                  <!-- </div>                       -->
                                    <!-- CBE LOGO ends -->
                      <!--  -->
                      <div class="form-cc">
                      <div class="row-cc">
                        <div class="cc-field">
                          <div class="button-master-container">
                            <div class="cc-title">Commericial Bank of Ethiopia Account</div>
                             <?php
                      $email=$_SESSION['email'];
                      $sqlSt = "SELECT * FROM bankrecords WHERE funderEmail = '$email' ORDER BY timeAgo desc limit 1";
                      $runSql = mysqli_query($con, $sqlSt);
                      $rowID = mysqli_fetch_assoc($runSql);
                      if (!empty($rowID['funderEmail'])) {
                              ?>
                                  <input name="BankAccount" type="text" id="checking" class="input cc-txt text-validated" placeholder="Enter Receivers CBE Account Number(i.e 1000183802XXX)" maxlength="13" pattern="\d{13}" required="" title="Enter Receivers CBE Account Number" value="<?php include('transferAccountInclude.php'); ?>" />
                                  <div id="btn-container">
                                  <input onclick="check() return false;" name="search" class="btn btn-primary " type="submit" value="Search">
                                  </div>
                              <?php
                                   }else{
                                    ?>
                                    <div class="my-alert alert alert-warning">
                                    <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                                    <span class="my-alert__text">
                                      You are not fill the required field.<br>Please Fill Your Bank Detail First<br>
                                      <a class='btn btn-success btn-lg btn-block' href='fillBankInfo.php'>Fill Now</a>
                                    </span>
                                  </div>
                                      <?php
                                      }
                                ?>
                          </div>
                        </div>
                      </div> 
                      <script type="text/javascript">
                        function check() {
                          if (document.getElementById('checking').value.length==13) {
                            document.getElementById('checking').setAttribute("class", "input cc-txt text-validated"); 

                            return true;
                          }
                          else{
                            document.getElementById('checking').setAttribute("class", "newText-validated"); 
                            return false;
                          }
                        }
                      </script>
                      <div class="row-cc">
                         <div class="cc-field">
                          <h3 class="cc-title">Receivers Name: <?php include('transferInclude.php'); ?></h3>
                          </div>
                        </div> 
                   </div>
                  </div>
              </form>
        </section>
      </div>
    </div>
  </div>

<!-- < ?php 
  include("transferSlip.php");
 ?> -->
 <?php
if (isset($_POST['sendNow'])) {
                     $temporaryBalance=$_POST['temporaryBalance'];
                     // Receivers
                     $BankAccount=filter_var($_POST['BankAccount'],FILTER_SANITIZE_STRING);
                     $sqlSt = "SELECT * FROM fundtransactions WHERE BankAccount = '$BankAccount' WHERE funderEmail <> '$email' ";
                     $runSql = mysqli_query($con, $sqlSt);
                     $rowID = mysqli_fetch_assoc($runSql);

               if (!empty($rowID['BankAccount'])) {
                     $receiversEmail=$rowID['funderEmail'];
                     $receiversAccountBalance=$rowID['accountBalance'];
                     $receiversfunderID =$rowID['funderID'];
                     $receiversfunderName = $rowID['funderName'];
                     $receiversfundAmount = $rowID['fundAmount'];
                     $receiversfundType = '+';
                     $fundedDay = date("l");
                     $fundedDate =date("d/m/Y");
                     $bankType = $rowID['bankType'];
                     $receiversBankAccount = $rowID['BankAccount'];
                     $receiversfundState = 1;
                     $timeAgo = time();
                     $receiverstel=$rowID['tel'];


                     // senders
                     $sendersEmail=$_SESSION['email'];
                     $sendersSql = "SELECT * FROM fundtransactions WHERE funderEmail = '$sendersEmail'";
                     $sendersRunSql = mysqli_query($con, $sendersSql);
                     $sendersRowID = mysqli_fetch_assoc($sendersRunSql);

                     $sendersAccountBalance=$sendersRowID['accountBalance'];
                     $sendersfunderID =$sendersRowID['funderID'];
                     $sendersfunderName = $sendersRowID['funderName'];
                     // $sendersfundAmount = $sendersRowID['fundAmount'];
                     $sendersfundType = '-';
                     $fundedDay = date("l");
                     $fundedDate =date("d/m/Y");
                     $bankType = $sendersRowID['bankType'];
                     $sendersBankAccount = $sendersRowID['BankAccount'];
                     $sendersfundState = 1;
                     $timeAgo = time();
                     $senderstel=$sendersRowID['tel'];

if ((empty($rowID['funderName'])) AND (empty($rowID['funderName'])) AND (empty($rowID['temporaryBalance']))) { 
    // echo "<script> alert('Error Not Sent.'); </script>";
}else{
         if ($sendersAccountBalance > $temporaryBalance AND $sendersAccountBalance>0 AND $temporaryBalance>0) {
             $senderNewsAccountBalance=$sendersAccountBalance-$temporaryBalance;
             $fee=$temporaryBalance*0.05;
             $newTemporaryBalance=$temporaryBalance-$fee;
             $newReceiversAccountBalance=$rowID['accountBalance']+$newTemporaryBalance;

            $sendersTransferRecord="INSERT INTO bankrecords (funderID,funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo,fundedDay,temporaryBalance,accountBalance,fundType,fundState,tel) VALUES ('$sendersfunderID','$sendersfunderName','$sendersBankAccount','$bankType','$sendersEmail','$fundedDate','$timeAgo','$fundedDay','$temporaryBalance','$senderNewsAccountBalance','$sendersfundType','$sendersfundState','$senderstel');";

            $receiversTransferRecord="INSERT INTO  bankrecords (funderID,funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo,fundedDay,temporaryBalance,accountBalance,fundType,fundState,tel) VALUES ('$receiversfunderID','$receiversfunderName','$receiversBankAccount','$bankType','$receiversEmail','$fundedDate','$timeAgo','$fundedDay','$newTemporaryBalance','$newReceiversAccountBalance','$receiversfundType','$receiversfundState','$receiverstel');";


            $sendersTransferFund="UPDATE fundtransactions SET accountBalance='$senderNewsAccountBalance' WHERE funderEmail='$sendersEmail';";
            $receiversTransferFund="UPDATE fundtransactions SET accountBalance='$newReceiversAccountBalance' WHERE funderEmail='$receiversEmail';";

                                // mysqli_query($con, $sendersTransferRecord)
                                // mysqli_query($con, $receiversTransferRecord);
                                // mysqli_query($con, $sendersTransferFund);
                                // if(mysqli_query($con, $receiversTransferFund)) {
        // if (mysqli_query($con, $receiversTransferRecord) AND mysqli_query($con, $sendersTransferFund)) {
            $connValues1 = mysqli_query($con, $receiversTransferRecord) AND mysqli_query($con, $sendersTransferFund);
            $connValues2 = mysqli_query($con, $receiversTransferFund) AND mysqli_query($con, $sendersTransferRecord);
          if($connValues1 AND $connValues2){


            $Revenu="INSERT INTO  revenues ( RevenuesUserName, RevenuesUserID, RevenuesUserBalance, RevenuesTotal, RevenuesBankAccount, RevenuesReceiverUserEmail, RevenuesSenderUserEmail, fundedDay, fundedDate,RevenuesProfit ) VALUES ('$sendersfunderName','$sendersfunderID','$fee','$temporaryBalance','$sendersBankAccount','$receiversEmail','$sendersEmail','$fundedDate','$fundedDay','$fee');";
              if(mysqli_query($con, $Revenu)){
                  include('popupSuccess.htm');
              }

              // $RevenuUpdate="UPDATE Revenues set RevenuesProfit = '$fee';";

// RevenuesID  RevenuesUserName  RevenuesUserID  RevenuesUserBalance RevenuesTotal RevenuesBankAccount RevenuesReceiverUserEmail RevenuesSenderUserEmail 

                                // echo "Inserted successfully";
                          ?>
                          <div id="btn-container">
                          <div class="my-alert alert alert-success">
                            <h3 style="color:green;" >Payment Sent Seccussfully </h3> 
                            <h6 ><?php echo "Slip for Transfering ".$_SESSION['email']?> to <?php echo $rowID['funderEmail'];?></h6>
                            <h6 ><?php echo $newTemporaryBalance ." ETB is Sent to ".$rowID['BankAccount']. " Account Number <br>Commercial Bank Of Ethiopia"; ?></h6>
                            <h6>AgoID <?php echo time();?> </h6>
                            <h6 >Date <?php echo date("l")." ".date("d/m/Y"); ?> </h6>
                            <div onclick="window.print();return false;" class="btn" id="btn1">Print</div>
                        </div>
                        </div>
                      <?php
                    }
                    }else{ 
                      // echo "Insefficient";
                      include('popupFailureInsufficient.htm');
                    }
                  }
                }else{ 
                      include('popupFailureNotFound.htm');
                }
              }else{ 
                  // echo "not clicked yet";
                }
?>


<!-- preloader -->

<?php  include '../../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../../Default pages/imported/loader.css">

<!-- footer -->

<footer>
    <link rel="stylesheet" type="text/css" href="../../../Default pages/imported/footer.css">
    <?php include('../../../Default pages/imported/footer.html'); ?>
</footer>


</body>
</html>