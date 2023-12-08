<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Reviwes.css">
    <title>review</title>
</head>
<body>
<div class="SuccessPopup">
                    <!-- --------------------------------------------------------------- -->
     					<h3>Paid Successfully</h3>
                    <!-- --------------------------------------------------------------- -->

                    <!-- popup  -->
				            <div class="form-container">
				              <form action="" method="POST" class="form-container" >
				                <h3>Review</h3>
				                <p for="report"><b>How was Your Progress with this Person.</b></p><br>
				                <textarea name="review" class="textareaInput" placeholder="Enter a review"  required></textarea>
				                <button name="submitReview" type="submit" class="btn">Set a Review</button>
				              </form>
				     		    <a style="text-decoration: none;" class="btn cancel" href="transfer.php">Skip</a>
				            </div>

				        <!-- popup  end   -->
</div>
</body>
</html>

<?php 
  if (isset($_POST['submitReview'])) {
    $sendersEmail=$_SESSION['email'];
    $review=$_POST['review'];
    $temporaryBalance=$_POST['temporaryBalance'];
    $timeAgo=time();
     // Receivers
     $BankAccount=$_POST['BankAccount'];
     $sqlSt = "SELECT * FROM fundtransactions WHERE BankAccount = '$BankAccount'";
     $runSql = mysqli_query($con, $sqlSt);
     $rowID = mysqli_fetch_assoc($runSql);
     $funderEmail=$rowID['funderEmail'];
     $SQL="INSERT INTO reviews (reviewerSender, reviewerReceiver, review, timeAgo, temporaryBalance) Values('$sendersEmail','$funderEmail','$review','timeAgo','$temporaryBalance')";
     $runSql = mysqli_query($con, $SQL);

  }
?>