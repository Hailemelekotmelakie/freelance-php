<?php 
include('dbConfig.php');
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
    <title>Dashboards</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/afterLoginHomepage.css">
    <link rel="stylesheet" type="text/css" href="css/inbox.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/ImageSlider.css"> -->
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
   

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
                            <!-- <li><a href="../../Default pagesAM/afterLogin/dashboard.php">ወደ አማርኛ</a></li> -->
                            <li class="active"><a href="FAQ.php">FAQ</a></li>
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
 <?php  
            $searchedEmail=$_GET['dashboar'];

            // userTable
                $userTableSql = "SELECT * FROM usertable  WHERE email='$searchedEmail'";
                $userTableResult = mysqli_query($con, $userTableSql);
                $userTableRow = mysqli_fetch_assoc($userTableResult);

            // detailedInfo
                $detailedInfoSql = "SELECT * FROM detailedinfo WHERE Email='$searchedEmail'";
                $detailedInfoResult = mysqli_query($con, $detailedInfoSql);
                $detailedInfoRow = mysqli_fetch_assoc($detailedInfoResult);

            // bankrecords
                $bankrecordsSql = "SELECT * FROM fundtransactions  WHERE funderEmail='$searchedEmail'";
                $bankrecordsResult = mysqli_query($con, $bankrecordsSql);
                $bankrecordsRow = mysqli_fetch_assoc($bankrecordsResult);
                           
                ?>
    <div class="divesOuter">
    <div class="divesInner">
            <h3 style="text-align: center;">Personal photo</h3>
      <img width="40%" style="object-fit: cover; border-color: green; border-width: thin; border-radius: 4px;" src="<?php if (!empty($detailedInfoRow['profilePicture'])) {
                                      echo '../../Default pages/My Account/'.$detailedInfoRow['profilePicture'];
                                        }
                                     ?>" alt="No profile photo uploaded">
      <p><span>Full Name :</span> 
          <?php if (!empty($userTableRow['name'])) {
            echo $userTableRow['name'];
              }
           ?>
      </p>
    </div>
  </div>

  <div class="divesOuter">
    <div class="divesInner">
      <h3 style="text-align: center;">Personal Detail</h3>
      <p><span>Full Name :</span> 
          <?php if (!empty($userTableRow['name'])) {
            echo $userTableRow['name'];
              }
           ?>
      </p>
      <p><span>Email : </span><?php echo $userTableRow['email']; ?> </p>
      <p><span>Gender :</span> 
          <?php if (!empty($detailedInfoRow['gender'])) {
            echo $detailedInfoRow['gender'];
              }else{ echo "Not Filled";}
           ?>
      </p>
      <!-- <p><span>Age :</span> 25 </p> -->
      <p><span>Status :</span> <?php echo $userTableRow['status']; ?> </p>
      <p><span>Location :</span> <?php if (!empty($detailedInfoRow['Residence'])) {
            echo $detailedInfoRow['Residence'];
              }else{ echo "Not Filled";}
           ?>
       </p>
      <p><span>Joined Date :</span> <?php echo $userTableRow['dateOfRegister']; ?></p>
      <!-- <p><span>Contact no. :</span> 
          < ?php if (!empty($bankrecordsRow['tel'])) {
            echo $bankrecordsRow['tel'];
              }else{ echo "Not Filled";}
           ?>
      </p> -->
      <p><span>Bank Account Number :</span> 
          <?php if (!empty($bankrecordsRow['BankAccount'])) {
            echo $bankrecordsRow['BankAccount'];
              }else{ echo "Not Filled";}
           ?>
      </p>
      <p style="color: green;"><span>User's Account Balance : </span> 
          <?php if (!empty($bankrecordsRow['accountBalance'])) {
            echo "he was traded around  ".$bankrecordsRow['accountBalance']." ETB in our system";
              }else{ echo "0 ETB";}
           ?>
      </p>
      <!-- <p><span>Account Balance :</span> 
          < ?php if (!empty($bankrecordsRow['accountBalance'])) {
            echo $bankrecordsRow['accountBalance'];
              }else{ echo "Not Filled";}
           ?>
      </p> -->
      
      <p><span>About Him : </span> 
          <?php if (!empty($detailedInfoRow['Description'])) {
            echo $detailedInfoRow['Description'];
              }else{ echo "Not Filled";}
           ?>
      </p>
    </div>
  </div>
   
 

  <div class="divesOuter">
    <h3 style="text-align: center;">Skills Detail</h3>
    <div class="divesOuter">      

      <p><span>Education :</span> 
          <?php if (!empty($detailedInfoRow['Education'])) {
            echo $detailedInfoRow['Education'];
              }else{ echo "Not Filled";}
           ?>
      </p>
      <p><span>Field of study :</span> 
          <?php if (!empty($detailedInfoRow['FieldOfStudy'])) {
            echo $detailedInfoRow['FieldOfStudy'];
              }else{ echo "Not Filled";}
           ?>
      </p>
      <p><span>College :</span> 
          <?php if (!empty($detailedInfoRow['College'])) {
            echo $detailedInfoRow['College'];
              }else{ echo "Not Filled";}
           ?>
      </p>
      
      <p><span>Skill :</span> 
          <?php if (!empty($detailedInfoRow['Skill'])) {
            echo $detailedInfoRow['Skill'];
              }else{ echo "Not Filled";}
           ?>
      </p>
      <p><span>Experience Level :</span> <?php if (!empty($detailedInfoRow['ExpLevel'])) {
            echo $detailedInfoRow['ExpLevel'];
              }else{ echo "Not Filled";}
           ?>
      </p>
      <p><span>Language :</span> 
          <?php if (!empty($detailedInfoRow['Language'])) {
            echo $detailedInfoRow['Language'];
              }else{ echo "Not Filled";}
           ?>
      </p>
    </div>
  </div>





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
