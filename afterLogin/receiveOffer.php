<?php include('../../Default pages/My Account/dbConfig.php');
session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
    header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ethiolancer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/afterLoginHomepage.css">
    <link rel="stylesheet" type="text/css" href="css/inbox.css">
    <link rel="stylesheet" type="text/css" href="css/engageOffers.css">   

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>


    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Homepage.php">
                    <span class="glyphicon glyphicon-fire"></span> 
                    ETHIOLANCER
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul  class="nav navbar-nav navbar-right">
                    <li>
                        <a href="Homepage.php">Home</a>
                    </li>
                    <li>
                        <a href="Services.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="RandomJobs.php">Website Development</a></li>
                            <li><a href="RandomJobs.php">Web Designer</a></li>
                            <li><a href="RandomJobs.php">Mobile App Development</a></li>
                            <li><a href="RandomJobs.php">Graphics Design</a></li>
                            <li><a href="RandomJobs.php">Logo Design</a></li>
                            <li><a href="RandomJobs.php">Writing & translating</a></li>
                            <li><a href="RandomJobs.php">Data Entry</a></li>
                            <li><a href="RandomJobs.php">Audio and Vidio Editing</a></li>
                            <li><a href="RandomJobs.php">Document and proposal preparation </a></li>
                            <li><a href="RandomJobs.php">Content Writer</a></li>
                            <li><a href="RandomJobs.php">Image Background removing </a></li>
                            <li><a href="RandomJobs.php">Converting photos to text, word, excel and etc. </a></li>

                        </ul>
                    </li>
                    <li style="z-index:1;">
                        <a href="Contact.php">Contact</a>
                    </li>
                    <li style="z-index:1;">
                        <a href="About.php">About</a>
                    </li>
                    <li style="z-index:99999;">
                        <a href="#" ><?php include('../../Default pages/afterLogin/messageInbox/inboxMessage.php'); ?></a>
                    </li>
                    <li style="z-index:1;">
                        <!-- <a href="payment/fillBankInfo.php" target="_blank" rel="noopener noreferrer">Payment</a> -->
                        <a href="payment/captcha.php" target="_blank" rel="noopener noreferrer">Payment</a>
                    </li>
                    <li style="z-index:1;">
                        <a href="jobRequest.php">Post Job Request</a>
                    </li>
                    <li style="z-index:1;">
                        <a href="RandomJobs.php">Find Jobs</a>
                    </li>
                    <li style="z-index:1;" class="dropdown active">
                        <a href="Profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../../Default pages/My Account/myAccount.php">Profile</a></li>
                            <li><a href="../../Default pagesAM/afterLogin/FAQ.php">ወደ አማርኛ</a></li>
                            <li class="active"><a href="FAQ.php">FAQ</a></li>
                            <li ><a href="showNotification.php">
                                New Notifications
                                <span>
                                    <?php
                                    $noticeReceiverEmail=$_SESSION['email'];
                                    $notNum=0;
                                    $sql = "SELECT * FROM notification WHERE noticeReceiverEmail='$noticeReceiverEmail' AND notificationStatus='1' "; 
                                     $result = mysqli_query($con, $sql);
                                     if (mysqli_num_rows($result)>0) {
                                       while($row = mysqli_fetch_assoc($result)) {
                                        
                                            $notNum=$notNum+1;
                                        }
                                            ?>
                                            <?php echo "<span style='color:red;'>(".$notNum.")</span>"; ?>
                                                <?php
                                        }else{
                                             echo "<spa n style='color:red;'>(0)</span>";
                                        }
                                        ?>
                                    </span>
                                </a>
                            </li>
                            <li><a href="jobLists.php">View Your Job Lists</a></li>
                            <li><a href="../../Default pages/Login and Signup Form with Email Verification - PHP/logout-user.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
        <?php   
        $jobOwnerEmail=$_SESSION['email'];
        $sql="SELECT * From  offerslist WHERE receiverEmail='$jobOwnerEmail' ";
        $sqlResult=mysqli_query($con, $sql);
        if (mysqli_num_rows($sqlResult)>0) {
        while ($row = mysqli_fetch_assoc($sqlResult)){
            // if ($row['jobShow']==0) {
                ?>
                <form method="POST" action="receiveOffer.php?HMMT=<?php echo $row['OfferID']; ?>"><br>
                    <h2>OFFERS FOR THIS JOB</h2>
                        <label>From: <?php  echo $row['senderEmail'];  ?></label><br>
                        <label> Job Category: <?php echo $row['jobCategory']; ?></label><br>
                        <label>Job Description: <?php echo $row['jobDescription']; ?></label><br>
                        <label><?php echo get_time_ago($row["timeAgo"]); ?></label><br>
                        <label>Your Price in ETB :  <?php echo $row["jobBudget"]; ?></label><br>
                        <label>Sends an offer of ETB :  <?php echo $row["offeringPrice"]; ?></label><br>
                        <?php 
                        if ($row['jobShow']==0) {?>
                            <input type="Submit" name="acceptOffer"  value="Accept Offer">
                            <?php
                        }elseif ($row['jobShow']==1) {?>
                            <input type="Submit" name="approvePayment"  value="Approve Payment">
                        <?php }elseif ($row['jobShow']==2) { ?>
                               <label>Paid</label>
                               <input type="Submit" name="clear"  value="clear">
                               <?php
                        } ?>
                </form>
                <?php

        }
    }else{
        echo "NOT BIDDED YET";
    }
        ?>


<?php

    $offerId= $_GET['HMMT'];                            //Offer ID
    $selectOfferID="SELECT * FROM offerslist WHERE OfferID='$offerId'";
    $selectOfferIDResult=mysqli_query($con,$selectOfferID);
    $selectOfferIDRow=mysqli_fetch_assoc($selectOfferIDResult);
        $offeredPrice = $selectOfferIDRow['offeringPrice']; //new Price Offered
        $sender = $selectOfferIDRow['senderEmail'];         //Jobseeker
        $jobID = $selectOfferIDRow['jobID'];                //JOb ID
        $receiver = $_SESSION['email'];                     //Owner

if (isset($_POST['acceptOffer'])) {

    // make job Hidden 1
    // make payment to offers DB 
    // deacrease payment from bankRecords DB
    // deacrease payment from fundtransactions DB
    // 100--for making hidden

    $sqlJobs="UPDATE jobs SET jobShow='100' WHERE jobID='$jobID' AND jobPosterEmail='$receiver' ";

    // fund tranasctions
    $sqlStFund = "SELECT * FROM fundtransactions WHERE funderEmail='$receiver' ";
         $runSqlFund = mysqli_query($con, $sqlStFund);
         $rowFund = mysqli_fetch_assoc($runSqlFund);
         $newAccountBalance=$rowFund['accountBalance']-$offeredPrice; //ACCOUNT BALANCE
         $funderID=$rowFund['funderID'];
         $funderName=$rowFund['funderName'];
         $BankAccount=$rowFund['BankAccount'];
         $funderEmail=$rowFund['funderEmail'];
         $fundedDay = date("l");
         $fundedDate =date("d/m/Y");
         $timeAgo=time();
         $temporaryBalance = $offeredPrice;
         $fundType='-';
         // $bankType='-';
         $fundState=0;
         $tel=$rowFund['tel'];

    $sqlFundtransactions="UPDATE fundtransactions set accountBalance='$newAccountBalance' WHERE $newAccountBalance>=0 ";

    $sqlBankrecords="INSERT INTO bankrecords (funderID,funderName,BankAccount,bankType,funderEmail,fundedDate,timeAgo,fundedDay,temporaryBalance,accountBalance,fundType,fundState,tel) VALUES ('$funderID','$funderName','$BankAccount','Commercial Bank Of Ethiopia','$$receiver','$fundedDate','$timeAgo','$fundedDay','$temporaryBalance','$newAccountBalance','$fundType','$fundState','$tel') ;";


    $sqlOffers="UPDATE offerslist SET jobShow=100 WHERE OfferID='$offerId' ";


    $resultJobs=mysqli_query($con, $sqlJobs);
    $resultOffers=mysqli_query($con, $sqlOffers);
    $resultFundtransactions=mysqli_query($con, $sqlFundtransactions);
    $resultBankrecords=mysqli_query($con, $sqlBankrecords);

    if ((mysqli_num_rows($resultJobs)>0) AND (mysqli_num_rows($resultOffers)>0) AND (mysqli_num_rows($resultFundtransactions)>0) AND (mysqli_num_rows($sqlBankrecords)>0)) {
        echo 'Success';
    }
}
?>





<?php
if (isset($_POST['approvePayment'])) {
    echo $_GET['HMMT']." Approved";
    // make 2

}
?>


<?php
if (isset($_POST['clear'])) {
    echo $_GET['HMMT']." Clear";
    // make 2

}
?>












<!-- preloader -->
<?php  include '../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/loader.css">

<footer>
    <?php include('../../Default pages/imported/footer.html'); ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/footer.css">
</footer>
<!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>
    <script src="js/ImageSlider.js"></script>
</body>
</html>
