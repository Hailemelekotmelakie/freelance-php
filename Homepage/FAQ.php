<?php include('../../Default pages/My Account/dbConfig.php');
// session_start();
// if(!$_SESSION['email']){
//    header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
//  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/x-icon" href="icon.png">


    <!-- Bootstrap Core CSS -->
    <link href="../afterLogin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/FAQ.CSS">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../afterLogin/css/custom.css" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />    
    
    <!-- FAQ -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


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
                <li>
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
                <li class="active">
                  <!-- <a href="FAQ.php">FAQ</a> -->
                  <a href="Frequently-asked-questions">FAQ</a>
                </li>
                <li><a href="../../Default pagesAM/Homepage/FAQ.php">ወደ አማርኛ</a></li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>


<div class="accordion-contentFAQ">
  <h3 style="text-align: center;padding-bottom: 20px; color:black; opacity: 0.5;">Frequently Asked Questions</h3>
  <div class="accordion-itemFAQ">
    <header class="item-headerFAQ">
      <h4 class="item-questionFAQ">
        How to use a system?
      </h4>
      <div class="item-iconFAQ">
        <svg style="width: 10px; height: auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>      
      </div>
    </header>
    <div class="item-contentFAQ">
      <p class="item-answerFAQ">
        First, Create an account.<br>
        </p>
      <p class="item-answerFAQ">
        Second, Find jobs.
      </p>
      <p class="item-answerFAQ">
        Third, Contact job owner and chat with him and get a permission to do so.
      </p>
      <p class="item-answerFAQ">
        Finally, Deliver a great work and get paid.
      </p>
    </div>
  </div>
  <div class="accordion-itemFAQ">
    <header class="item-headerFAQ">
      <h4 class="item-questionFAQ">
        How to receive a payment in CBE?
      </h4>
      <div class="item-iconFAQ">
        <svg style="width: 10px; height: auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>      
      </div>
    </header>
    <div class="item-contentFAQ">
      <p class="item-answerFAQ">
        First, Create an account and login.<br>
        </p>
      <p class="item-answerFAQ">
        Second, Click a payment link and fill bank information.
      </p>
      <p class="item-answerFAQ">
        Third, Click withdrawal link and put amount to be withdrawn.
      </p>
      <p class="item-answerFAQ">
        Finally, we will send your money upon your bank detail you filled.
      </p>
    </div>
  </div>
  <div class="accordion-itemFAQ">
    <header class="item-headerFAQ">
      <h4 class="item-questionFAQ">
        How to create an account?
      </h4>
      <div class="item-iconFAQ">
        <svg style="width: 10px; height: auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>      
      </div>
    </header>
    <div class="item-contentFAQ">
      <p class="item-answerFAQ">
        First, Click a link <a href="../../Default pages/Login and Signup Form with Email Verification - PHP/signup-user.php">signup</a><br>
        </p>
      <p class="item-answerFAQ">
        Second, Fill your first-name with last-name,email and password.
      </p>
      <p class="item-answerFAQ">
        Third, You will be redirected to email verification page and confirm verification code that is sent an email you submitted.
      </p>
      <p class="item-answerFAQ">
        Finally, You will be a part of Ethiolance, you can login to yur account.
      </p>
    </div>
  </div>
  <div class="accordion-itemFAQ">
    <header class="item-headerFAQ">
      <h4 class="item-questionFAQ">
        How to recover forgoten password?
      </h4>
      <div class="item-iconFAQ">
        <svg style="width: 10px; height: auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>      
      </div>
    </header>
    <div class="item-contentFAQ">
      <p class="item-answerFAQ">
        First, Click <a href="../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php">login</a> page.<br>
        </p>
      <p class="item-answerFAQ">
        Second, Click forgot password and fill your email adress.
      </p>
      <p class="item-answerFAQ">
        Third, You will receive OPT code into your email and confirm it.
      </p>
      <p class="item-answerFAQ">
        Finally, put your new password and now you can login with your new password.
      </p>
    </div>
  </div>
</div>
    <script type="text/javascript" src="js/FAQ.js"></script>


<!-- preloader -->

<?php  include '../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/loader.css">

<!-- footer -->

<footer>
    <link rel="stylesheet" type="text/css" href="../../Default pages/imported/footer.css">
    <?php include('../../Default pages/imported/footer.html'); ?>
</footer>

    
    <!-- FAQ -->
    <script type="text/javascript" src="js/FAQ.JS"></script>

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
    if (isset($_POST['commentSubmitButton'])) {
        if ($_POST['commentMessage']) {
            $commentEmail = $_POST['commentEmail'];
            $commentMessage=$_POST['commentMessage']."<br>From Gust";
            $commentName=$_POST['commentName'];
            $timeAgo= time();
            $sql = "INSERT INTO comment (commentName, commentEmail,commentMessage,timeAgo) VALUES ('$commentName', '$commentEmail','$commentMessage', '$timeAgo')";
                if(mysqli_query($con, $sql)) {
                   echo "<script> alert('New record created successfully');</script>";
                }

        }
    }
 ?>