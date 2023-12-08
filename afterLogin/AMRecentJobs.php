<?php include('dbConfig.php');
session_start();
if(!$_SESSION['email']){
   header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/job.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/inbox.css">


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
                    
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul  class="nav navbar-nav navbar-right">
                    <li>
                        <a href="Homepage.php">መነሻ ገጽ</a>
                    </li>
                    <li>
                        <a href="Services.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">አገልግሎቶች <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="#"> ድህረ ገጽ ማበልጸግ</a></li>
                            <li><a href="#">ድረገፅ አዘጋጅ</a></li>
                            <li><a href="#">የተንቀሳቃሽ ስልክ መተግበሪያ ማበልጸግ</a></li>
                            <li><a href="#">ገፃዊ እይታ አሰራር</a></li>
                            <li><a href="#">አርማ አሰራር</a></li>
                            <li><a href="#">መጻፍ እና መተርጎም</a></li>
                            <li><a href="#">የውሂብ  ግቤት</a></li>
                            <li><a href="#">የድምጽ እና ቪድዮ አርትዕ</a></li>
                            <li><a href="#">ሰነድ እና ረቂቅ  ዝግጅት</a></li>
                            <li><a href="#">ይዘት ጸሐፊ</a></li>
                            <li><a href="#">የጀርባ ምስል ማስወገድ </a></li>
                            <li><a href="#">ምስል ወደ ጽሑፍ ,ወርድ,  መለወጥ and etc. </a></li>

                        </ul>
                    </li>
                    <li style="z-index:1;">
                        <a href="Contact.php">ለማነጋገር</a>
                    </li>
                    <li style="z-index:1;">
                        <a href="About.php">ስለ</a>
                    </li>
                    <li style="z-index:99999;">
                        <link rel="stylesheet" type="text/css" href="../../Default pages/afterLogin/messageInbox/inbox.css">
                        <a href="#" ><?php include('../../Default pages/afterLogin/messageInbox/inboxMessage.php'); ?></a>
                    </li>
                    <li style="z-index:1;">
                        <a href="payment/fillBankInfo.php" target="_blank" rel="noopener noreferrer">ክፍያ</a>
                    </li>
                    <li style="z-index:1;">
                        <a href="jobRequest.php">ሥራ ልጥፍ</a>
                    </li>
                    <li style="z-index:1;" class="active">
                        <a href="RandomJobs.php">ስራዎችን ማግኘት</a>
                    </li>
                    <li style="z-index:1;" class="dropdown">
                        <a href="Profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">መገለጫ <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../../Default pages/My Account/myAccount.php">መገለጫዎች</a></li>
                            <li><a href="#">ቋንቋ</a></li>
                            <li ><a href="showNotification.php">
                            አዲስ ማሳወቂያዎች
                                <span>
                                    <?php
                                    $notNum=0;
                                    $sql = "SELECT * FROM notification WHERE notificationStatus='1'"; 
                                     $result = mysqli_query($con, $sql);
                                     if (mysqli_num_rows($result)>0) {
                                       while($row = mysqli_fetch_assoc($result)) {
                                        
                                            $notNum=$notNum+1;
                                        }
                                            ?>
                                            <?php echo "<span style='color:red;'>(".$notNum.")</span>"; ?>
                                                <?php
                                        }
                                        ?>
                                    </span>
                                </a>
                            </li>
                            <li><a href="jobLists.php">ሥራ ዝርዝሮች ለማየት</a></li>
                            <li><a href="../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php">ጨርሰህ ውጣ</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>



   <!-- desc -->
   <div class="flex-container">
     <div class="flex-item-left">
        <h1>
         <p><?php 
                 $email=$_SESSION['email'];
                 $sqln = "SELECT * FROM usertable where email ='$email'";
                 $resultn = mysqli_query($con, $sqln);
                 if (mysqli_num_rows($resultn)>0){
                 $rown = mysqli_fetch_assoc($resultn);
             ?>
         <p class="nameTransformation">እንኳን ደና መጡ <?php echo $rown['name']."<br>ኢሜልዎ እውቅና አጊንቷል፡ <br>".$rown['email']; ?></p></h1>
            <?php
                }
            ?></p></h1>
     </div>
     <div class="flex-item-right">
         <h1>Responsive Flexbox</h1>
     </div>
   </div>
<!-- search -->
   <div class="searchBarDiv">
      <form method="POST">
        <input class="searchBar" type="search" name="search" placeholder="የስራዉን ስም ያስገቡ">        
        <input class="searchBarButton" type="button" name="searchBarButton" value="ፈልግ" >
      </form>
   </div>
   <!-- JOB LISTS -->


   <div id="buttonListsDiv" class="buttonListsDiv">
      <h3>ሊወዷቸው የሚችሉ ስራዎች</h3>
      <input class="buttonsList" onclick="location.href='../../Default pages/afterLogin/RandomJobs.php';" type="button" name="randomJobs" value="ሁሉም ስራዎች">
      <input class="buttonsList buttonsListActive" onclick="location.href='../../Default pages/afterLogin/RecentJobs.php';" type="button" name="recentRecent" value="የቅርብ ጊዜ ስራዎች">
      <!-- jobs1 -->
 <?php 
             $email=$_SESSION['email'];
             $jobShow=0;
             $sql = "SELECT * FROM jobs where jobShow ='$jobShow' ORDER BY timeAgo desc limit 25";
             $result = mysqli_query($con, $sql);
             if (mysqli_num_rows($result)>0) {
               while($row = mysqli_fetch_assoc($result)) {
                  $jobOwnerID=$row['jobOwnerID'];
                         ?>
      <div class="singleMilestoneDes">
         <div class="jobsCategory">
            <p class="jobsCategoryText"><?php echo $row['jobCategory']; ?></p>
         </div>
         <div class="jobsParagraph"> 
            <p class="jobsParagraphText">    
                  <?php echo "Delivery date ".$row['jobDeadline']; ?>
            </p>  
            <p class="jobsParagraphText">    
                  <?php echo nl2br($row['jobDescription']); ?>
            </p>   
         <div class="jobsFootprint">
           <p  class="jobsFootprintText"><?php echo "Budget ".$row['jobBudget']." ETB - "."Posted ".get_time_ago($row["timeAgo"]); ?>
           </p>
           <center>
              <?php 
               echo '<a class="contactMeButton"  href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675='.$row["jobOwnerID"].'">'."Contact Me".'</a>';
              ?>
           </center>
        </div>
        </div>
      </div>
        <?php
            } 
         }
        ?>
        <!-- =--------------------------------------------- -->

   </div>

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



