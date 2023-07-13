<?php
require 'common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$org_name = mysqli_real_escape_string($con, $_POST['org_name']);
$emp_id = mysqli_real_escape_string($con, $_POST['emp_id']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
  
if($password<6){
    echo "password should at least 6 characters";
}

$select_query = "SELECT register_id FROM users WHERE email='$email'";
$select_query_result = mysqli_query($con, $select_query);
$number_of_user = mysqli_num_rows($select_query_result);
if($number_of_user>0)
{
    header('location:signup.php?signup_error=User with this email id is already present');
}
else
{
  $password = md5($password);
  $user_registration_query = "insert into users (name, org_name, emp_id, contact, email, password) values ('$name','$org_name','$emp_id','$phone','$email','$password')";
  $user_registration_query_submit = mysqli_query($con,$user_registration_query) or die($user_registration_query);
  $_SESSION['email'] = $email;
  $_SESSION['name']=$name;
  $_SESSION['user_id'] = mysqli_insert_id($con);
  
  header('location:upload.php');
}

?>