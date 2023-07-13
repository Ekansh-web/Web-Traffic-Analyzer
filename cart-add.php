<?php 
include 'common.php';

if(!isset($_SESSION['email']))
{ 
    header('location:signup.php');
}
else 
{
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$select_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$select_query_result = mysqli_query($con, $select_query);
header('location:index.php');
}
?>