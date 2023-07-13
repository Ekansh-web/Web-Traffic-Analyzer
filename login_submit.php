<?php 
require 'common.php';
$email = $_POST['email'];
$password = $_POST['password'];
$email= mysqli_real_escape_string($con,$email);
$password= mysqli_real_escape_string($con,$password);
$password= md5($password);
$select_query = "SELECT register_id, email, name FROM users WHERE email = '$email' AND password='$password'";
$select_query_result = mysqli_query($con, $select_query);
$number_of_user = mysqli_num_rows($select_query_result);
if($number_of_user==0)
{ 
header('location:index.php?login_error=1');
}
else {
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']=$row['register_id'];
    $_SESSION['name']=$row['name'];
    header('location: index.php?login_success=1');
 } 
?>
