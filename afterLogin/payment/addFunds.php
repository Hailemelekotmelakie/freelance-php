<?php include('dbConfig.php');
session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
  header('Location: ../../Login and Signup Form with Email Verification - PHP/login-user.php');
 }
if ($_SESSION['captchaChecking'] == '')
{
  header('Location: captcha.php');
}
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="transfer.css">
    <link rel="stylesheet" type="text/css" href="addFunds.css">
    <link rel="stylesheet" type="text/css" href="payment.css">
    <link rel="stylesheet" type="text/css" href="balance.scss">
    <style type="text/css">
      /*nav start*/
        .custom-div-nav{
          display: inline-flex;
          background: #daf2eb;
          /*box-shadow: 0px 0px 10px 1px green;*/
          border: 3px solid transparent;
          padding: 10px;
          margin: 2px;
          border-radius: 5px;

        }
        .custom-div-nav:hover{
          display: inline-flex;
          background: #88dcbe;
          border-bottom: 3px solid black;
          padding: 10px;
          transition: 0.5s;
          margin: 2px;
          border-radius: 5px;
        }
        .underline:hover{
          text-decoration: none;
        }
        /*nav end*/

        /*telgram button new*/
        /* 11 */
        .btn-11 {
          border: none;
          background: #1682FB;
          background: linear-gradient(0deg, #1080F0 0%, #1682FB 100%);
          overflow: hidden;
          font-size: 20px;
          font-weight: 700;
          border-radius: 10px;
        }
        .btn-11:hover {
            text-decoration: none;
            color: #fff;
        }
        .btn-11:before {
            position: absolute;
            content: '';
            display: inline-block;
            top: -180px;
            left: 0;
            width: 30px;
            height: 100%;
            background-color: #fff;
            animation: shiny-btn1 3s ease-in-out infinite;
        }
        .btn-11:hover{
          opacity: .7;
        }
        .btn-11:active{
          box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2), 
            inset -4px -4px 6px 0 rgba(255,255,255,.2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
        }


        @-webkit-keyframes shiny-btn1 {
            0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
            80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
            81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
            100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
        }
        /* telegram ends */
        
  </style>
</head>
<body>
          <div>
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/Homepage.php">Home</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/contact.php">Contact</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/About.php">About</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/RandomJobs.php">Find Jobs</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="#">Payment</a></span>
            <span class="custom-div-nav"> <a class="underline" href="../../afterLogin/jobRequest.php">Post Jobs</a></span>
          </div>

          <!-- <hr style="border-width: 20px; border-color: #4fd37e;"> -->
        <!-- < ?php include('glow.html');?> -->
          <!-- <hr style="border-width: 20px; border-color: #4fd37e;"> -->
        <button class="custom-btn btn-11"> <a style="color: white !important;" href="https://t.me/Hailemelekot11"><img width="20px" src="bankImages/paper-plane-solid.svg"> &nbsp;&nbsp;Telegram</a></button>

<div class="row">
  <div class="menusContainer">
    <div class="menusContainerInner">
    <div id="btn-container">
      <a class="underline" href="fillBankInfo.php"><div class="custom-btn btn-13">Bank Information</div></a>
      <a class="underline" href="addFunds.php"><div class="custom-btn btn-13 innerSelected" >Deposite</div></a>
      <a class="underline" href="withdraw.php"><div class="custom-btn btn-13">Withdraw</div></a>
      <a class="underline" href="transfer.php"><div class="custom-btn btn-13">Transfer</div></a>
      <a class="underline" href="balance.php"><div class="custom-btn btn-13">Balance</div></a>
    </div>
  </div>
  </div>

<div class="extendedContainer">
<div class="extendedContainerInner">
<div class="tab_container">
        <div class="newLabel">Depostion Methods</div>
        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1"><span class="numberCircle">1</span><span>CBE Mobile Bank</span></label>

        <input id="tab3" type="radio" name="tabs" >
        <label for="tab3"><span class="numberCircle">2</span><span>CBE Birr Wallet</span></label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2"><span class="numberCircle">3</span><span>Telebirr</span></label>

        <section id="content1" class="tab-content">
          <h3>Deposit Using Commercial Bank Of Ethiopia</h3>

         <div class="row-payment-method payment-row-last">
          <div class="select-txt hr">
            <p class="pymt-type-name">Commercial Bank of Ethiopia</p>
            <p class="pymt-type-desc">Safe money transfer using your bank account.</p>
          </div>
          <div class="select-logo">
            <div class="select-logo-sub logo-spacer">
              <img class="imageLogoNew" style="width:100px; height:100px;" src="bankImages/cbe.png" alt="CBE LOGO"/>
            </div>
          </div>
          </div>

          <div class="my-alert alert alert-info">
            <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
            <span class="my-alert__text">
              <p>Your Can Pay Directly from Physical Banks and Receive a Check.</p>
              <p>CBE Account Number: 1000183802775</p>
              <p>Account Owner Name: Hailemelekot Melakie Tewokef</p>
            </span>
          </div>
          <div class="myDefined">
          <div class="timeline">
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 1</h4>
                <p class="colorBlacker">Call to <strong>*889#</strong> on CBE mobile bank Registerd SIM.</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 2</h4>
                <p class="colorBlacker">select <strong>1</strong> for login and enter your PIN.</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 3</h4>
                <p class="colorBlacker">Select assigned Number on your interface <strong>Transfer to CBE Account</strong>.</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 4</h4>
                <p class="colorBlacker">Enter This Account Number <strong>1000 1838 02775</strong></p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 5</h4>
                <p class="colorBlacker">Check the name <strong>Hailemelekot Melakie Tewokef</strong></p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker">Write a reason as you wish.<strong>Ex: For Ethiolance Deposit</strong></p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 7</h4>
                <p class="colorBlacker"> Press Any key except <strong>1</strong> and <strong>2. Ex: 7</strong> </p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 8</h4>
                <p class="colorBlacker">Select confirm <strong>1</strong> assigned to <strong>yes.</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="my-alert alert alert-info alert-infoNew">
          <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
          <span class="my-alert__text">
            <h3 class="colorBlacker"><strong>Finally Take A screenshoot message of completed Payment. Send us ascreenshoot on Telegram link below.</strong></h3>
          </span>
        </div>
        <!-- <button><a href="https://t.me/Hailemelekot11">Contact Us On Telegram</a></button> -->
        <button class="custom-btn btn-11"> <a style="color: white !important;" href="https://t.me/Hailemelekot11"><img width="20px" src="bankImages/paper-plane-solid.svg"> &nbsp;&nbsp;Telegram</a></button>
        </section>
        
        <!-- section 2 -->
        <section id="content2" class="tab-content">
          <h3>Deposit Using Telebirr</h3>
          <!-- LOGO S -->
          <div class="row-payment-method payment-row-last">
          <div class="select-txt hr">
            <p class="pymt-type-name">Telebirr</p>
            <p class="pymt-type-desc">Safe money transfer online.</p>
          </div>
          <div class="select-logo">
            <div class="select-logo-sub logo-spacer">
              <img class="imageLogoNew" style="width:180px; height:100px;" src="bankImages/telebirr.png" alt="Tellbirr LOGO"/>
            </div>
          </div>
          </div>
          <!-- Logo E -->
          <div class="myDefined">
          <!-- <button><a href="https://t.me/Hailemelekot11">Contact Us On Telegram</a></button> -->
          <div class="timeline">
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 1</h4>
                <p class="colorBlacker">Call to <strong>*127#</strong> on your cell phone</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 2</h4>
                <p class="colorBlacker">select <strong>1</strong> send money </p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 3</h4>
                <p class="colorBlacker">Select <strong>1</strong> Send money again</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 4</h4>
                <p class="colorBlacker">select <strong>1</strong> By receiver mobile number </p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 5</h4>
                <p class="colorBlacker">Enter mobile number <strong>09 47 05 35 37</strong></p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker">Enter amount to be send</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker">Write a comment as you wish.<strong>Ex: For Ethiolance Deposit</strong></p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker"> Press number <strong>1</strong> assigned to <strong> Ok</strong> </p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker">Enter Your Telebirr PIN and press send.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="my-alert alert alert-info alert-infoNew">
          <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
          <span class="my-alert__text">
            <h3 class="colorBlacker"><strong>Finally Take A screenshoot message of completed Payment. Send us ascreenshoot on Telegram link below.</strong></h3>
          </span>
        </div>
        <button class="custom-btn btn-11"> <a href="https://t.me/Hailemelekot11">Telegram</a></button>

        </section>
        <!-- section 3 -->
        <section id="content3" class="tab-content">
          <h3>Deposit using CBE Birr</h3>
          <!-- LOGO S -->
          <div class="row-payment-method payment-row-last">
          <div class="select-txt hr">
            <p class="pymt-type-name">CBE Birr</p>
            <p class="pymt-type-desc">Safe money transfer in in any phone</p>
          </div>
          <div class="select-logo">
            <div class="select-logo-sub logo-spacer">
              <img class="imageLogoNew" style="width:140px; height:100px;" src="bankImages/CBEBIRR.png" alt="Tellbirr LOGO"/>
            </div>
          </div>
          </div>
          <!-- Logo E -->

          <div class="myDefined">
          <div class="timeline">
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 1</h4>
                <p class="colorBlacker">Call to <strong>*847#</strong> on your cell phone</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 2</h4>
                <p class="colorBlacker">select <strong>1</strong> send money </p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 3</h4>
                <p class="colorBlacker">Select <strong>1</strong> Send money again</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 4</h4>
                <p class="colorBlacker">select <strong>1</strong> By receiver mobile number </p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 5</h4>
                <p class="colorBlacker">Enter mobile number <strong>09 47 05 35 37</strong></p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker">Enter amount to be send</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker">Write a comment as you wish.<strong>Ex: For Ethiolance Deposit</strong></p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker"> Press number <strong>1</strong> assigned to <strong> Ok</strong> </p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h4 class="colorBlacker">Step 6</h4>
                <p class="colorBlacker">Enter Your CBE birr PIN and press send.</p>
              </div>
            </div>
          </div>
        </div>


        <div class="my-alert alert alert-info alert-infoNew">
          <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
          <span class="my-alert__text">
            <h3 class="colorBlacker"><strong>Finally Take A screenshoot of completed Payment. Send us a screenshoot on Telegram link below.</strong></h3>
          </span>
        </div>
        <button class="custom-btn btn-11"> <a href="https://t.me/Hailemelekot11">Telegram</a></button>
        </section>
        <br>
  </div>
</div>
</div>
</div>


<!-- preloader -->

<?php  include '../../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../../Default pages/imported/loader.css">


<footer>
    <!-- < ?php include('../../imported/footer.html'); ?> -->
<link rel="stylesheet" type="text/css" href="../../imported/footer.css">
</footer>

</body>
</html>