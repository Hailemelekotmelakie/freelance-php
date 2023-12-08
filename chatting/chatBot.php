<?php include('dbConfig.php');
session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
  header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 ?>

<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" src="chatting.js"></script>
    <link rel="stylesheet" type="text/css" href="chatting.css">
    <link rel="stylesheet" type="text/css" href="modalReport.css">
    <link rel="stylesheet" type="text/css" href="pageNotFound.css">
    <script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	          }
	</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Message</title>
    <script>
            function scrollWin() {
              window.scrollTo(0,9999);
            }
    </script>
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
        .underline{
        text-decoration: none;
        }
        /*nav end*/

        .chat-input {
              resize:vertical;
              color:#3c3c3c;
              font-weight:500;
              border-radius: 10;
              line-height: 22px;
              background-color: #fbfbfb;
              width:98%;
              padding-left: 20px;
              padding-right: 20px;
              height: auto;
              -webkit-box-sizing: border-box;
              -moz-box-sizing: border-box;
              -ms-box-sizing: border-box;
              box-sizing: border-box;
              border: 3px solid rgba(0,0,0,0);
            }

    .chat-input:focus{
      background: #fff;
      box-shadow: 0;
      border: 3px solid #3498db;
      color: black;
      outline: none;
      padding-left: 20px;
          }
    </style>
</head>
<body onload="scrollWin()">

        <div>
            <span class="custom-div-nav"> <a class="underline" href="../../Default pages/afterLogin/homepage.php">Home</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../Default pages/afterLogin/contact.php">Contact</a></span> 
            <span class="custom-div-nav"> <a class="underline"href="../../Default pages/afterLogin/about.php">About</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../Default pages/afterLogin/RandomJobs.php">Find Jobs</a></span> 
            <span class="custom-div-nav"> <a class="underline" href="../../Default pages/afterLogin/payment/fillBankInfo.php">Payment</a></span>
            <span class="custom-div-nav"> <a class="underline" href="../../Default pages/afterLogin/jobRequest.php">Post Jobs</a></span>
        </div>

<div class="chattingOutter">
    
        <?php 
            $email = $_SESSION['email'];
            $sql_st = "SELECT name FROM usertable WHERE email = '$email'";
            $run_Sql = mysqli_query($con, $sql_st);
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $name = $fetch_info['name'];
         ?> 


<!-- form inputing -->
 <?php
 if(isset($_POST['submit'])){
        $outgoing=filter_var($_POST['outgoing'],FILTER_SANITIZE_STRING);
        $incoming=filter_var($_POST['incoming'],FILTER_SANITIZE_STRING);
        $messages=filter_var($_POST['typingField'],FILTER_SANITIZE_STRING);
        $timeAgo=time();
        //fill all data
if($messages && $incoming && $outgoing && ($_FILES['myFileSelection']['name']== "")){
    $sql = "INSERT INTO messages (incoming, outgoing,messages,timeAgo,messageStatus,messageType) VALUES ('$outgoing', '$incoming','$messages','$timeAgo','1','text')";
    if(mysqli_query($con, $sql)) {
        include('popupSuccessMessages.htm');
    }
    else{
         include('popupFailure.htm');
    }
}elseif($outgoing && $incoming &&  (!empty($messages)) && isset($_FILES['myFileSelection'])) {
                        // include('popupSuccessMessages.htm');
            // name of the uploaded file
            $filename = $timeAgo."--".$_FILES['myFileSelection']['name'];

            // destination of the file on the server
            $destination = 'uploads/' . $filename;

            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['myFileSelection']['tmp_name'];
            $size = $_FILES['myFileSelection']['size'];

            if (!in_array($extension, ['zip', 'rar', 'pdf', 'docx', 'png', 'jpg', 'jpeg', 'mp4', 'mp3', 'pptx','ZIP', 'RAR', 'PDF', 'DOCX', 'PNG', 'JPG', 'JPEG', 'MP4', 'MP3', 'PPTX'])) {
                echo "<script> alert('You file extension must be .zip, .zip, pptx, .png , jpg, .pdf, .jpeg, .MP3, .MP4 or .docx');</script>";
            } elseif ($_FILES['myFileSelection']['size'] > 60000000) { // file shouldn't be larger than 60Megabyte
                echo "<script> alert('File too large! No more than 60 MB');</script>";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                    // $sql = "INSERT INTO messages (name, size, downloads) VALUES ('$filename', $size, 0)";
                    $sql = "INSERT INTO messages (incoming, outgoing, messages, zipName,timeAgo,messageStatus,messageType,fileSize) VALUES ('$outgoing', '$incoming', '$messages', '$filename','$timeAgo','1','both','$size')";

                    if (mysqli_query($con, $sql)) {
                        include('popupSuccessMessages.htm');
                    }
                } else {
                        include('popupFailure.htm');
                }
            }


}elseif($outgoing && $incoming &&  empty($messages) && isset($_FILES['myFileSelection'])) {
                        // include('popupSuccessMessages.htm');
            // name of the uploaded file
            $filename = $timeAgo."--".$_FILES['myFileSelection']['name'];

            // destination of the file on the server
            $destination = 'uploads/' . $filename;

            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['myFileSelection']['tmp_name'];
            $size = $_FILES['myFileSelection']['size'];

            if (!in_array($extension, ['zip', 'rar', 'pdf', 'docx', 'png', 'jpg', 'jpeg', 'mp4', 'mp3', 'pptx','ZIP', 'RAR', 'PDF', 'DOCX', 'PNG', 'JPG', 'JPEG', 'MP4', 'MP3', 'PPTX'])) {
                echo "<script> alert('You file extension must be .zip, .zip, pptx, .png , jpg, .pdf, .jpeg, .MP3, .MP4 or .docx');</script>";
            } elseif ($_FILES['myFileSelection']['size'] > 60000000) { // file shouldn't be larger than 60Megabyte
                echo "<script> alert('File too large! larger than 40 MB.');</script>";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                    // $sql = "INSERT INTO messages (name, size, downloads) VALUES ('$filename', $size, 0)";
                    $sql = "INSERT INTO messages (incoming, outgoing,zipName,timeAgo,messageStatus,messageType,fileSize) VALUES ('$outgoing', '$incoming','$filename','$timeAgo','1','both','$size')";

                    if (mysqli_query($con, $sql)) {
                        include('popupSuccessMessages.htm');
                    }
                } else {
                        include('popupFailure.htm');
                }
            }
}
else{
                include('popupFailure.htm');
}
}

// form data submission finish


        //access data from session
            $email = $_SESSION['email'];
            $sql_st = "SELECT id FROM usertable WHERE email = '$email'";
            $run_Sql = mysqli_query($con, $sql_st);
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $outgoingid = $fetch_info['id'];
             if( $outgoingid==""){
             header("login-user.php");
        }

        // to hide error massage
        error_reporting(0); 

 // getting id from url
            $userid = mysqli_real_escape_string($con, $_GET['ea0662459db42c7104766103f0d6b675']);
            $headerQuery = "SELECT name,email FROM usertable WHERE id = '{$userid}'";
            $runHeaderQuery = mysqli_query($con, $headerQuery);
            $fetch_infoChatter = mysqli_fetch_assoc($runHeaderQuery);
        if (!empty($fetch_infoChatter['name'])) {
            $nameChatter = $fetch_infoChatter['name'];
            if (!$runHeaderQuery) {
                echo "Connection failed";
            } else {
                $info = mysqli_fetch_assoc($runHeaderQuery);
            }

// for updating statments
    $sqlStatus = "UPDATE messages SET messageStatus=0 WHERE outgoing = '{$outgoingid}' AND incoming = '{$userid}'";
                if(mysqli_query($con, $sqlStatus)) {
                    echo "<script>set to zero</script>";
                    }

    //left joint
     $getMsgQuery = "SELECT * FROM `messages` LEFT JOIN `usertable` ON messages.outgoing = usertable.id WHERE outgoing = '{$outgoingid}' AND incoming = '{$userid}' OR incoming = '{$outgoingid}' AND outgoing = '{$userid}'";
    $runGetMsgQuery = mysqli_query($con, $getMsgQuery);


?>

        <div class="chat">
                <div class="chat-container">
                  <div class="user-bar">
                    <div class="back">
                      <!-- <i class="zmdi zmdi-arrow-left"></i> -->
                    </div>
                    <div class="avatar">
                        <?php 
                              echo '<a href="../afterLogin/dashboard.php?dashboar='.$fetch_infoChatter['email'].'">'."<img src='default-profile.png' alt='Avatar'>".'</a>';
                             ?>
                      <!-- <a href="../afterLogin/dashboard.php"><img src="default-profile.png" alt="Avatar"></a> -->
                    </div>
                    <div class="name">
                      <span><?php echo "<span style='text-transform: uppercase;'>".$nameChatter."</span>"; ?></span>
                      <span class="status">Last seen recently</span>
                    </div>
                  </div>

<?php


if(!$runGetMsgQuery){
    // echo "Query Failed";
}else{
    if(mysqli_num_rows($runGetMsgQuery) > 0){
        ?>
        


            <div style="background-color: #E98686; padding: 1px; border-radius: 0px; color: #000; font-weight: 800;">
            <p style="text-align: center; text-transform: uppercase;">
                          <?php  echo "Dear ".$name.","; ?> 
                 do not talk hate speech.
                </p>
            </div>


        <?php
        while($row = mysqli_fetch_assoc($runGetMsgQuery)){
            if($row['incoming'] == $outgoingid){
                ?>
 <!-- --------------------------------------------------------------------------- -->
              
                <div class="containerConver">
                    <div class="unDarker">
                        <p><?php
                            if(!empty($row["zipName"])) {
                                      $imageFileName=$row['zipName'];

                                      // get the file extension
                                      $extension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                                        if(in_array($extension, ['png', 'jpg', 'jpeg','PNG', 'JPG', 'JPEG'])){
                                          ?>
                                          <img style="padding: 10px; justify-content: center; width:55%;height:auto;" src="uploads/<?php echo $imageFileName; ?>" >
                                          <?php
                                        }
                                        else {
                                           ?>
                                         <div style="background-color:#4daf98; color: white; opacity: 0.8; padding: 10px; border-radius:5px;">
                                             <?php echo $imageFileName; ?><br>
                                            <a class="buttonDownload" href="uploads/<?php echo $imageFileName; ?>" download>&nbsp;&nbsp;Download
                                              <?php echo (($row['fileSize'] / 1000) . ' KB');  ?>
                                            </a>
                                         </div>
                                            <?php
                                        }
                                      ?>
                            <?php

                                }
                             ?>
                          </p>
                          <p ><?php echo $row["messages"]; ?></p>
                        <span style="color: green;">
                            <?php
                                if ($row['messageStatus']==0) {
                                    // echo "Seen";?>
                                    <span class="metadata">
                                        <span class="tick"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg></span>
                                    </span>
                            <?php
                                }
                                else{
                                    // echo "Not seen yet";
                                    ?>
                                    <span class="metadata">
                                        <span style="opacity: 0.7;" class="tick">
                                            <img width="15px" height="16px" src="check-mark-black-outline.png">
                                            </span>
                                    </span>
                                    <?php
                                }
                            ?>

                        </span>
                        <span class="time-right"><?php echo "&nbsp;&nbsp;&nbsp;Sent ".get_time_ago($row["timeAgo"]);  ?></span>
                    </div>
                </div>  
<!-- -------------------------------------------------------------------------------- -->
            <?php
            }
             if($row['incoming'] == $userid){
                ?>
   <!-- ------------------------------------------------------------------------------------------ -->
                  <!-- incoming -->
                <div class="containerConver">
                <div class="darker">
                  <p><?php
                            if(!empty($row["zipName"])) {
                                      $imageFileName=$row['zipName'];

                                      // get the file extension
                                      $extension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                                        if(in_array($extension, ['png', 'jpg', 'jpeg','PNG', 'JPG', 'JPEG'])){
                                          ?>
                                          <img style="padding: 10px; justify-content: center; width:55%;height:auto;" src="uploads/<?php echo $imageFileName; ?>" >
                                          <?php
                                        }
                                        else {
                                           ?>
                                           <div style="background-color:#4daf98; color: white; opacity: 0.8; padding: 10px; border-radius:5px;">
                                               <?php echo $imageFileName; ?><br>
                                               <a class="buttonDownload" href="uploads/<?php echo $imageFileName; ?>" download>&nbsp;&nbsp;Download 
                                                <?php echo (($row['fileSize'] / 1000) . ' KB');  ?>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                      ?>
                            <?php

                                }
                             ?>
                          </p>
                          <p><?php echo $row["messages"]; ?></p>
                  <span class="time-left"><?php echo get_time_ago($row["timeAgo"]);  ?></span>
                </div>
                </div>
          <!-- -------------------------------------------------------------------- -->
            <?php
            }
        }
    }?>
            <!-- scroll starts-->
            <button onclick="topFunction()" id="myBtnScroll" title="Go to top">Top</button>
</div>
</div>
            <script>
            //Get the button
            var mybutton = document.getElementById("myBtnScroll");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
            </script>
            <!-- scroll ends-->
<!-- -------------------------------------------------------------------------- -->

<?php
}
?>
<div class="stickyCKEditor">
     <!-- input messages -->
    <h3><center><!-- You're talking with < ?php echo $nameChatter; ?>.  -->&nbsp; &nbsp;
        <!--popup  -->
        <span>
            <button class="open-button" onclick="openForm()">Report user</button>
            <div class="form-popup" id="myForm">
              <form action="" method="POST" class="form-container" >
                <h3>Report</h3>
                <label for="report"><b>Your issue with this user</b></label><br>
                <textarea name="report" class="textareaInput" placeholder="Enter your report"  required></textarea>

                <button name="submitReport" type="submit" class="btn">Send Report</button>
                <button type="cancel" class="btn cancel" onclick="closeForm()">Close</button>
              </form>
            </div>

            <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
            </script>
        </span>

        <!--popup  end -->

    </h3></center>
     <center>
    <form action="" method="POST" id="typingArea" enctype="multipart/form-data">
    <div id="messagingTypingSection">
        <input type="hidden" name="outgoing" placeholder="Type Your Message Here." id="outgoing" class="setid" autocomplete="off" value="<?php echo $outgoingid; ?>" >
        <input type="hidden" name="incoming" placeholder="Type Your Message Here." id="incoming" class="setid" autocomplete="off" value="<?php echo $userid ?>" >   
 <!-- ----------------------------------------------------------------------------------- -->
            <!-- <div class="containerCKEditor"> -->
            <textarea rows="3px" class="chat-input" id="typingField" name="typingField" placeholder="attach file below or write a message"></textarea>
            <br>

            <!-- File upload start -->
            <!-- <div> -->
            <span>
                <label for="form_input" >
                  <!-- Select -->
                  <input style="visibility: hidden;" id="form_input" type="file" name="myFileSelection" value="myFile">  
                  <img style="width: 20px; height: 15px;" title="Choose a file" class="stickyButtonCKEditor" src="paperclip-solid.svg">
                </label>
              </span>
              <span >
                <label for="form_upload" >
                    <input style="visibility:hidden;"  id="form_upload" type="submit" name="submit" value="Send" id="sendMessage">
                    <img class="stickyButtonCKEditor"  style="width: 20px; height: 15px;" title="Send selected" src="paper-plane-solid.svg">
              </span>
            <!-- </div> -->

<!-- -------------------------------------------------------------------------- -->

            
    </div>
        </form>
    </center>
    </div>
    <!-- <script src="ckeditor/ckeditor.js"></script>
            <script>

                    ClassicEditor
                      .create(document.querySelector('#typingField'))
                      .catch(error => {
                        console.error(error)
                      });
            </script> -->
</div>
 <?php 
    }
    else{
         include('pageNotFound.HTML');
    }
    ?>


</body>
</html>

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

 ?>
 <?php
if (isset($_POST['submitReport'])) {
            $userid = filter_var(mysqli_real_escape_string($con, $_GET['ea0662459db42c7104766103f0d6b675']),FILTER_SANITIZE_STRING);
            $headerQuery = "SELECT * FROM usertable WHERE id = '{$userid}'";
            $runHeaderQuery = mysqli_query($con, $headerQuery);
            $fetch_infoChatter = mysqli_fetch_assoc($runHeaderQuery);
        $reportedName=$fetch_infoChatter['name'];
        $reportedEmail=$fetch_infoChatter['email'];
        $reportedID=$fetch_infoChatter['id'];
        $reporterEmail=$_SESSION['email'];
        $reportDiscussion=filter_var($_POST['report'],FILTER_SANITIZE_STRING);
        $timeAgo=time();
            $sql="INSERT INTO report (reportedID, reportDiscussion, reportedName, reportedEmail, reporterEmail, timeAgo) VALUES('$reportedID', '$reportDiscussion', '$reportedName', '$reportedEmail', '$reporterEmail', '$timeAgo')";
            if (mysqli_query($con,$sql)) {
                include('popupSuccess.htm');
            }
            else{
                include('popupFailure.htm');
            }
}
?>