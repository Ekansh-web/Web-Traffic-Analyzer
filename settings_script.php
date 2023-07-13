<?php 
include 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$ret_password = $_POST['r_new_password'];

$old_password = md5($old_password);
$new_password = md5($new_password);
$ret_password = md5($ret_password);

$select_query = "SELECT * FROM users WHERE password='$old_password'";
$select_query_result = mysqli_query($con, $select_query);
$number_of_user = mysqli_num_rows($select_query_result);

if($number_of_user>0)
{
    
    if(strcmp($new_password, $ret_password)!=0){
        header('location: settings.php?retpass=ERROR : New Passwords in above fields were not matched with each other');
    }
    else {
       $row = mysqli_fetch_array($select_query_result);
       $id=$row['id'];
       $update_password_query = "UPDATE users SET password='$new_password' WHERE users.id='$id'";
       $update_password_result = mysqli_query($con, $update_password_query);
       header('location: settings.php?suc=Password Changed Successfully');
       }
}
else
{
    header('location:settings.php?pass=ERROR : Incorrect old password');
}
?>
