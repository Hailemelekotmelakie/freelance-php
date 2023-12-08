<?php include('dbConfiguration.php');
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
    <link rel="stylesheet" type="text/css" href="css/afterLoginHomepage.css">
    <link rel="stylesheet" type="text/css" href="css/inbox.css">
    <link rel="stylesheet" type="text/css" href="css/ImageSlider.css">



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
                    <li class="active">
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
                    <li style="z-index:1;" class="dropdown">
                        <a href="Profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../../Default pages/My Account/myAccount.php">Profile</a></li>
                            <li><a href="../../Default pagesAM/afterLogin/homepage.php">ወደ አማርኛ</a></li>
                            <li><a href="FAQ.php">FAQ</a></li>
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

	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <p style="font-size: 40px; color:white;">FREELANCING PLATFORM FOR ETHIOPIAN</p>
                <p>Get offers from sellers for your project.</p>
                <a href="RecentJobs.php" class="btn btn-primary btn-lg">FIND A JOB</a>
                <a href="jobRequest.php" class="btn btn-primary btn-lg">POST A JOB</a>
            </div>
        </div>
    </header>
    <!-- /.header -->
    
    <!-- Image Slides -->
    <div class="advertImageDiv">
    <h3 style="text-align: center; font-weight: 700px;">Some services given by our system</h3>
    <div class="slider">
     <div class="rotator">
        <div class="items">
         <a href="RandomJobs.php"><img src="images/1.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/2.jpg" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/3.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/4.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/5.jpg" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/6.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/7.png" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/8.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="RandomJobs.php"><img src="images/9.jpg" alt="items photo" /></a>
        </div>
     </div>
  </div>
  </div>
    <!-- /.Image Slides -->

<div>
    <h3 class="JobListsHompageText">Here are some random jobs you may like</h3>
</div>
    <div class="container ">
     <div class="jobsNewPanel ">
        <!-- if(condiition){ -->
     <?php 
             $email=$_SESSION['email'];
             $jobShow=0;
             $sql = "SELECT * FROM jobs where jobShow ='$jobShow' order by rand() limit 9";
             $result = mysqli_query($con, $sql);
             if (mysqli_num_rows($result)>0) {
               while($row = mysqli_fetch_assoc($result)) {
                         ?>
    <div class="jobsNewSummary ">
            <table width="100%">
              <tr  style="vertical-align: top;">
                <td >
                <div class="itemUpper">
                    <h3 class="CategoryOfJobs"><?php echo $row['jobCategory']; ?></h4>
                    <h5 style="color:#076eaa;" class="priceAndTime"> <?php echo "Budget ".$row['jobBudget']." ETB "?>  &nbsp;</em>
                        <!-- <img style="width: 12px; height: 12px;" src="images/sack-dollar-solid.svg" alt=""/>  -->
                        <span > 
                            <!-- <img style="width: 12px; height: 12 px;" src="images/clock-solid.svg" alt=""> -->
                            <?php echo get_time_ago($row["timeAgo"]); ?>
                       </span> 
                    </h5>
                    <h2 class="h2Find"><?php echo nl2br($row['jobDescription']); ?></h2>


                    <h5 style="color:#076eaa;" class="priceAndTime"> <?php echo "Delivery date ".$row['jobDeadline']; ?> </h5>
                    <!-- <img style="width: 12px; height: 12 px;" src="images/people-carry-box-solid.svg" alt=""> -->

                </div>
                </td>   
                </tr>
                  <tr  style="vertical-align: top;">
                    <td>
                        <div class="buttonDiv">
                            <?php 
                              echo '<a class="custom-btn buttonContactHomepage" target="_blank" href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675'.$row["jobOwnerID"].'">'."Contact Me".'</a>';
                             ?>
                             <?php 
                              echo '<a class="custom-btn buttonContactHomepage" href="engageOffers.php?at='.$row["jobPosterEmail"]."&key=".$row["jobID"].'">'."Offer".'</a>';
                             ?>
                       </div>
                    </td>
                  </tr>
            </table>
        </div>
        <?php
            } 
         }
        ?>
        <!-- if closed } --> 
 
        </div>
        </div>
                        <div class="findMoreJobs">
                          <a class="findMoreJobsLink" href="RandomJobs.php">Find more</a>
                        </div>
    </div>
<!-- boxes end -->




<div>
    <h3 class="JobListsHompageText">Here are some recent jobs you may find</h3>
</div>
    <div class="container ">
     <div class="jobsNewPanel ">
        <!-- if(condiition){ -->
     <?php 
             $email=$_SESSION['email'];
             $jobShow=0;
             $sql = "SELECT * FROM jobs where jobShow ='0' ORDER BY timeAgo desc limit 9";
             $result = mysqli_query($con, $sql);
             if (mysqli_num_rows($result)>0) {
               while($row = mysqli_fetch_assoc($result)) {
                         ?>
    <div class="jobsNewSummary ">
            <table width="100%">
              <tr  style="vertical-align: top;">
                <td >
                <div class="itemUpper">
                    <h3 class="CategoryOfJobs"><?php echo $row['jobCategory']; ?></h4>
                    <h5 style="color:#076eaa;" class="priceAndTime"> 
                        <!-- <img style="color:red;width: 12px; height: 12px;" src="images/sack-dollar-solid.svg" alt=""/>  -->
                        <?php echo "Budget ".$row['jobBudget']." ETB "?>  &nbsp;</em>
                        <span style="color:#076eaa;"> 
                            <!-- <img style="color:red;width: 12px; height: 12 px;" src="images/clock-solid.svg" alt=""> -->
                            <?php echo get_time_ago($row["timeAgo"]); ?>
                       </span> 
                    </h5>
                    <h2 class="h2Find"><?php echo nl2br($row['jobDescription']); ?></h2>


                    <h5  style="color:#076eaa;" class="priceAndTime">
                        <!-- <img style="color:red;width: 12px; height: 12 px;" src="images/people-carry-box-solid.svg" alt="">  -->
                        <?php echo "Delivery date ".$row['jobDeadline']; ?> </h5>

                </div>
                </td>   
                </tr>
                  <tr  style="vertical-align: top;">
                    <td>
                        <div class="buttonDiv">
                            <?php 
                              echo '<a class="custom-btn buttonContactHomepage"  href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675='.$row["jobOwnerID"].'">'."Contact Me".'</a>';
                             ?>
                            <!-- <button class="custom-btn buttonContactHomepage" type="button">Contact</button> -->
                       </div>
                    </td>
                  </tr>
            </table>
        </div>
        <?php
            } 
         }
        ?>
        <!-- if closed } --> 
 
                        </div>
                        <div class="findMoreJobs">
                          <a class="findMoreJobsLink" href="RecentJobs.php">Find more</a>
                        </div>
    </div>
<!-- boxes end -->
<!-- 
<div class="advertTextDiv">
    <h3 class="JobListsHompageText">Sponsors</h3>
    <h5 class="h2Find">Untill now no one is sponsered with me. If you need to do with me, I am open to work with anyone.</h5>
    <h5 class="h2Find">I also develop a website for any one.</h5>
</div> -->

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
<!-- < ?php
 function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return '1 second ago'; }
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
?> -->