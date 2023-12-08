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
    <link rel="stylesheet" type="text/css" href="../afterLogin/css/contact.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/inbox.css"> -->

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../afterLogin/css/custom.css" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />    
    
    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <script>  //protect resubmission
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
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
                    <li class="active">
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
                    <li><a href="../../Default pagesAM/Homepage/contact.php">ወደ አማርኛ</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>




<section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <h2>CONTACT</h2>
      <div class="links">
        <div class="link">
          <a target="_blank" href="https://www.facebook.com/Hailemelekot.Melakie"><img style="color: none; border-radius: 50%;" src="../afterLogin/images/facebook.png" alt="facebook"></a>
        </div>
        <div class="link">
          <a target="_blank" href="https://www.t.me/hailemelekot11"><img style="color: none; border-radius: 50%;" src="../afterLogin/images/Telegram.png" alt="Telegram"></a>
        </div>
        <div class="link">
          <a target="_blank" href="https://www.youtube.com/channel/UCXCu3LIWOIbwnxBue1ztUBQ"><img style="color: none; border-radius: 50%;" src="../afterLogin/images/youtube.png" alt="youtube"></a>
        </div>
        <div class="link">
          <a target="_blank" href="mailto:Hailemelekotmelakie1991@gmail.com"><img style="color: none; border-radius: 50%;" src="../afterLogin/images/email.png" alt="email"></a>
        </div>
      </div>
    </div>

    <div class="contact-form-wrapper">
      <form method="POST" action="">
        <div class="form-item">
          <input name="commentName" type="text" name="sender" required>
          <label>Name</label>
        </div>
        <div class="form-item">
          <input name="commentEmail" type="email" name="email" required>
          <label>Email</label>
        </div>
        <div class="form-item">
          <textarea name="commentMessage" class="" name="message" required></textarea>
          <label>Message</label>
        </div>
        <button name="commentSubmitButton" type="submit" class="submit-btn">Send</button>  
      </form>
    </div>
  </div>
</section>

<br>
<div class="iframeCorrection">
    <h3>Site Map</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d130952.35528818943!2d38.00254685826607!3d11.825822953440966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x16447de6a5f8ada3%3A0xf5dfe212ff827aa4!2sDebre%20Tabor%20University!5e0!3m2!1sen!2set!4v1653415638822!5m2!1sen!2set" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            $commentEmail = filter_var(stripcslashes($_POST['commentEmail']),FILTER_SANITIZE_STRING);
            $commentMessage= filter_var(stripcslashes($_POST['commentMessage']),FILTER_SANITIZE_STRING)."<br>From Gust";
            $commentName=filter_var($_POST['commentName'],FILTER_SANITIZE_STRING);
            $timeAgo= time();
            $sql = "INSERT INTO comment (commentName, commentEmail,commentMessage,timeAgo,commentSeen) VALUES ('$commentName', '$commentEmail','$commentMessage', '$timeAgo','0')";
                if(mysqli_query($con, $sql)) {
                   echo "<script> alert('We will respond soon...');</script>";
                }

        }
    }
 ?>