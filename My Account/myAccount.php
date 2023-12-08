<?php
  session_start();
  $email=$_SESSION['email'];
  ?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script type="text/javascript" src="myAccountScript.js"></script>
  <link rel="stylesheet" type="text/css" href="myAccount.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Account</title>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
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
          text-decoration: none;
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

        /*nav end*/
</style>
</head>
<body>
          <div>
            <span class="custom-div-nav"> <a href="../afterLogin/Homepage.php">Home</a></span> 
            <span class="custom-div-nav"> <a href="../afterLogin/Contact.php">Contact</a></span> 
            <span class="custom-div-nav"> <a href="../afterLogin/About.php">About</a></span> 
            <span class="custom-div-nav"> <a href="../afterLogin/payment/fillBankInfo.php">Payment</a></span>
            <span class="custom-div-nav"> <a href="../afterLogin/jobRequest.php">Post Jobs</a></span>
          </div>
<center><div style="color: white; font-size:23px; width:60%; background:linear-gradient(315deg, #fca61f 0%, #2b02f7 100%);" class="inputText">Hello Sir, Welcome<br><br>Fill the fields below. Please!</div></center>
  <!-- profile picture -->
  <table style="width:100%;">
  <tr >
    <td style=" /*border: 1px solid black;*/ width: 60%;">
<div class="divProfile">

<?php


  // database connection
  $conn = mysqli_connect("localhost", "root", "", "userform");
  if (isset($_POST['uploadPicture'])) { 
    // Get name of images
    $Get_image_name = $_FILES['file']['name'];
    // RANDOM TEXT FOR PHOTO NAME
          $n=5;
          function getRand($n) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';

            for ($i = 0; $i < $n; $i++) {
              $index = rand(0, strlen($characters) - 1);
              $randomString .= $characters[$index];
            }

            return $randomString;
          }
if (basename($_FILES['file']['name'])) {
 
    // image Path
    $image_Path = "profilePicture".basename($Get_image_name); 
  // Run SQL query  
    if($image_Path=="profilePicture"){
       echo  " <script> alert('First Select Image.');</script>";
    }
    else{  
    // image Path    
    $newImage_path="profilePicture/".getRand($n).$_SESSION['email'].basename($Get_image_name);
    // echo $newImage_path;            
      $sql = "UPDATE detailedInfo SET profilePicture='$newImage_path' WHERE email='$email';";
      mysqli_query($conn, $sql);
      
      if (move_uploaded_file($_FILES['file']['tmp_name'], $newImage_path)) {
        // echo "<br>Your Image uploaded successfully.<br>";
      }}
  }
}
    
 //select profile picture
      $sql="SELECT profilePicture from detailedinfo WHERE email='$email';";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        if ($info ) {
          if ($info['profilePicture']) {
            ?>
          <div class="imageDiv" onmouseover="mouseOver()" onmouseout="mouseOut()" > <?php echo "<img id='photoPic' src=".$info['profilePicture'].">"; ?>  </div>
          <?php
          }
          else{
             ?>
            <div class="imageDiv" onmouseover="mouseOver()" onmouseout="mouseOut()" > <img id="photoPic" src="profilePicture/avatar.png"> </div>
            <?php 
        }}}
//name retrival
      $sql="SELECT name from usertable WHERE email='$email';";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
          if ($info['name']) {
            ?>
            <hr>
            <center>
            <div class="nameOfUser">
           <?php
            echo $info['name'];
            ?>
            </div>
            <?php
        }}
     ?>
<!-- date -->
<?php
      $sql="SELECT dateOfRegister from usertable WHERE email='$email';";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
          if ($info['dateOfRegister']) {
            ?>
            <div class="nameOfUser">
           <?php
            echo "Member since  " .$info['dateOfRegister'];
            ?>
            </div>
            <?php
        }}
     ?>
</center>
    <form action=""
          method="post"
          enctype="multipart/form-data"
          style="text-align: center;">
    <input type="file"
            id="uploadBtnPicIn" 
             name="file">
             <label onmouseover="mouseOver()" onmouseout="mouseOut()" class="labeles1 in" for="uploadBtnPicIn"><i class="fa fa-camera" aria-hidden="true"></i></label>
        <input type="submit"
               value="Upload"
               id="uploadBtnPicUp"
               name="uploadPicture">
              <label onmouseover="mouseOver()" onmouseout="mouseOut()" class="labeles2 up" for="uploadBtnPicUp"><i class="fa fa-upload" aria-hidden="true"></i></label>
     </form>
 </div>


<?php include('dbConfig.php');
// session_start();
if(!$_SESSION['email']){
   header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }
 ?>

<div class="divOuter">
  <!-- for email lables -->
<div class="divInner">
<div>Email verified <i class="fa-regular fa-badge-check"></i> </br> <?php echo $_SESSION['email']; ?> </div>
  <?php 
$email=$_SESSION['email'];
$sql = "SELECT email FROM detailedinfo detailedinfo WHERE email='$email';";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
 echo("You're here now.");
} else {
 $sql = "INSERT INTO detailedinfo (email) VALUES ('$email')";
                        if ($con->query($sql) === TRUE){
                          echo "NOW FILE UP THOSE FIELDS.";
                        }
                          else{
                            echo "Your're not a member yet";
                          }
                        }
?>
</div>
<hr>
<div class="divInner">
  <div>Description <a class="addNew addNew0 tooltip"> <span class="tooltiptext">Click Now to Switch.</span>Edit</a></div>
                    <div id="">
                <form id="clickableForm0" class="clickableFor" method="POST" action="">
                    <TEXTAREA  TYPE="TEXTAREA" required Name="des" rows ="6" cols="30" placeholder="I am an experienced Full Stack Web Developer with more than 5 years of experience in this ..."></TEXTAREA><br>
                    <input type="reset" class="btn-white-cancel" value="Cancel">
                    <input onclick="myFunction();" class="updateButton" type="submit" name="submitDes" value="Update"><br>
               </form>
                      <?php
                      
                      //for updation in to database  of description 
                      if(isset($_POST['submitDes'])){
                        $va=filter_var(stripcslashes($_POST['des']),FILTER_SANITIZE_STRING);
                        $email=$_SESSION['email'];
                         $sql = "UPDATE detailedinfo SET Description='$va' WHERE email='$email'";
                        if ($con->query($sql) === TRUE) {
                          echo "Record updated successfully";
                          } else {
                          echo "Error updating record: " . $conn->error;
                          }     
                            }
                        ?>
                        </div>
                             <?php
      $sql="SELECT Description from detailedinfo WHERE email='$email'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        if (!$info['Description']) {
          echo "<div class='fadedText'>Describe your self in simple words.</div>";
        }
        else{
         echo "<div class='fadedText'>".$info['Description']."</div>";
        }
     }
      ?>
                        </div>
<hr>
<div class="divInner">
  <div >Languages <a class="addNew addNew1 tooltip"  onclick="myFunction1();"><span class="tooltiptext">Click Now to Switch.</span>Edit</a></div>
 <form id="clickableForm1" class="clickableFor" method="POST" action="">
  
                    <input class="inputText" type="text" required Name="lang" placeholder="English or ..."><br>
                    <label for="Skills">Language Level:</label>
                    <select name="levelLang" id="levelLang">
                    <option value="basics" selected>Basics</option>
                    <option value="Intermidate">Intermidate</option>
                    <option value="fluent">fluent</option>
                    <option value="Native">Native</option>
                    </select><br>
                    <input type="reset" class="btn-white-cancel" value="Cancel">
                    <input class="updateButton" type="submit" name="submitLang" value="Update"><br>
  </form>
                      <?php
                      //for updation in to database  of language 
                      if(isset($_POST['submitLang'])){
                        $lang=filter_var(stripcslashes($_POST['lang']),FILTER_SANITIZE_STRING);
                        $levelLang=$_POST['levelLang'];
                        $email=$_SESSION['email'];
                         $sql = "UPDATE detailedinfo SET Language='$lang',LangLevel='$levelLang' WHERE email='$email'";
                        if ($con->query($sql) === TRUE) {
                          echo "Record updated successfully";
                          } else {
                          echo "Error updating record: " . $conn->error;
                          }     
                            }
                        ?>
                    <!-- show filled datas  -->
  <?php
      $sql="SELECT LangLevel,Language from detailedinfo WHERE email='$email'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        if (!$info['Language']) {
          echo "<div class='fadedText'> Add your Language detail</div>";
        }
        else{
         echo "<div class='fadedText'> You're ".$info['LangLevel']." in ".$info['Language']." Language.</div>";
        }
     }
  ?>
                        </div>
<hr>
<div class="divInner">
  <div>Skills <a class="addNew addNew2 tooltip"><span class="tooltiptext">Click Now to Switch.</span>Edit</a></div>
<form id="clickableForm2" class="clickableFor" method="POST" action="">
                    <input class="inputText" TYPE="text" required Name="skill" placeholder="Computer Graphics,Web Dev or ..."><br>
                    <label for="Skills">Choose a level of skill:</label>
                    <select name="ExpLevel" id="ExpLevel">
                    <option value="Fresh" selected>Fresh</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                    </select><br>
                    <input type="reset" class="btn-white-cancel" value="Cancel">
                    <input class="updateButton" type="submit" name="submitskill" value="Update"><br>
  </form>
                      <?php
                      //for updation in to database  of skill 
                      if(isset($_POST['submitskill'])){
                        $skill=filter_var(stripcslashes($_POST['skill']),FILTER_SANITIZE_STRING);
                        $ExpLevel=filter_var($_POST['ExpLevel'],FILTER_SANITIZE_STRING);
                        $email=$_SESSION['email'];
                         $sql = "UPDATE detailedinfo SET skill='$skill',ExpLevel='$ExpLevel' WHERE email='$email'";
                        if ($con->query($sql) === TRUE) {
                          echo "Record updated successfully";
                          } else {
                          echo "Error updating record: " . $conn->error;
                          }     
                            }
                        ?>
                        <!-- RETRIVING -->
  <?php
      $sql="SELECT skill,ExpLevel from detailedinfo WHERE email='$email'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        if (!$info['ExpLevel'] AND !$info['skill']) {
          echo "<div class='fadedText'> Add your Talent.</div>";
        }
        else{
         echo "<div class='fadedText'> You do have ".$info['ExpLevel']." in ".$info['skill'].".</div>";
        }
     }
  ?>
                  </div>      
<hr>
<div class="divInner">
  <label >Education<a onclick="myFunction3();" class="addNew addNew3 tooltip"><span class="tooltiptext">Click Now to Switch.</span>Edit</a></</label>
  <form id="clickableForm3" class="clickableFor" method="POST" action="">
  <label>Degree</label> <input class="inputText" TYPE="text" required Name="Education" placeholder="University degree"><br>
  <label>Colleg of Graduation</label><input class="inputText" TYPE="text" required Name="College" placeholder="AA University or ..."><br>
  <label>Field of study</label><input class="inputText" TYPE="text" required Name="FieldOfStudy" placeholder="Computer Science or ..."><br>
  <input type="reset" class="btn-white-cancel" value="Cancel">
  <input class="updateButton" type="submit" name="submitEducation" value="Update"><br>

  </form>
                      <?php
                      //for updation in to database  of edu 
                      if(isset($_POST['submitEducation'])){
                        $Education=filter_var(stripcslashes($_POST['Education']),FILTER_SANITIZE_STRING);
                        $College=filter_var(stripcslashes($_POST['College']),FILTER_SANITIZE_STRING);
                        $FieldOfStudy=filter_var(stripcslashes($_POST['FieldOfStudy']),FILTER_SANITIZE_STRING);
                        $email=$_SESSION['email'];
                         $sql = "UPDATE detailedinfo SET Education='$Education',College='$College',FieldOfStudy='$FieldOfStudy' WHERE email='$email'";
                        if ($con->query($sql) === TRUE) {
                          echo "Record updated successfully";
                          } else {
                          echo "Error updating record: " . $conn->error;
                          }     
                            }
                        ?>
                        <!-- Here is edu retrival --><br>
                <?php
                  $sql="SELECT Education,College,FieldOfStudy from detailedinfo WHERE email='$email'";
                  $query=mysqli_query($con,$sql);
                  while ($info=mysqli_fetch_array($query)) {
                    if (!$info['College'] and !$info['FieldOfStudy'] and !$info['Education']) {
                      echo "<div class='fadedText'> Add your Education detail</div>";
                    }
                    else{
                     echo "<div class='fadedText'> You've studied ".$info['Education']." in ".$info['FieldOfStudy']." Field at ".$info['College']."</div>";
                    }
                 }
              ?>
                        </div>
<hr>
<div class="divInner">
  <label>Contact Information<a onclick="myFunction4();" class="addNew addNew4 tooltip"><span class="tooltiptext">Click Now to Switch.</span>Edit</a></label>
<form id="clickableForm4" class="clickableFor" method="POST" action="">
  <label>Residence</label> <input class="inputText" TYPE="text" required Name="Residence" placeholder="Dire Dawa or ..."><br>
  <label>Phone Number </label><input class="inputText" type="numerics" required Name="phoneNum" placeholder="0947****** " pattern="[0]{1}[9]{1}[0-9]{3}[0-9]{2}[0-9]{3}"><br>
  <label>Gender</label>
                    <select name="gender" id="gender">
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                    </select><br>
  <input type="reset" class="btn-white-cancel" value="Cancel">
  <input class="updateButton" type="submit" name="submitPersonal" value="Update"><br>
  </form>
                      <?php
                      //for updation in to database  of language 
                      if(isset($_POST['submitPersonal'])){
                        $Residence=filter_var($_POST['Residence'],FILTER_SANITIZE_STRING);
                        $phoneNum=filter_var($_POST['phoneNum'],FILTER_SANITIZE_STRING);
                        $email=$_SESSION['email'];
                        $gender=$_POST['gender'];
                         $sql = "UPDATE detailedinfo SET gender='$gender',Residence='$Residence',phoneNumber='$phoneNum' WHERE email='$email'";
                        if ($con->query($sql) === TRUE) {
                          echo "Record updated successfully";
                          } else {
                          echo "Error updating record: " . $conn->error;
                          }     
                            }
                        ?>
                        <!-- retrive contact info -->
            <?php
                $sql="SELECT gender,Residence,phoneNumber from detailedinfo WHERE email='$email'";
                $query=mysqli_query($con,$sql);
                while ($info=mysqli_fetch_array($query)) {
                  if (!$info['Residence']AND !$info['gender'] AND !$info['phoneNumber']) {
                    echo "<div class='fadedText'> Add your contact information</div>";
                  }
                  else{
                   echo "<div class='fadedText'> Your phone number:  ".$info['phoneNumber']."<br>Your Location:".$info['Residence']."<br>Gender: ".$info['gender']."</div>";
                  }
               }
            ?>
                        </div>
<hr>
<div class="divInner">
<label>CV in PDF format <a onclick="myFunction5();" class="addNew addNew5 tooltip"><span class="tooltiptext">Click Now to Switch.</span>Edit</a></label>
      <form id="clickableForm5" class="clickableFor" action="" method="post" enctype="multipart/form-data">
        <!-- <input class="fillButton"  id="pdf" type="file" name="pdf" value="" required ></input><br> -->
        <button type = "button" class = "btnFile"><i class = "fa fa-upload"></i> Update CV PDF<input id="pdf" name="pdf" type="file"></button><br>
        <input type="reset" class="btn-white-cancel" value="Cancel">
        <input class="updateButton" id="upload" type="submit" name="submitDoc" value="Update">
      </form>
        <?php
        if (isset($_POST['submitDoc'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);
          $sql = "UPDATE detailedinfo SET Document='$pdf_store' WHERE email='$email'";
          $query=mysqli_query($con,$sql);
          if ($query) {
            echo "successfully Submitted";
          }
          else{
            echo " Failed to Submitted";
          }
        }
         // <!-- CHECK SUBMITTANCE -->
      $sql="SELECT Document from detailedinfo WHERE email='$email'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        if (!$info['Document']) {
          echo "<div class='fadedText'> Add your CV/Scanned Document</div>";
        }
        else{
         echo "<div class='fadedText'> You're Submitted the issued Document</div>";
        }
     }
  ?>
</div>
      <hr>
<div class="divInner">
  <label>Photos of ID or Passport <a onclick="myFunction6();" class="addNew addNew6 tooltip"><span class="tooltiptext">Click Now to Switch.</span>Edit</a></label>
<form id="clickableForm6" class="clickableFor" method="post" enctype="multipart/form-data" style="text-align: center;">
  <!-- <input class="fillButton" type="file" name="file"><br> -->
   <button type = "button" class = "btnFile"><i class = "fa fa-upload"></i>Update ID/Passport <input name="file" type="file"></button><br>
  <input type="reset" class="btn-white-cancel" value="Cancel">
  <input class="updateButton" type="submit" value="Update" name="uploadID">
</form>

<?php
    if (isset($_POST['uploadID'])) { 
    // Get name of images
    $Get_image_name = $_FILES['file']['name'];
      $email=$_SESSION['email'];
    // image Path
    $image_Path = "uploadedPhotosOfID/".basename($Get_image_name); 
  // Run SQL query    
     $sql = "UPDATE detailedinfo SET NationalID= '$image_Path' WHERE email='$email'";
     mysqli_query($con, $sql);
   
    if (move_uploaded_file($_FILES['file']['tmp_name'], $image_Path)) {
       echo "<hr><h4 style='text-align:center;color:green;'>Your Image uploaded successfully.</h4><hr>";
    }else{
           echo "<hr><h4 style='text-align:center;color:green;'>Image Not Insert.</h4><hr>";
     }
      }

?>
 <?php
      $sql="SELECT NationalID from detailedinfo WHERE email='$email'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        if (!$info['NationalID']) {
          echo "<div class='fadedText'>Add your National ID or Passport</div>";
        }
        else{
         echo "<div class='fadedText'> You're Submitted the issued ID.</div>";
        }
     }
  ?>
</div>
</div>
</td>
    <td class="gonnaNone" style="vertical-align: top;">
      
      <td style="vertical-align: top;">
      <div class="postAJob">
        <center>
          ---------------------<br>
            Please Fill Here<br>
          ---------------------<br>
        </center>
      </div> 
      <div class="postAJob">
        <center>
            CREATE AN OFFER<br>
            <button class="btn-go-job-posting" onclick="location.href='https://www.huliesira.com';" type="submit" name="submitPersonal" value="Update">CREATE AN OFFER</button>
        </center>
      </div>
      <div class="postAJob">
        <center>
            POST JOBS HERE AND GET AN OFFER<br>
            <button class="btn-go-job-posting" onclick="location.href='../../Default pages/afterLogin/jobRequest.php';" type="submit" name="submitPersonal" value="Update">POST A JOB</button>
        </center>
      </div>

    </td>
  </tr>
</table>

<!-- preloader -->

<?php  include '../../Default pages/imported/loader.html'; ?>
<link rel="stylesheet" type="text/css" href="../../Default pages/imported/loader.css">

</body>
</html>
