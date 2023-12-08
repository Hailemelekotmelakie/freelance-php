<?php include('dbConfig.php');
session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
    header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 if(isset($_POST["searchBarButton"]))  
 {  
      if(!empty($_POST["search"]))  
      {  
           $query = str_replace(" ", "+", $_POST["search"]);  
           header("location:RecentJobs.php?search=" . $query);  
      }  
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
                    <li style="z-index:1;" class="active">
                        <a href="RandomJobs.php">Find Jobs</a>
                    </li>
                    <li style="z-index:1;" class="dropdown">
                        <a href="Profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../../Default pages/My Account/myAccount.php">Profile</a></li>
                            <li><a href="../../Default pagesAM/afterLogin/recentRecent.php">ወደ አማርኛ</a></li>
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
                            <li><a href="jobLists.php">View Your Job Lists</a></li>
                            <li><a href="../../Default pages/Login and Signup Form with Email Verification - PHP/logout-user.php">Logout</a></li>
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
         <p class="nameTransformation">Good Evening <?php echo $rown['name']."<br>VERIFIED EMAIL<br>".$rown['email']; ?></p></h1>
            <?php
                }
            ?></p></h1>
     </div>
     <div class="flex-item-right">
         <img src="images/staySafe.png">
         <h5>Stay safe with us</h5>
     </div>
   </div>
<!-- search -->
 <!-- <div class="divOutterForSearch"> -->
   <div class="searchBarDiv">
      <form method="POST" action="">
            <h4 style="text-align: center; font-weight: 700;">Search Jobs</h4>
            <!-- <div class="selectSearch">
               <select name="searchJobs" id="searchJobs">
                  <option selected value="allJobs">From All</option>
                  <option value="Translation">translation</option>
                  <option value="Writing">Writing</option>
                  <option value="web design">design</option>
                  <option value="web">web</option>
                  <option value="Website Developer and builder">Website Developer and builder</option>
                  <option value="Logo and Graphics Designer">Logo and Graphics Designer</option>
                  <option value="Writer & translator">Writer & translator</option>
                  <option value="Data Entry and Converting photos to editable text">Data Entry and Converting photos to editable text</option>
                  <option  value="Document, Content Writer and Proposal Writer">Document, Content Writer and Proposal Writer</option>
                  <option  value="Audio and Vidio Editor">Audio and Vidio Editor</option>
                  <option  value="Other">Other</option>
                  
               </select>
            </div> -->
        <!-- <br> -->
        <input class="searchBar" type="search" name="search" value="<?php if(isset($_GET["search"])) echo $_GET["search"]; ?>" placeholder="Search Jobs">        
        <input class="searchBarButton" type="submit" name="searchBarButton" value="Search" >
      </form>
   </div>
 <!-- </div> -->
   <!-- JOB LISTS -->


   <div id="buttonListsDiv" class="buttonListsDiv">
      <h3>Jobs you might like</h3>
      <input class="buttonsList" onclick="location.href='../../Default pages/afterLogin/RandomJobs.php';" type="button" name="randomJobs" value="Random Jobs">
      <input class="buttonsList buttonsListActive" onclick="location.href='../../Default pages/afterLogin/RecentJobs.php';" type="button" name="recentRecent" value="Recent Jobs">
      <!-- jobs1 -->
     <?php      
     if(isset($_GET["search"]))  
                     {  
                          $searchJobs=$_GET['search'];
                          $condition = '';  
                          $queryExplode = explode(" ", $_GET["search"]);  
                          foreach($queryExplode as $text)  
                          {  
                               $condition .= "jobDescription LIKE '%".mysqli_real_escape_string($con, $text)."%' OR ";  
                          }  
                          $condition = substr($condition, 0, -4);  
                          $sqlSpecific = "SELECT * FROM jobs WHERE " . $condition." ORDER BY timeAgo desc limit 25";  
                          $resultSpecific = mysqli_query($con, $sqlSpecific);  
                          if(mysqli_num_rows($resultSpecific) > 0)  
                          {  
                               while($rowSpecific = mysqli_fetch_array($resultSpecific))  
                               { 
                               ?> 
                    <div class="singleMilestoneDes">
                     <div class="jobsCategory">
                        <p class="jobsCategoryText"><?php echo $rowSpecific['jobCategory']; ?></p>
                     </div>
                     <div class="jobsParagraph"> 
                        <p class="jobsParagraphText">    
                              <?php echo "Delivery date ".$rowSpecific['jobDeadline']; ?>
                        </p>  
                        <p class="jobsParagraphText">    
                              <?php echo $rowSpecific['jobDescription']; ?>
                        </p>   
                     <div class="jobsFootprint">
                       <p  class="jobsFootprintText"><?php echo "Budget ".$rowSpecific['jobBudget']." ETB - "."Posted ".get_time_ago($rowSpecific["timeAgo"]); ?></p>
                        <center>
                             <?php 
                              echo '<a class="contactMeButton"  href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675='.$rowSpecific["jobOwnerID"].'">'."Contact Me".'</a>';
                             ?>
                          </center>        
                       </div>
                    </div>
                  </div> 
            <?php  
                 }  
                  } else{
                    ?>
            <p style="text-align: center; font-weight:700; padding-top: 50px;">Search Not Found. <br> Try other keywords</p>
            <img width="100%" src="images/Not query result.jpg">
           <?php
         } 
     } 
     else{
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
     }
        ?>
        <!-- =--------------------------------------------- -->

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



