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
	<link rel="stylesheet" type="text/css" href="payment.css">
  <link rel="stylesheet" type="css/scss" href="balance.scss">
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

<!-- Main body Starts -->
 <div class="row">
  <div class="menusContainer">
    <div class="menusContainerInner">
		<div id="btn-container">
		  <a class="underline" href="fillBankInfo.php"><div class="custom-btn btn-13">Bank Information</div></a>
      <a class="underline" href="addFunds.php"><div class="custom-btn btn-13" >Deposite</div></a>
      <a class="underline" href="withdraw.php"><div class="custom-btn btn-13">Withdraw</div></a>
      <a class="underline" href="transfer.php"><div class="custom-btn btn-13">Transfer</div></a>
      <a class="underline" href="balance.php"><div class="custom-btn btn-13 innerSelected">Balance</div></a>
		</div>
	</div>
  </div>

  <div class="extendedContainer">
  	<div class="extendedContainerInner">
    	 <div class="my-app">
        <main>
          <section class="my-app__body ">
            <div class="container">
              <div class="row">
                <div class="col-12">

                  <div class="my-alert alert alert-info">
                    <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                    <span class="my-alert__text">
                      Your latest transaction may take a up to one or two bussiness day to show up in your activity.
                      <br>You can call us: +251 947 053 537 / +251 972 027 254
                    </span>
                  </div>
                 
                  <!-- Begin Balance card -->
                  <div class="my-card card">
                    <div class="my-card__header card-header">
                      <div class="my-card__header-title">
                        <div class="my-text-overline">Current Balance</div>
                        <h3 class="my-text-headline">
                          <?php
                            $email=$_SESSION['email'];
                            $sqlSt = "SELECT * FROM fundtransactions WHERE funderEmail = '$email'";
                            $runSql = mysqli_query($con, $sqlSt);
                            $rowID = mysqli_fetch_assoc($runSql);
                            if (empty($rowID['accountBalance'])) {
                             echo "ETB "."0.00";
                               ?>
                           <!--  <div class="my-alert alert alert-warning">
                                <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                                     <span class="my-alert__text">
                                       <h>Your Balance is zero, Please Deposite.<h>
                                        <a class='btn btn-success btn-lg btn-block' href='deposite.php'>Deposite</a>
                                      </span>
                                   </div>
                             </div> -->
                              <?php 
                            }
                            else{
                            echo "ETB ".$rowID['accountBalance'];
                            }
                          ?>
                        </h3>
                    </div>
                  </div>
                  <!-- End Payment Balance card -->
                <?php
                  $email=$_SESSION['email'];
                  $sqlStPending = "SELECT * FROM bankrecords WHERE funderEmail = '$email' ORDER BY timeAgo desc limit 50";
                  $runSqlPending = mysqli_query($con, $sqlStPending);
                    ?>
                      <!-- Begin Pending card -->
                      <div class="my-card card alert-success">
                        <div class="my-card__header card-header">
                          <h3 class="my-card__header-title card-title">Pending</h3>
                          <!-- <a class="my-card__header-link" href="#">See all →</a> -->
                        </div>
                        <?php
                          while($rowIDPending = mysqli_fetch_assoc($runSqlPending)){
                          if ($rowIDPending['fundState']==2) {
                            ?>
                        <ul class="my-list list-group list-group-flush">
                          <li class="my-list-item list-group-item">
                            <div class="my-list-item__text">
                              <h4 class="my-list-item__text-title">Commercial Bank of Ethiopia</h4>
                              <p class="my-list-item__text-description">Pending</p>
                            </div>
                            <div class="my-list-item__date">
                              <span span class="my-list-item__date-month"><?php echo get_time_ago($rowIDPending["timeAgo"]); ?></span>
                            </div>
                            <div class="my-list-item__date">
                              <span class="my-list-item__date-day"><?php echo $rowIDPending['fundedDate']; ?></span>
                              <span class="my-list-item__date-month"><?php echo $rowIDPending['fundedDay']; ?></span>
                            </div>
                            <div class="my-list-item__fee">
                              <span class="my-list-item__fee-delta"><?php echo $rowIDPending['fundType'].$rowIDPending['temporaryBalance'].".00";  ?></span>
                              <span class="my-list-item__fee-currency">ETB</span>
                            </div>
                          </li>
                        </ul>
                             <?php
                              }else{
                               ?>
        
                                    <?php
                                // break;
                              }
                            }
                            ?>
                      </div>
                      <!-- End Pending card -->





                      <div class="my-card card alert-success">
                        <div class="my-alert alert alert-info">
                          <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                          <span class="my-alert__text">
                            Your latest completed transaction appears here
                          </span>
                        </div>
                      <?php
                      // include'balanceInclude.php';
                    $email=$_SESSION['email'];
                    $sqlStCompleted = "SELECT * FROM bankrecords WHERE funderEmail = '$email' ORDER BY timeAgo desc limit 50";
                    $runSqlCompleted = mysqli_query($con, $sqlStCompleted);
                    ?>
                  <!-- Begin Completed card -->
                  <div class="my-card card alert-success">
                    <div class="my-card__header card-header">
                      <h3 class="my-card__header-title card-title">Completed</h3>
                      <!-- <a class="my-card__header-link" href="#">See all →</a> -->
                    </div>
                    <?php
                          while($rowIDCompleted = mysqli_fetch_assoc($runSqlCompleted)){
                          if ($rowIDCompleted['fundState']==1 ) {
                            ?>
                    <ul class="my-list list-group list-group-flush">
                      <li class="my-list-item list-group-item">
                        <div class="my-list-item__text">
                          <h4 class="my-list-item__text-title">Commercial Bank of Ethiopia</h4>
                          <p class="my-list-item__text-description">Payment Sent Successfully</p>
                        </div>
                        <div class="my-list-item__date">
                          <span span class="my-list-item__date-month"><?php echo get_time_ago($rowIDCompleted["timeAgo"]); ?></span>
                        </div>
                        <div class="my-list-item__date">
                          <span class="my-list-item__date-day"><?php echo $rowIDCompleted['fundedDate']; ?></span>
                          <span class="my-list-item__date-month"><?php echo $rowIDCompleted['fundedDay']; ?></span>
                        </div>
                        <div class="my-list-item__fee">
                          <span class="my-list-item__fee-delta"><?php echo $rowIDCompleted['fundType'].$rowIDCompleted['temporaryBalance'].".00";  ?></span>
                          <span class="my-list-item__fee-currency">ETB</span>
                        </div>
                      </li>
                    </ul>
                    <?php
                              }else{
                               ?>
                                     <!-- <div class="my-alert  alert-info">
                                      <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                                      <span class="my-alert__text">
                                        You can not have latest transaction on your activity.
                                      </span>
                                    </div> -->
                                    <?php
                                // break;
                              }
                            }
                            ?>
                            
                  <!-- End Completed card -->
                </div>
                      <!-- ?> -->
                      </div>
                      <!-- < ?php
                  $email=$_SESSION['email'];
                  $sqlSt = "SELECT * FROM bankrecords WHERE funderEmail = '$email' ORDER BY timeAgo desc limit 50";
                  $runSql = mysqli_query($con, $sqlSt);
                    ?> -->


                  <!-- Begin Completed card -->
                  <!-- <div class="my-card card alert-success">
                    <div class="my-card__header card-header">
                      <h3 class="my-card__header-title card-title">Completed</h3>
                      < !-- <a class="my-card__header-link" href="#">See all →</a> -- >
                    </div>
                    < ?php
                          while($rowID = mysqli_fetch_assoc($runSql)){
                          if ($rowID['fundState']==1) {
                            ?>
                    <ul class="my-list list-group list-group-flush">
                      <li class="my-list-item list-group-item">
                        <div class="my-list-item__text">
                          <h4 class="my-list-item__text-title">Commercial Bank of Ethiopia</h4>
                          <p class="my-list-item__text-description">Payment Sent Successfully</p>
                        </div>
                        <div class="my-list-item__date">
                          <span span class="my-list-item__date-month">< ?php echo get_time_ago($rowID["timeAgo"]); ?></span>
                        </div>
                        <div class="my-list-item__date">
                          <span class="my-list-item__date-day">< ?php echo $rowID['fundedDate']; ?></span>
                          <span class="my-list-item__date-month">< ?php echo $rowID['fundedDay']; ?></span>
                        </div>
                        <div class="my-list-item__fee">
                          <span class="my-list-item__fee-delta">< ?php echo $rowID['fundType'].$rowID['temporaryBalance'].".00";  ?></span>
                          <span class="my-list-item__fee-currency">ETB</span>
                        </div>
                      </li>
                    </ul>
                    < ?php
                              }else{
                               ?>
                                      < !-- <div class="my-alert  alert-info">
                                      <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                                      <span class="my-alert__text">
                                        You can not have latest transaction on your activity.
                                      </span>
                                    </div> -- >
                                    < ?php
                                break;
                              }
                            }
                            mysqli_close($con);
                            ?>
                  </div> -->
                  <!-- End Completed card -->
                </div>
              </div>
            </div>
          </section>
          <!-- End content body -->
        </main>
      </div>
    </div>
  </div>
  </div>
  <!-- Main body ends -->




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
 function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                        30 * 24 * 60 * 60       =>  'month',
                        24 * 60 * 60            =>  'day',
                        60 * 60                 =>  'hour',
                        60                      =>  'minute',
                        1                       =>  'second'
            );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
         return 'About ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';        }
    }
}

 ?>
