<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();
                            require('includes/PHPMailer.php');
                            require('includes/SMTP.php');
                            require('includes/Exception.php');
                                //define name spaces
                            use PHPMailer\PHPMailer\PHPMailer;
                            use PHPMailer\PHPMailer\SMTP;
                            use PHPMailer\PHPMailer\Exception;

                            //verify code
                            function sendmail(int $code){
                                $name = "Hailemelekot's Freelancing Site";  // Name of your website or yours
                                $to = $_POST['email'];// "respectjemora@gmail.com";  // mail of reciever
                                $subject = "Freeancing OPT";
                                $body = "Your verification code For Freelancing is ". $code;
                                $from = "youraddress1991@gmail.com";  // you mail
                                $password = "ubqxpafmyhpfbtek";  // your mail password


                                //create a instance phpmailer
                                $mail = new PHPMailer();
                                //set mailer to use smtp
                                $mail->isSMTP();
                                //define smtp host
                                $mail->Host = "smtp.gmail.com";
                                //enable smtp authentication
                                $mail->SMTPAuth = "true";
                                //set type of encryption (ssl/tls)
                                $mail->SMTPSecure = "tls";
                                //set port to connect smtp
                                $mail->Port = "587";
                                //set gmail user
                                $mail->Username = "youraddress1991@gmail.com"; //before use see full video
                                //set gmail password
                                $mail->Password = "ubqxpafmyhpfbtek"; // see setting in youtube video working perfect
                                //set gmail subject
                                $mail->Subject = $subject;// subject
                                //set sender email
                                $mail->setFrom($from,$name);// from
                                //email body
                                $mail->Body = $body;//body
                                //add recipient
                                $mail->addAddress($to);// to
                                // $mail->addCC($CC);
                                // $mail->addCC();
                                // $mail->addBCC($BCC);
                                // $mail->addAttachment($name);

                              
                                if ($mail->send()) {
                                        $info = "We've sent a verification code to your email - $to";
                                        $_SESSION['info'] = $info;
                                        $_SESSION['email'] = $to;
                                        $_SESSION['password'] = $password;
                                        header('location: user-otp.php');
                                        exit();
                                } else {
                                     echo "Failed while sending code!" . $mail->ErrorInfo;
                                }
                            }

//reset code
function resetCode(int $code,$to){
                $name = "Hailemelekot's Freelancing Site";  // Name of your website or yours
                // $to = $email$_POST['email'];// "respectjemora@gmail.com";  // mail of reciever
                $subject = "Freeancing OPT";
                $body = "Your password reset code is ". $code;
                $from = "youraddress1991@gmail.com";  // you mail
                $password = "NewPassword1234.";  // your mail password

                                //create a instance phpmailer
                                $mail = new PHPMailer();
                                //set mailer to use smtp
                                $mail->isSMTP();
                                //define smtp host
                                $mail->Host = "smtp.gmail.com";
                                //enable smtp authentication
                                $mail->SMTPAuth = "true";
                                //set type of encryption (ssl/tls)
                                $mail->SMTPSecure = "tls";
                                //set port to connect smtp
                                $mail->Port = "587";
                                //set gmail user
                                $mail->Username = "youraddress1991@gmail.com"; //before use see full video
                                //set gmail password
                                $mail->Password = "ubqxpafmyhpfbtek"; // see setting in youtube video working perfect
                                //set gmail subject
                                $mail->Subject = $subject;// subject
                                //set sender email
                                $mail->setFrom($from,$name);// from
                                //email body
                                $mail->Body = $body;//body
                                //add recipient
                                $mail->addAddress($to);// to
                                // $mail->addCC($CC);
                                // $mail->addCC();
                                // $mail->addBCC($BCC);
                                // $mail->addAttachment($name);

                              
                if ($mail->send()) {
                        $info = "We've sent a passwrod reset otp to your email $to";
                        $_SESSION['info'] = $info;
                        $_SESSION['email'] = $to;
                        header('location: reset-code.php');
                        exit();
                } else {
                     echo "Failed while sending code!" . $mail->ErrorInfo;
                }
            }


//if user signup 
if(isset($_POST['signup'])){
    
    $name = filter_var(mysqli_real_escape_string($con, stripcslashes($_POST['name'])),FILTER_SANITIZE_STRING);
    $email = filter_var(mysqli_real_escape_string($con, stripcslashes($_POST['email'])),FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($con, stripcslashes($_POST['password']));
    $cpassword = mysqli_real_escape_string($con,stripcslashes( $_POST['cpassword']));
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
     if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
          sendmail($code);
        }else{
             $errors['db-error'] = "Failed while inserting data into database!";
         }
     }
 }
// .\if user signup 




    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, stripcslashes($_POST['otp']));
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code"; //compare verification code
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = stripcslashes($name);
                $_SESSION['email'] = stripcslashes($email);
                        header('Location: login-user.php');

                header('location: ..\..\Default pages\afterLogin\Homepage.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

//.\if user click verification code submit button




    //if user click login button
    if(isset($_POST['login'])){
        $email = filter_var(mysqli_real_escape_string($con, stripcslashes($_POST['email'])),FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($con, stripcslashes($_POST['password']));
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
              if($fetch['banning']=="Banned"){
                $errors['email'] = "You Are Banned!<br>Please, contact in contact center";
                }else{
                    if(password_verify($password, $fetch_pass)){
                        $_SESSION['email'] = $email;
                        $status = $fetch['status'];
                        if($status == 'verified'){
                          $_SESSION['email'] = $email;
                          $_SESSION['password'] = $password;
                            header('location: ..\..\Default pages\afterLogin\Homepage.php');
                        }else{
                            $info = "It's look like you haven't still verify your email - $email";
                            $_SESSION['info'] = $info;
                            header('location: user-otp.php');
                        }
                    }else{
                        $errors['email'] = "Incorrect email or password!";
                    }
                }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
    //.\if user click login button







    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = filter_var(mysqli_real_escape_string($con, stripcslashes($_POST['email'])),FILTER_SANITIZE_STRING);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                resetCode($code,$email);
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }
    //.\if user click continue button in forgot password form





    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, stripcslashes($_POST['otp']));
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }
    //.\if user click check reset otp button




    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, stripcslashes($_POST['password']));
        $cpassword = mysqli_real_escape_string($con, stripcslashes($_POST['cpassword']));
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass',status='verified' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    //.\if user click change password button

   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }

?>