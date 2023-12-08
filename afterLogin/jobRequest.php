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

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- custom js for job post -->
    <script type="text/javascript" src="js/JobRequest.js"></script>

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/jobRequest.css" rel="stylesheet">

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script>  //protect resubmission
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
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
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-fire"></span> 
                    ETHIOLANCER
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="Homepage.php">Home</a>
                    </li>
                    <li>
                        <a href="Services.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="#">Website Development</a></li>
                            <li><a href="#">Web Designer</a></li>
                            <li><a href="#">Mobile App Development</a></li>
                            <li><a href="#">Graphics Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">Writing & translating</a></li>
                            <li><a href="#">Data Entry</a></li>
                            <li><a href="#">Audio and Vidio Editing</a></li>
                            <li><a href="#">Document and proposal preparation </a></li>
                            <li><a href="#">Content Writer</a></li>
                            <li><a href="#">Image Background removing </a></li>
                            <li><a href="#">Converting photos to text, word, excel and etc. </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="Contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="About.php">About</a>
                    </li>
                    <li>
                        <a href="payment/fillBankInfo.php" target="_blank" rel="noopener noreferrer">Payment</a>
                    </li>
                    <li class="active">
                        <a href="jobRequest.php">Post Job Request</a>
                    </li>
                    <li>
                        <a href="RandomJobs.php">Find Jobs</a>
                    </li>
                    <li class="dropdown">
                        <a href="Profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="../../Default pages/My Account/myAccount.php">Profile</a></li>
                            <li><a href="Dashboard.php">Dashboard</a></li>
                            <li><a href="#">Language</a></li>
                            <li><a href="jobLists.php">View Your Job Lists</a></li>
                            <li><a href="../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php">Logout</a></li>
                        </ul>
                    </li>
                    <li>
                        <!-- <a href="#" >< ?php include('../../Default pages/afterLogin/messageInbox/inboxMessage.php'); ?></a> -->
                    </li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

<!-- main body -->
<div class="mainDivJobRequestClass" id="mainDivJobRequest">
<form action="jobRequest.php" method="POST">
    <div class="outerHeader" >
      <div id="giveDetaile" class="labelHead ">Give details, Set budget & timeline for your project</div> 
    </div>
    <!-- For the first page -->
    <div id="firstDiv" class="tableCoverDiv">
    <table style="width:100%">
        <tr>
            <td style="width:40%; vertical-align: top;">
                <div class="tdTexts">
                    <h1 class="h1tdTexts">We’ll find the right sellers for you</h1>
                    <h4 class="h4tdTexts">Detailing your needs lets us get you with great sellers who’ll give you the best service.</h4>
                </div>
            </td>
            <td style="vertical-align: top; width: 60%;">
                <div class="tdTexts">
                    <h3 class="h3tdText">Describe what you’re looking for</h3>
                    <h5 class="h5tdText">Ex. I need a Logo Design.</h5>
                    <form style="width:100%;" action="jobRequest.php" method="POST">
                      <textarea name="jobDescription" class="textareaForm" minlength="20" maxlength="1000" placeholder="I need ... (Ranges 20-1000 Letters)" required></textarea>
                      <label for="optionForm" class="labelForm">Choose the category that best matches your needs</label>
                      <select class="optionForm" name="jobCategory" id="jobCategory" required>
                          <option style="color: white; background: green;" class="optionForm" selected value="">Select one Category</option>
                          <option class="optionForm" value="Website Developer and builder">Website Developer and builder</option>
                          <option class="optionForm" value="Logo and Graphics Designer">Logo and Graphics Designer</option>
                          <option class="optionForm" value="Writer & translator">Writer & translator</option>
                          <option class="optionForm"  value="Data Entry and Converting photos to editable text">Data Entry and Converting photos to editable text</option>
                          <option class="optionForm" value="Document, Content Writer and Proposal Writer">Document, Content Writer and Proposal Writer</option>
                          <option class="optionForm" value="Audio and Vidio Editor">Audio and Vidio Editor</option>
                          <option class="optionForm" value="Other">Other</option>
                           <!-- <input type="submit" name="Continue" onclick="functionContinue();" id="buttonContinue" class="btnJobRequestBottom" value="Continue"> -->
                           <input type="submit" name="Continue"  onclick="functionContinue();" id="buttonContinue" class="btnJobRequestBottom" value="Continue">

                      </select>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    </div>

    <!-- ForThe Second page -->
    <div id="secondDiv" class="tableCoverDiv">
    <table style="width:100%">
        <tr>
            <td style="width:40%; vertical-align: top;">
                <div class="tdTexts">
                    <h2 class="h1tdTexts">Add the last details...</21>
                    <h4 class="h4tdTexts">These guide us to find you sellers who can match your expectations.</h4>
                </div>
            </td>
            <td style="vertical-align: top; width: 60%;">
                <div class="tdTexts">
                    <h3 class="h3tdText">Add Project deadline.</h3>
                    <!-- <form action=""> -->
                      <label class="labelForm" for="deadline">When will deliver a project?</label><br>
                      <input class="deadlineForm" type="date" id="deadline" name="deadline"  min="2022-01-01" max="2030-12-31" required>
                      <h5 class="h5tdText">We’ll find sellers who are available for this date.</h5>
                    <!-- </form> -->
                                           <!--  <script type="text/javascript">
                                             // alert("dateNow");
                                             const months = [1,2,3,4,5,6,7,8,9,10,11,12];
                                                const d = new Date();
                                                let month = months[d.getMonth()];
                                                var mont=month  ;
                                                var day= d.getDate();
                                                var year=d.getFullYear();
                                                const all = '' + year + "-"+day+"-"+mont;
                                                 // alert(all)
                                                 document.getElementById('deadline').value.min=all;
                                            </script> -->
                    <h3 class="h3tdText">Add Project Budget.</h3>
                    <!-- <form style="width:100%;"> -->
                    <label class="labelForm" for="budget">How much is your budget?</label><br>
                      <input class="budgetForm" type="number" id="budget" name="budget" min="5" max="500000" autocomplete="off" placeholder="100 (Ranges 5-500000 birr)" required>
                    <!-- </form> -->
                </div>
                <div class="stickyBottom">        
                    <input type="submit" name="Finish"  onclick="functionFinish();" id="buttonFinish" class="btnJobRequestBottom" value="Finish">
                </div>
            </td>
        </tr>
    </table>
    </div>
    
    <!-- ForThe Third page -->
    <div id="thirdDiv" class="tableCoverDiv">
                <div class="tdTexts">
                    <center>
                    <h2 class="h1tdTexts">Congrants!!!</21>
                    <h4 class="h3tdText">It is ready to review your brief.</h4>
                    <h4 class="h3tdText">We’ll match your brief to select sellers—who’ll then send offers to your inbox.</h4>
                    </center>
                </div>
                <div class="tdTexts">
                            <?php 
                            $sql = "SELECT * FROM jobs";
                            $counter = 1;
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)>0) {
                              while($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                <div class="outputPHP">
                                    <h3 class="h1tdTexts">Brief summary of brief number <?php echo $counter; ?></h3>
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
                                                                                            }else{
                                                                                            echo "Your brief is posted for service Providers.";
                                                                                            }; 
                                                                                            ?></label>
                                </div>
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


   <!-- ////////////////////////////////////////////////////////////////////// -->

<?php 

 function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
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

if(isset($_POST['Finish'])) {
//    filter_var($str, FILTER_SANITIZE_STRING);

    $jobDescription= filter_var(mysqli_real_escape_string($con, stripcslashes($_POST['jobDescription'])),FILTER_SANITIZE_STRING);
    $jobCategory=mysqli_real_escape_string($con, stripcslashes($_POST['jobCategory']));
    $deadline=mysqli_real_escape_string($con, stripcslashes($_POST['deadline']));
    $budget=filter_var(mysqli_real_escape_string($con, stripcslashes($_POST['budget'])),FILTER_SANITIZE_STRING);
    $email=$_SESSION['email'];
    $jobShow= 1;
    $timeAgo= time();
        $sql = "SELECT id FROM usertable WHERE email = '$email'";
        $run_Sql = mysqli_query($con, $sql);
        $fetch_info = mysqli_fetch_assoc($run_Sql);
    $jobWritersId = $fetch_info['id'];
?>

                                <div class="outputPHP">
                                    <center>
                                        <h3 class="h1tdTexts">Congrants!!!<br>
                                        It is ready to review your brief</h3>
                                    </center>
                                    <h3 class="h3tdText">Your detail description</h3>
                                    <label class="labelForm" ><?php echo $jobDescription; ?></label><br>
                                    <h3 class="h3tdText">Service type or Category</h3>
                                    <label class="labelForm"><?php echo $jobCategory; ?></label><br>
                                    <h3 class="h3tdText">Deadline</h3>
                                    <label class="labelForm" ><?php echo "Deliver by ".$deadline; ?></label><br>
                                    <h3 class="h3tdText">Budget</h3>
                                    <label class="labelForm"><?php echo $budget." ETB"; ?></label><br>
                                    <button class="btn" onclick="location.href='../../Default pages/afterLogin/jobLists.php';" >View Your Jobs</button>

                                </div>

<?php

if($jobDescription && $jobCategory && $deadline && $budget && $email && $jobWritersId && $timeAgo){
$sql = "INSERT INTO jobs (jobDescription, jobCategory,jobDeadline,jobBudget,jobPosterEmail,jobOwnerID,timeAgo,jobShow) VALUES ('$jobDescription', '$jobCategory','$deadline', '$budget','$email','$jobWritersId', '$timeAgo','$jobShow')";
if(mysqli_query($con, $sql)) {
   echo "<script> alert('We will Approve soon');</script>";
}
else{
    echo "<script> alert('Unable to record');</script>";
}
}
else{
   echo "<script> alert('Fill the fields successfully, Please? ');</script>";
}  
} else {
        // echo "Not Send to Database";
}

 ?>

 <!-- jQuery -->
 <script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Custom Javascript -->
<script src="js/custom.js"></script>

<footer>
    <link rel="stylesheet" type="text/css" href="../../Default pages/imported/footer.css">
    <?php include('../../Default pages/imported/footer.html'); ?>
</footer>
</body>
</html>