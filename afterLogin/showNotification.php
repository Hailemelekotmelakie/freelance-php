<?php include('../../Default pages/My Account/dbConfig.php');
session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
    header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 // $timeAgo=time();
 // $sql="INSERT INTO notification (subject, noticeReceiverEmail, notice,notificationStatus,timeAgo) VALUES ('Haile','$noticeReceiverEmail', 'may anme is hailemelekotha ilemelekot hailemelekothail ilemelekothailemele kothaililemelekothail emelekothaililemeleko thailemelekothail ilemelekotha ilemelekothail emelekothailemelekot ','1','$timeAgo') ";
	// $Insertion = mysqli_query($con, $sql);
	// if ($Insertion) {
		// echo("hope");
	// }
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
    <link rel="stylesheet" type="text/css" href="css/notification.css">
    <link rel="stylesheet" type="text/css" href="css/inbox.css">


    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
   

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
                        <link rel="stylesheet" type="text/css" href="../../Default pages/afterLogin/messageInbox/inbox.css">
                        <a href="#" ><?php include('../../Default pages/afterLogin/messageInbox/inboxMessage.php'); ?></a>
                    </li>
                    <li style="z-index:1;">
                        <a href="payment/fillBankInfo.php" target="_blank" rel="noopener noreferrer">Payment</a>
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
                            <li><a href="../../Default pagesAM/afterLogin/showNotification.php">ወደ አማርኛ</a></li>
                            <li><a href="FAQ.php">FAQ</a></li>
                            <li class="active"><a href="showNotification.php">
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
                                             echo "<span style='color:red;'>(0)</span>";
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

<!--  -->
  <div class="contentDivReadedUnreadedLists">
    <h4 style="text-align:center;background: #a1e9e7;border-radius: 3px; font-weight: 700; padding: 20px 3px 15px 3px;">Latest 50 notices are displayed here</h4>
    	<?php
        $noticeReceiverEmail=$_SESSION['email'];
			$sql = "SELECT * FROM notification WHERE noticeReceiverEmail='$noticeReceiverEmail' ORDER BY notificationID desc limit 50";
             $result = mysqli_query($con, $sql);
             if (mysqli_num_rows($result)>0) {
               while($row = mysqli_fetch_assoc($result)) {
                  $notificationStatus=$row['notificationStatus'];
                  if ( $notificationStatus==1) {
                         ?>
						      	<div class="unreadedNewDiv">
								 		<label><?php echo "Subject: ".$row['subject']; ?></label><br>
								 		<p style="padding-left: 20px;"><?php echo "Notice: ".$row['notice']; ?></p>
								 		<p style="text-align: right;"><?php echo "Sent ".get_time_ago($row["timeAgo"]); ?></p>
							 	</div>
         			    <?php
				}else{
					 ?>
						      <div class="readedNewDiv">
								 		<label ><?php echo "Subject: ".$row['subject']; ?></label><br>
								 		<p style="padding-left: 20px;"><?php echo "Notice: ".$row['notice']; ?></p>
								 		<p style="text-align: right;"><?php echo "Sent ".get_time_ago($row["timeAgo"]); ?></p>
							 	</div>
         			  <?php
	 		}
	 	}
 	} 

        $noticeReceiverEmail=$_SESSION['email'];
        // $sqlNot = "SELECT * FROM notification";
        //      $resultNot = mysqli_query($con, $sqlNot);
        //      $rowNot = mysqli_fetch_assoc($resultNot);
                $sqlNot = "UPDATE notification SET notificationStatus=0 WHERE noticeReceiverEmail='$noticeReceiverEmail'";
                if(mysqli_query($con, $sqlNot)) {
                    }
 	?>

  </div>


<!-- preloader -->

<?php  include '../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/loader.css">

<!-- footer -->

<footer>
    <link rel="stylesheet" type="text/css" href="../../Default pages/imported/footer.css">
    <?php include('../../Default pages/imported/footer.html'); ?>
</footer>


<!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>
</body>
</html>

<?php
        $noticeReceiverEmail=$_SESSION['email'];
		$sql = "SELECT * FROM notification";
             $result = mysqli_query($con, $sql);
             $row = mysqli_fetch_assoc($result);
		        $sql = "UPDATE notification SET notificationStatus=0 WHERE noticeReceiverEmail='$noticeReceiverEmail'";
		        if(mysqli_query($con, $sql)) {
					}
?>
<!-- // function get_time_ago( $time )
//        				{
// 				    	$time_difference = time() - $time;

// 					    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
// 					    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
// 					                        30 * 24 * 60 * 60       =>  'month',
// 					                        24 * 60 * 60            =>  'day',
// 					                        60 * 60                 =>  'hour',
// 					                        60                      =>  'minute',
// 					                        1                       =>  'second'
// 					            );

// 					    foreach( $condition as $secs => $str )
// 					    {
// 					        $d = $time_difference / $secs;

// 					        if( $d >= 1 )
// 					        {
// 					            $t = round( $d );
// 					         return 'About ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';        }
// 					    }
// 					}
// ?  >
 -->