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

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../afterLogin/css/custom.css" rel="stylesheet">
    <link href="../afterLogin/css/about.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/inbox.css"> -->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />    
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
                    <li>
                        <!-- <a href="Contact.php">Contact</a> -->
                        <a href="Contact-us">Contact</a>
                    </li>
                    <li class="active">
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
                    <li><a href="../../Default pagesAM/Homepage/about.php">ወደ አማርኛ</a></li>

                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>




<section class="section_all bg-light" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <h3 style="font-weight:bold;" class="font-weight-bold">Welcome To Ethiolancers Platform</h3>
                            <p class="section_subtitle mx-auto text-muted">Ethiolancer is the first plaform runs in Ethiopia that interconnectes jobHolders and jobSeekers.</p>
                            <div class="">
                                <i class=""></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage mt-5">
                    <div class="col-lg-6">
                        <div class="about_header_main mt-3">
                            <!-- <div class="about_icon_box"><br>
                                <p class="text_custom font-weight-bold">We are a mediator and the fund comes from your customer.</p>
                            </div> -->
                            <h4 class="about_heading text-capitalize font-weight-bold mt-4">About Me</h4>
                            <p class="text-muted mt-3">This is a web-based freelancers platform for Ethiopians. A Ethiolancer platform is an online marketplace that enables buyers of professional services or employers to search for, enter into, hire for, manage transactions with services providers and freelancers.</p>

                                <address>
                                    Developed by Hailemelekot Melakie.<br>
                                    Email <a href="mailto:Hailemelekotmelakie1991@gmail.com">Hailemelekotmelakie1991@gmail.com </a>.<br>
                                    Phone <a href="tel:+251947053537">+251 947 053 537 </a>.<br>
                                    Visit us at: <a href="https://huliesira.com/">www.huliesira.com</a></a><br>
                                    Debretabor, Bahirdar<br>
                                    Ethiopia
                                </address>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img_about mt-3">
                            <!-- <img style="width: 100%; height: auto; border-radius: 4px; padding: 20px;" src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block"> -->
                                <video  autoplay muted loop id="myVideoVideo" class="img-fluid mx-auto d-block">
                                     <source src="../afterLogin/videos/cover_video.mp4" type="video/mp4">
                                    Your browser does not support HTML5 video.
                                </video>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="section_title_all text-center">
                     <h3 style="font-weight:bold;" class="font-weight-bold">How It Works</h3>
                    </div>
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <h5 style="font-weight:bold;" class="text-dark text-capitalize mt-3 font-weight-bold">Find Jobs</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">Find jobs, contact and put a bid to jobholders.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <!-- <i class="fab fa-angellist"></i> -->
                                    <i class="fa-solid fa-truck"></i>
                                </div>
                                <h5 style="font-weight:bold;" class="text-dark text-capitalize mt-3 font-weight-bold">Deliver Great Work</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Get notified when you get an order and use our system to discuss details with customers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <!-- <i class="fas fa-paper-plane"></i> -->
                                    <i class="fa fa-hand-holding-dollar"></i>
                                </div>
                                <h5 style="font-weight:bold;" class="text-dark text-capitalize mt-3 font-weight-bold">Get Paid</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Get paid. Payment is transferred to you upon order completion. Finally receive your payments in local banks in Ethiopia. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





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
