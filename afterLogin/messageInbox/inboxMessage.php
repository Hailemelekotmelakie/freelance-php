<?php 
// include('dbConfig.php');
// session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
  header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 ?>


<?php 
// $con=mysqli_connect("localhost","huliesiracom_hailemelekotmelakie","WebHostEthiopiaHailemelekotMelakie1991H.","huliesiracom_userform");
$con=mysqli_connect("localhost","root","","huliesiracom_hailemelekotmelakie");

$timeAgo=time();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		Ethiolancer
 	</title>
 	<!-- <link rel="stylesheet" type="text/css" href="inbox.css"> -->
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
        <!-- google icon  -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style type="text/css">
  
.readedDiv{
  background: whitesmoke !important;
  padding: 10px !important;
  color: black;
  margin: 0px !important;
  border: 0.1px solid #9ed8b2 !important;
  border-radius: 3px !important;
  text-decoration: none;
}

.unreadedDiv{
  background-color: #d9edf7 !important;
  opacity: 0.9;
  margin: 0px !important;
  color: #426691;
  padding: 10px !important;
  border: 0.1px solid #9ed8b2 !important;
  border-radius: 4px !important;
  text-decoration: none;
}
.linkDecoration:hover{
    text-decoration: none;
    opacity: 0.5;
    font-size: 5px;
}
</style>
  </head>
 <body>
 
<div class="dropdown">
  <button onclick="myFunction()" type="button" class="icon-button dropbtn">
  		<!-- <span class="material-icons dropbtn">notifications</span> -->
  		<!-- <span class="material-symbols-outlined dropbtn">chat</span> -->
      <!-- <span><i class="fa fa-comments dropbtn" aria-hidden="true"></i></span> -->
      <span class="material-symbols-outlined dropbtn">sms</span>

	    <span class="icon-button__badge">
	    	<?php
	    	//browsers email
	    			$email = $_SESSION['email'];
            $sql_st = "SELECT * FROM usertable WHERE email = '$email'";
            $run_Sql = mysqli_query($con, $sql_st);
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $outgoingid = $fetch_info['id'];
    
	    	$notNum=0;
	    	$sql = "SELECT * FROM messages WHERE messageStatus='1' AND outgoing ='$outgoingid';"; 
             $result = mysqli_query($con, $sql);
             if (mysqli_num_rows($result)>0) {
               while($row = mysqli_fetch_assoc($result)) {
               	
               		$notNum=$notNum+1;
               	}
               		?>
					<p class="iconeFontSize"><?php echo $notNum; ?></p>
         			    <?php
				}else{
				 echo "0";
				}
				?>
	    </span>
  </button>
</div>
  <div id="myDropdown" class="dropdown-content">
    <a >
    	<?php
    				$email = $_SESSION['email'];
            $sql_st = "SELECT * FROM usertable WHERE email = '$email'";
            $run_Sql = mysqli_query($con, $sql_st);
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $outgoingid = $fetch_info['id'];
             if( $outgoingid==""){
   							header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/logout-user.php');

        }
						 $sql = "SELECT DISTINCT incoming,messageStatus,timeAgo FROM messages WHERE outgoing='$outgoingid' AND outgoing!=incoming ORDER BY timeAgo desc limit 100";
             $result = mysqli_query($con, $sql);
             if (mysqli_num_rows($result)>0) {
               while($row = mysqli_fetch_assoc($result)) {
                  $messageStatus=$row['messageStatus'];
                  $SenderID=$row['incoming'];
                  // for name retrival
            $sql_statmant = "SELECT * FROM usertable WHERE id = '$SenderID'";
            $incomingNameQ = mysqli_query($con, $sql_statmant);
            $fetch_incomingName = mysqli_fetch_assoc($incomingNameQ);
            // $incomingName = $fetch_incomingName['name'];
                  if ( $messageStatus==1) {
                         ?>
					<a class="linkDecoration" href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675=<?php echo $row['incoming']; ?>">
						      <div class="unreadedDiv">
								 		<p style="color: green;"><?php echo "New Message From ".$fetch_incomingName['name']; ?></p>
								 		<p style="color: green; text-align: right;"><?php echo get_time_ago($row["timeAgo"]); ?></p>
							 	</div>
					</a>
         			    <?php
				}else{
					 ?>
					<a class="linkDecoration" href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675=<?php echo $row['incoming']; ?>">
						    <div class="readedDiv">
								 		<p ><?php echo "Message From ".$fetch_incomingName['name']; ?></p>
								 		<p style=" text-align: right;"><?php echo get_time_ago($row["timeAgo"]); ?></p>
							 	</div>
					</a>
         			  <?php
	 		}
	 	}
 	}else{
    ?>
      <div style="text-align:center; font-weight: 700; font-size: 20px;" class="readedDiv">Wellcome Sir,</div>
      <div class="readedDiv">No received messages yet.</div>
      <div class="readedDiv">New Message Are displayed Here.</div>
    <?php
  }
 	?>
    </a>
  </div>



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<!-- preloader -->

<!-- < ?php  include '../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/loader.css">
 -->

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






















 <!-- unnessessary -->

 <!-- <a href="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675=< ?php echo $row['incoming']; ?>">Read message</a> -->
 								  <!-- <input class="buttonRead" name="notificationName" id="notification" type="submit" formaction="..\..\Default pages\chatting\chatBot.php?ea0662459db42c7104766103f0d6b675=< ?php echo $row['incoming']; ?>"> -->