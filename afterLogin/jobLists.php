<?php include('dbConfig.php');
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


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/jobRequest.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/inbox.css">


    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- <link href="css/customOthers.css" rel="stylesheet"> -->
    <script type="text/javascript" src="js/JobRequest.js"></script>
    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body onload="functionOnload();">


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
                            <li><a href="../../Default pagesAM/afterLogin/jobLists.php">ወደ አማርኛ</a></li>
                            <li><a href="FAQ.php">FAQ</a></li>
                            <li ><a href="showNotification.php">
                                New Notifications
                                <span>
                                    <?php
                                    $con=mysqli_connect("localhost","huliesiracom_hailemelekotmelakie","WebHostEthiopiaHailemelekotMelakie1991H.","huliesiracom_userform");
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
                            <li class="active"><a href="jobLists.php">View Your Job Lists</a></li>
                            <li><a href="../../Default pages/Login and Signup Form with Email Verification - PHP/logout-user.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>


<!-- ForThe FIRST page -->
<div class="postAJob">
    <center>
        POST JOBS HERE AND GET AN OFFER<br>
        <button class="btn-go-job-posting" onclick="location.href='../../Default pages/afterLogin/jobRequest.php';" type="submit" name="submitPersonal" value="Update">POST A JOB</button>
    </center>
</div>
    
    <!-- ForThe Third page -->
    <div id="jobsDisplay" class="jobsDisplay">
                <div class="tdTexts">
                    <center>
                    <h2 class="h3tdText">Here are your lists of jobs</h2>
                    </center>
                </div>
                <div class="tdTexts">
                            <?php 
                            $email= $_SESSION['email'];
                            $sql = "SELECT * FROM jobs where jobPosterEmail='$email'";
                            $counter = 1;
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)>0) {
                              while($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                <div class="outputPHP">
                                    <hr style="border-color: green;">
                                    <center><h3 class="h3tdText">Brief summary of Job number <?php echo $counter; ?></h3></center>
                                    <h3 class="h3tdText">Your detail description</h3>
                                    <label class="labelForm" ><?php echo $row['jobDescription']; ?></label><br>
                                    <h3 class="h3tdText">Service type or Category</h3>
                                    <label class="labelForm"><?php echo $row['jobCategory']; ?></label><br>
                                    <h3 class="h3tdText">Deadline</h3>
                                    <label class="labelForm" ><?php echo "Deliver by ".$row['jobDeadline']; ?></label><br>
                                    <h3 class="h3tdText">Budget</h3>
                                    <label class="labelForm"><?php echo $row['jobBudget']." ETB"; ?></label><br>
                                    <h3 class="h3tdText">Submitted</h3>
                                    <label class="labelForm"><?php echo get_time_ago($row["timeAgo"]); ?></label><br>
                                    <h3 class="h3tdText">Status</h3>
                                    <label class="labelForm"><?php if($row['jobShow']==1){
                                                                       echo "Your brief is now in reviewing yet.";
                                                                    }elseif($row['jobShow']==2){
                                                                       echo "<p style='color:red; font-weight:700;'>Your brief is Declined.<br>Your brief may be unrelevant for our system.</p>";
                                                                    }else{
                                                                        echo "Your brief is posted for service Providers.";
                                                                    } 
                                                                    ?></label>
                                    <form action="jobLists.php"  method="POST">
                                        <?php 
                                        if($row['jobShow']==2){  ?>
                                            <input type="submit" class="buttonDelete fa" name="delete" value="Delete">
                                            <input type="hidden" name="hided" value="<?php echo $row['jobID'] ?>">
                                        <?php } ?>
                                    </form>
                                </div>
                                <br>
                            <?php
                                      
                                      $counter++;
                                  }
                                    } else {
                                        ?>
                                            <h3 class="h3tdText">No records Found.</h3>
                                        <?php
                                    } 
                         ?>
                </div>
    </div>
</form>
</div>


    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>
    
<!-- preloader -->
<?php  include '../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/loader.css">

<footer>
    <link rel="stylesheet" type="text/css" href="../../Default pages/imported/footer.css">
    <?php include('../../Default pages/imported/footer.html'); ?>
    </footer>
</body>
</html>

<?php 

//  function get_time_ago( $time )
// {
//     $time_difference = time() - $time;

//     if( $time_difference < 1 ) { return 'less than 1 second ago'; }
//     $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
//                         30 * 24 * 60 * 60       =>  'month',
//                         24 * 60 * 60            =>  'day',
//                         60 * 60                 =>  'hour',
//                         60                      =>  'minute',
//                         1                       =>  'second'
//             );

//     foreach( $condition as $secs => $str )
//     {
//         $d = $time_difference / $secs;

//         if( $d >= 1 )
//         {
//             $t = round( $d );
//          return 'About ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';        }
//     }
// }


// sql to delete a record
  if(isset($_POST['delete'])){
    $hidedID=$_POST['hided'];
    $sql = "DELETE FROM jobs WHERE jobID=$hidedID";

    if (mysqli_query($con, $sql)) {
            echo "<script> alert('Record deleted successfully');</script>";
    } else {
            echo "<script> alert('Failed to delete a record.');</script>";
    }
}

 ?>


