<?php

session_start();

require ("db.php");

$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);
// $checked = $_POST['checked'];
$verify = $_POST["verify"];

date_default_timezone_set('Asia/Dhaka');
$date = date("y-m-d h:m:t");

if(empty($email) || empty($password) || empty($verify)) {
    $_SESSION['input_err']= "We were unable to log you in using those credentials. Check that you have typed your email address and password correctly.";
    // $_SESSION["captcha_code_msg"]= 'Invalid Captcha!';
    header("location: index.php");
} else {
    $insert = "INSERT INTO log_info (email,password,captcha,created_at)VALUES( '$email','$hash','$verify','$date' )";
    $res = mysqli_query($con, $insert);
    header("location: home.php");
}



// if you have email and password in your database and if you want ot check email and password matched or not then active the code below  


// $select_email = "SELECT COUNT(*) as exist FROM tableName WHERE email = '$email'";
// $select_email_result = mysqli_query($con, $select_email);
// $after_assoc = mysqli_fetch_assoc($select_email_result);

// if($after_assoc['exist']==1){
  
// $select_email2 = "SELECT * FROM users WHERE email = '$email'";
// $select_email_result2 = mysqli_query($con, $select_email2);
// $after_assoc2 = mysqli_fetch_assoc($select_email_result2);

//   if(password_verify($after_assoc2['password'], $password)) {
//   $_SESSION["islogedin"]= "loged in";
//   header('location:home.php');
//   } else {
//     $_SESSION["wrng_pass"]= "password could not matched";
//     header('location:index.php');
//   }
// }else {
//   $_SESSION["email_err"]= "Email dose not matched";
//   header('location:index.php');
// }