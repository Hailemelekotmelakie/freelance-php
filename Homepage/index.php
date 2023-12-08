<?php 
include('../../Default pages/My Account/dbConfig.php');
session_start();
// if(!empty($_SESSION['email'])){
//    header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
//  }
//  else if ($_SESSION['email']) {
//    header('Location: ../../Default pages/afterLogin/homepage.php');
//  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Online ethiopian freelancers ">
    <meta name="keywords" content="huliesira, hulie sira, hule sra, hulesra, hulesira, huliesra, Freelance, Ethiopian Freelance, freelance jobs, Ethio Freelance, Ethiolance, online jobs, online Bussiness, online jobs in ethiopia, work, online works, online workes in ethiopia ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ethiolancer</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    
    <!-- Bootstrap Core CSS -->
    <link href="../afterLogin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link rel="stylesheet" type="text/css" href="../afterLogin/css/afterLoginHomepage.css">
    <link href="../afterLogin/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../afterLogin/css/ImageSlider.css">
   

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
                <a class="navbar-brand" href="index.php">
                    <span class="glyphicon glyphicon-fire"></span> 
                    ETHIOLANCER
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul  class="nav navbar-nav navbar-right">
                    <li class="active">
                        <!-- <a href="index.php">Home</a> -->
                        <a href="Ethiolance">Home</a>
                    </li>
                    <li>
                        <a href="Services.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Website Development</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Web Designer</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Mobile App Development</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Graphics Design</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Logo Design</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Writing & translating</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Data Entry</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Audio and Vidio Editing</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Document and proposal preparation </a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Content Writer</a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Image Background removing </a></li>
                            <li><a href="../../Default pages/afterLogin/RandomJobs.php">Converting photos to text, word, excel and etc. </a></li>

                        </ul>
                    </li>
                    <li >
                        <!-- <a href="Contact.php">Contact</a> -->
                        <a href="Contact-us">Contact</a>
                    </li>
                    <li >
                        <!-- <a href="About.php">About</a> -->
                        <a href="About-us">About</a>
                    </li>
                    <li>
                        <a href="../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php">Login</a>
                    </li>
                    <li>
                        <a href="../../Default pages/Login and Signup Form with Email Verification - PHP/signup-user.php">Signup</a>
                    </li>
                    <li>
                        <!-- <a href="FAQ.php">FAQ</a> -->
                        <a href="Frequently-asked-questions">FAQ</a>
                    </li>
                    <li><a href="../../Default pagesAM/Homepage/index.php">ወደ አማርኛ</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <p style="font-size: 45px; color:white;">FREELANCING PLATFORM FOR ETHIOPIAN</p>
                <p>Get offers from sellers for your project.</p>
                <a href="../afterLogin/RecentJobs.php" class="btn btn-primary btn-lg">FIND A JOB</a>
                <a href="../afterLogin/jobRequest.php" class="btn btn-primary btn-lg">POST A JOB</a>
            </div>
        </div>
    </header>
    <!-- /.Header -->

    <!-- Images rotating -->
    <!-- <div class="advertImageDiv">    
    <h3 style="text-align: center; font-weight: 700px;">Some services given by our system</h3>
    <div class="slider">
     <div class="rotator">
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/1.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/2.jpg" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/3.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/4.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/5.jpg" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/6.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/7.png" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/8.jpg" alt="items photo" /></a>
        </div>
        <div class="items">
           <a href="../afterLogin/RandomJobs.php"><img src="../afterLogin/images/9.jpg" alt="items photo" /></a>
        </div>
     </div>
  </div>
</div> -->
    <div class="wrapperHulieSira">
        <h3 class="JobListsHompageText">Services you may found in our system</h3>
        <div class="photobannerHulieSira">
            <img src="../afterLogin/images/1.jpg" alt="" />
            <img src="../afterLogin/images/2.jpg" alt="" />
            <img src="../afterLogin/images/3.jpg" alt="" />
            <img src="../afterLogin/images/4.jpg" alt="" />
            <img src="../afterLogin/images/5.jpg" alt="" />
            <img src="../afterLogin/images/6.jpg" alt="" />
            <img src="../afterLogin/images/7.png" alt="" />
            <img src="../afterLogin/images/8.jpg" alt="" />
            <img src="../afterLogin/images/2.jpg" alt="" />
        </div>
    </div>

    <!-- /.Images rotating -->

<div>
    <h3 class="JobListsHompageText">Here are some random jobs you may like</h3>
</div>
    <div class="container ">
     <div class="jobsNewPanel ">
        <!-- if(condiition){ -->
     <?php 
             // $email=$_SESSION['email'];
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
                    <h5 class="priceAndTime"> <img style="color:red;width: 12px; height: 12px;" src="images/sack-dollar-solid.svg" alt=""/> <?php echo "Budget ".$row['jobBudget']." ETB "?>  &nbsp;</em>
                        <span> 
                            <img style="color:red;width: 12px; height: 12 px;" src="images/clock-solid.svg" alt="">
                            <?php echo get_time_ago($row["timeAgo"]); ?>
                       </span> 
                    </h5>
                    <h2 class="h2Find"><?php echo nl2br($row['jobDescription']); ?></h2>


                    <h5 class="priceAndTime"><img style="color:red;width: 12px; height: 12 px;" src="images/people-carry-box-solid.svg" alt=""> <?php echo "Delivery date ".$row['jobDeadline']; ?> </h5>

                </div>
                </td>   
                </tr>
                  <tr  style="vertical-align: top;">
                    <td>
                        <div class="buttonDiv">
                            <?php 
                              echo '<a class="custom-btn buttonContactHomepage" target="_blank" href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675='.$row["jobOwnerID"].'">'."Contact Me".'</a>';
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
        </div>
                        <div class="findMoreJobs">
                          <a class="findMoreJobsLink" href="../../Default pages/afterLogin/RandomJobs.php">Find more</a>
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
             // $email=$_SESSION['email'];
             $jobShow=0;
             $sql = "SELECT * FROM jobs where jobShow ='$jobShow' ORDER BY timeAgo desc limit 9";
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
                    <h5 class="priceAndTime"> <img style="color:red;width: 12px; height: 12px;" src="images/sack-dollar-solid.svg" alt=""/> <?php echo "Budget ".$row['jobBudget']." ETB "?>  &nbsp;</em>
                        <span> 
                            <img style="color:red;width: 12px; height: 12 px;" src="images/clock-solid.svg" alt="">
                            <?php echo get_time_ago($row["timeAgo"]); ?>
                       </span> 
                    </h5>
                    <h2 class="h2Find"><?php echo nl2br($row['jobDescription']); ?></h2>


                    <h5 class="priceAndTime"><img style="color:red;width: 12px; height: 12 px;" src="images/people-carry-box-solid.svg" alt=""> <?php echo "Delivery date ".$row['jobDeadline']; ?> </h5>

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
                          <a class="findMoreJobsLink" href="../../Default pages/afterLogin/RecentJobs.php">Find more</a>
                        </div>
    </div>
<!-- boxes end -->

<!-- whole freelan Ethiopia Advertising Start-->
<div style ="background-color:white; padding:30px; margin: 20px;">
    <h2 class="JobListsHompageText">
       A whole Ethiopian freelance talent are on your hand!!!
    </h2>
    <dl>
      <dt><h4> <b><span>&#9742;&ensp;</span>10/7 support</b></h4></dt>
      <dd> <p style="padding-left: 25px;">Questions? Our round-clock support team is available to help anytime, anywhere on working time(Ranges 2-12 o'clock).</p>  </dd>
      <dt><h4> <b><span>&#36;&ensp;</span>Protected payments, every time</b></h4></dt>
      <dd><p style="padding-left: 25px;">Your payment isn't released until you approve the work.</p></dd>
      <dt><h4> <b><span>&#8690;&ensp;</span>Quality work done quickly</b></h4></dt>
      <dd><p style="padding-left: 25px;">Find the right freelancer to begin working on your project within minutes.</p></dd>
    </dl>
</div>
<!-- whole freelan Ethiopia Advertising  END-->

<!-- SPONSORS START -->
<!-- <div style ="background-color:white; padding:30px; margin: 20px;" class="advertTextDiv">
    <h3 class="JobListsHompageText">Sponsors</h3>
    <h5 class="h2Find">Untill now no one is sponsered with me. If you need to do with me, I am open to work with anyone.</h5>
    <h5 class="h2Find">I also develop a website for any one.</h5>
</div> -->

<!-- preloader -->

<?php  include '../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/loader.css">

<!-- footer -->

<footer>
    <link rel="stylesheet" type="text/css" href="../../Default pages/imported/footer.css">
    <?php include('../../Default pages/imported/footer.html'); ?>
</footer>


<!-- jQuery -->
    <script src="../afterLogin/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../afterLogin/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../afterLogin/js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="../afterLogin/js/custom.js"></script>
</body>
</html>
<?php
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
?>