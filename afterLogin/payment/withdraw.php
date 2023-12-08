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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- Boostrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="transfer.css"> -->
  <link rel="stylesheet" type="text/css" href="payment.css">
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
<body>
          <div>
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/Homepage.php">Home</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/contact.php">Contact</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/About.php">About</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/RandomJobs.php">Find Jobs</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="#">Payment</a></span>
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/jobRequest.php">Post Jobs</a></span>
          </div>
<div class="row">
  <div class="menusContainer">
    <div class="menusContainerInner">
    <div id="btn-container">
      <a class="underline" href="fillBankInfo.php"><div class="custom-btn btn-13">Bank Information</div></a>
      <a class="underline" href="addFunds.php"><div class="custom-btn btn-13" >Deposite</div></a>
      <a class="underline" href="withdraw.php"><div class="custom-btn btn-13 innerSelected">Withdraw</div></a>
      <a class="underline" href="transfer.php"><div class="custom-btn btn-13">Transfer</div></a>
      <a class="underline" href="balance.php"><div class="custom-btn btn-13">Balance</div></a>
    </div>
  </div>
  </div>
  <div class="extendedContainer">
    <div class="extendedContainerInner">
      <div class="row justify-content-center">
          <div class="col-md-8 ">
            <span class="anchor" id="formPayment"></span>
            <hr class="my-3">
            <!-- form card cc payment -->
            <!-- CBE LOGO starts -->
                              <!-- <div class="pymt-radio"> -->
                                <div class="row-payment-method payment-row-last">
                                  <div class="select-txt hr">
                                    <h3 class="payment-title">PAYMENT METHOD</h3>
                                    <p class="pymt-type-name">Commercial Bank of Ethiopia</p>
                                    <p class="pymt-type-desc">We Pay You through Commercial Bank of Ethiopia.</p>
                                  </div>
                                  <div class="select-logo">
                                    <div class="select-logo-sub logo-spacer">
                                      <img class="imageLogo" style="width:100px; height:100px;" src="bankImages/cbe.png" alt="CBE LOGO"/>
                                    </div>
                                  </div>
                                  
                                  </div>
                                  <!-- </div>                       -->
                                    <!-- CBE LOGO ends -->
            <div class="card card-outline-secondary alert-success">
              <div class="card-body">
                <h3 class="text-center">Withdraw</h3>
                <hr>
                <?php
                      $email=$_SESSION['email'];
                      $sqlSt = "SELECT * FROM bankrecords WHERE funderEmail = '$email' ORDER BY timeAgo desc limit 1";
                      $runSql = mysqli_query($con, $sqlSt);
                      $rowID = mysqli_fetch_assoc($runSql);
                      if (!empty($rowID['funderEmail'])) {
                  ?>

                <div class="my-alert alert alert-warning">
                    <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                    <span class="my-alert__text">
                      <h6 class="text-center">Make sure your account is correct</h6>
                    </span>
                  </div>
                <hr>
                <form autocomplete="off" method="POST" action="" class="form">
                  <div class="form-group">
                    <label for="cc_name">Full Name: <?php echo " ".$rowID['funderName'];?></label> 
                  </div>
                  <div class="form-group">
                    <label>Bank Account Number: <?php echo " ".$rowID['BankAccount']; ?></label> 
                  </div>
                  <div class="form-group">
                    <label>Sent Through: Commerical Bank of Ethiopia</label>
                  </div>
                  <div class="form-group">
                    <label for="cc_name">Your Balance: <?php echo " ".$rowID['accountBalance']." ETB"; ?></label> 
                  </div>
                  <div class="form-group">
                    <label for="cc_name"><?php 
                                          $budgetSum=0;
                                          $sqlJobs = "SELECT * FROM jobs WHERE jobPosterEmail='$email' AND jobShow='0' "; 
                                          $resultJobs = mysqli_query($con, $sqlJobs);
                                          if (mysqli_num_rows($resultJobs)>0) {
                                            while($rowJobs = mysqli_fetch_assoc($resultJobs)) {
                                                $budgetSum=$budgetSum+$rowJobs['jobBudget'];  
                                                // echo  $budgetSum."<br>";
                                               }
                                            }
                                            // echo "Available balance for Withdrawal is: ".$rowID['accountBalance']-$budgetSum. " ETB";
                      ?></label> 
                  </div>
                  <div class="form-inline ">
                    <div class="input-group input-groupE">
                      <div class="input-group-addon">
                        Withdrawal Amount in ETB  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                      </div>
                      <input name="temporaryBalance" class="form-control text-center" id="exampleInputAmount" required placeholder="800 ETB" type="Number">
                    </div>
                  </div>
                  <div class="form-inline">
                    <div class="input-group input-groupE">
                    <label>Phone Number&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</label> 
                    <input name="tel"  autocomplete="off" pattern="[0]{1}[9]{1}[0-9]{3}[0-9]{2}[0-9]{3}" class="form-control" required="" placeholder="094705****" title="Please keep Ethiopian Phone Number Pattern" type="tel" value="<?php echo $rowID['tel']; ?>">
                  </div>
                  <div class="form-inline">
                    <div class="input-group input-groupE">
                      <h6 class="input-group-addon">
                        Login Password  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                      </h6>
                      <input name="password" class="form-control text-center" required id="exampleInputAmount" placeholder="**********" type="password" autocomplete="off">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <button class="btn btn-default btn-lg btn-block" type="reset">Cancel</button>
                    </div>
                    <div class="col-md-6">
                      <button name="withdraw" class="btn btn-success btn-lg btn-block" type="submit">Withdraw</button>
                    </div>
                  </div>
                </form>
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
                     <!-- echo "<h6 class=''>You can not fill the required field.<br>Please Fill Your Bank Detail First</h6><br><br><br>"; -->
                      <?php
                      }
                ?>
              </div>
            </div><!-- /form card cc payment -->
            <hr class="my-3">
          </div>
        </div>
    </div>
  </div>
</div>


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
<?php
      
      if(isset($_POST['withdraw'])){
                $funderEmail = $_SESSION['email'];
                $sqlSt = "SELECT * FROM fundtransactions WHERE funderEmail = '$funderEmail'";
                $runSql = mysqli_query($con, $sqlSt);
                $rowID = mysqli_fetch_assoc($runSql);
                   $funderID =$rowID['funderID'];
                   $funderName = $rowID['funderName'];
                   $fundAmount = $rowID['fundAmount'];
                   $fundType = '-';
                   $fundedDay = date("l");
                   $fundedDate =date("d/m/Y");
                   $bankType = $rowID['bankType'];
                   $BankAccount = $rowID['BankAccount'];
                   $fundState = 2;
                   $accountBalance = $rowID['accountBalance'];
                   $temporaryBalance = $_POST['temporaryBalance'];
                   $timeAgo = time();
                   $tel=filter_var($_POST['tel'],FILTER_SANITIZE_STRING);

// funderName
// funderEmail
// fundAmount
// fundType
// fundedDate
// bankType
// BankAccount
// timeAgo
// fundState
// funderID
// accountBalance
// temporaryBalance
// fundedDay

                                      $budgetSum=0;
                                      $sqlJobs = "SELECT * FROM jobs WHERE jobPosterEmail='$funderEmail' AND jobShow='0' "; 
                                      $resultJobs = mysqli_query($con, $sqlJobs);
                                      if (mysqli_num_rows($resultJobs)>0) {
                                        while($rowJobs = mysqli_fetch_assoc($resultJobs)) {
                                            $budgetSum=$budgetSum+$rowJobs['jobBudget'];                                        }
                                        }
                                    

                                        // withdrawal diff
                                           $difference=$accountBalance-$budgetSum;
                                        // .\ withdrawal diff

                   
                     if($_SESSION['password'] == $_POST['password']){
                        if ($difference > $temporaryBalance) {
                        if ($accountBalance > $temporaryBalance AND $accountBalance>0 AND $temporaryBalance>0) {
                          // echo "<script> alert('sufficient');</script>";
                          $newAccountBlance=$accountBalance-$temporaryBalance;
                          // echo $newAccountBlance;
                          // $sqlInsertFund="INSERT INTO  fundtransactions (funderID,funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo,fundedDay,temporaryBalance,accountBalance,fundType,fundAmount,fundState,tel) VALUES ('$funderID','$funderName','$BankAccount','$bankType','$funderEmail','$fundedDate','$timeAgo','$fundedDay','$temporaryBalance','$newAccountBlance','$fundType','$fundAmount','$fundState','$tel');";
                          $sqlInsertRecord="INSERT INTO bankrecords (funderID,funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo,fundedDay,temporaryBalance,accountBalance,fundType,fundAmount,fundState,tel) VALUES ('$funderID','$funderName','$BankAccount','$bankType','$funderEmail','$fundedDate','$timeAgo','$fundedDay','$temporaryBalance','$newAccountBlance','$fundType','$fundAmount','$fundState','$tel');";
                          $sqlInsertFundUpdate="UPDATE fundtransactions SET tel='$tel',accountBalance='$newAccountBlance' WHERE funderEmail='$funderEmail';";
                          $sqlInsertRecordUpdate="UPDATE bankrecords SET tel='$tel', accountBalance='$newAccountBlance' WHERE funderEmail='$funderEmail';";

                          $connValues1 = mysqli_query($con, $sqlInsertRecord) AND mysqli_query($con, $sqlInsertFundUpdate);
                          $connValues2 = mysqli_query($con, $sqlInsertRecordUpdate);
                           if($connValues1 AND $connValues2){
                                  // echo "Inserted successfully";
                              include('popupSuccess.htm');
                        }
                      }else{
                          // echo "<script> alert('Your Balance is Inssufficient');</script>";
                          include('popupFailureInsufficient.htm');
                        }
                      }else{
                          // echo "<script> alert('Your Balance is Inssufficient');</script>";
                          include('popupFailureInsufficient.htm');
                        }
                     }else{
                       // echo "<script> alert('Login Password Error');</script>";
                             include('popupFailurePsswordError.htm');
                     }
                }
?>