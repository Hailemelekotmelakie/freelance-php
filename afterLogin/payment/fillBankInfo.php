<?php include('../../My Account/dbConfig.php');
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="payment.css">
  <script type="text/javascript" src="payment.js"></script>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
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
      <a class="underline" href="fillBankInfo.php"><div class="custom-btn btn-13 innerSelected">Bank Information</div></a>
      <a class="underline" href="addFunds.php"><div class="custom-btn btn-13" >Deposite</div></a>
      <a class="underline" href="withdraw.php"><div class="custom-btn btn-13">Withdraw</div></a>
      <a class="underline" href="transfer.php"><div class="custom-btn btn-13">Transfer</div></a>
      <a class="underline" href="balance.php"><div class="custom-btn btn-13">Balance</div></a>
    </div>
  </div>
  </div>
  <div class="extendedContainer">
    <div class="extendedContainerInner">
      <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formPayment"></span>
            <hr class="my-3">
            <!-- form card cc payment -->
            <div class="card card-outline-secondary alert-info">
              <div class="card-body">
                <h3 class="text-center">Fill Your Bank Information</h3>
                <hr>
                <form autocomplete="off" action="" method="POST">
                  <div class="form-group">
                    <label for="cc_name">First Name</label> 
                    <input name="fullName" class="form-control" id="cc_name" placeholder="Tessema Melakie Hailu" pattern="\w+ \w+ \w+.*" required="required" title="First, Fathers Name and G/Fathers Name" type="text">
                  </div>
                  <div class="form-group row">
                    <label id="bankType" class="col-md-12">Select Bank</label>
                    <div class="col-md-4">
                      <select name="bankType" style="width:auto;" class="form-control" required name="cc_exp_mo" size="0">
                          <option value="">
                          Please select below
                        </option>
                        <option value="1">
                          Commerical Bank of Ethiopia
                        </option>
                        <!-- <option value="2">
                          Bank of Abyssinia
                        </option> -->
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label> 
                    <input name="tel"  autocomplete="off" pattern="[0]{1}[9]{1}[0-9]{3}[0-9]{2}[0-9]{3}" class="form-control" required="" placeholder="094705****" title="Please keep Ethiopian Phone Number Pattern" type="tel">
                  </div>
                  <div class="form-group">
                    <label>Bank Account Number</label> 
                    <input name="bankAccount"  autocomplete="off" class="form-control" maxlength="13" pattern="\d{13}" required="" placeholder="1000183802XXX" title="CBE Account Number" type="text">
                  </div>
                  <hr class="my-1">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <button style="width:auto;" class="btn btn-default btn-lg btn-block" type="reset">Cancel</button>
                    </div>
                    <div class="col-md-6">
                      <button name="bankDetail" style="width:auto;" class="btn btn-success btn-lg btn-block" type="submit">Update</button>
                    </div>
                  </div>
                </form>
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
  // fundID funderName  funderEmail fundAmount  fundType  fundedDate  FundBank  BankAccount timeAgo
   if(isset($_POST['bankDetail'])){
            $BankAccount = filter_var($_POST['bankAccount'],FILTER_SANITIZE_STRING);
            $email = $_SESSION['email'];
          $query = "SELECT * FROM fundtransactions WHERE BankAccount = '$BankAccount' AND funderEmail <> '$email'";
          $results=mysqli_query($con, $query);
          $rows = mysqli_fetch_assoc($results);

          if (empty($rows['BankAccount']) ) { // Meaning record does not exist with BA

      $sqlStCheck = "SELECT * FROM fundtransactions WHERE funderEmail = '$email'";
           $sqlQCheck=mysqli_query($con, $sqlStCheck);
           $rowID = mysqli_fetch_assoc($sqlQCheck);
           if (!empty($rowID['funderEmail'])) {
             //access data from session
                 $funderName = filter_var($_POST['fullName'],FILTER_SANITIZE_STRING);
                 $funderEmail =$_SESSION['email'];
                 $fundedDate = date("d/m/Y");
                 $fundedDay =date("l");
                 $bankType = $_POST['bankType'];
                 $BankAccount = filter_var($_POST['bankAccount'],FILTER_SANITIZE_STRING);
                 $timeAgo = time();
                 $tel=filter_var($_POST['tel'],FILTER_SANITIZE_STRING);
                 $sqlInsert="UPDATE fundtransactions SET tel='$tel', funderName='$funderName',BankAccount='$BankAccount',bankType='$bankType',timeAgo='$timeAgo',fundedDate='$fundedDate', fundedDay='$fundedDay' WHERE funderEmail='$email'";
                 // $sqlInsertRecord="INSERT INTO  bankrecords (funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo) VALUES ('$funderID','$funderName','$BankAccount','$bankType','$funderEmail','$fundedDate','$timeAgo');";
                 //   mysqli_query($con, $sqlInsertRecord);
                if(mysqli_query($con, $sqlInsert)) {
                    // echo   "Your message Update only ";
                  include('popupSuccess.htm');
                }
              }
           else{
            // echo "INSERT";
                //access data from session
                $email = $_SESSION['email'];
                $sqlSt = "SELECT id FROM usertable WHERE email = '$email'";
                $runSql = mysqli_query($con, $sqlSt);
                $rowID = mysqli_fetch_assoc($runSql);
                   $funderID =$rowID['id'];
                   $funderName = filter_var($_POST['fullName'],FILTER_SANITIZE_STRING);
                   $funderEmail =$_SESSION['email'];
                   // $fundAmount = $_POST['fundAmount'];
                   $fundType = null;
                   $fundedDay = date("l");
                   $fundedDate =date("d/m/Y");
                   $bankType = $_POST['bankType'];
                   $BankAccount = filter_var($_POST['bankAccount'],FILTER_SANITIZE_STRING);
                   $timeAgo = time();
                   $tel = filter_var($_POST['tel'],FILTER_SANITIZE_STRING);
                   $sqlInsert="INSERT INTO fundtransactions (funderID,funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo,fundedDay,tel) VALUES ('$funderID','$funderName','$BankAccount','$bankType','$funderEmail','$fundedDate','$timeAgo','$fundedDay','$tel');";
                   $sqlInsertRecord="INSERT INTO bankrecords (funderID,funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo,fundedDay,tel) VALUES ('$funderID','$funderName','$BankAccount','$bankType','$funderEmail','$fundedDate','$timeAgo','$fundedDay','$tel');";

                  if(mysqli_query($con, $sqlInsert) AND mysqli_query($con, $sqlInsertRecord)) {
                     // echo   "Your message insert ";
                     include('popupSuccess.htm');
                  }
           }
            }else{ 
              echo "ACCOUNT ALREADY EXIST";
              include('BankAccountAlredyTaken.html');
              }
          }
