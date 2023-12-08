<?php include('../../Default pages/My Account/dbConfig.php');
// session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
  header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payments</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Boostrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Payment.css">
  <link rel="stylesheet" type="text/css" href="balance.scss">
	<script type="text/javascript" src="Payment.js"></script>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
</head>
<body>
<!-- ------------------------------------------------------------------------------ -->

                  <div class="my-alert alert alert-info">
                    <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                    <span class="my-alert__text">
                      Your latest completed transaction appears here
                    </span>
                  </div>
                
                  <?php
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
                          if ($rowIDCompleted['fundState']==1) {
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
                                break;
                              }
                            }
                            ?>
                  <!-- End Completed card -->
                </div>

</body>
</html>
