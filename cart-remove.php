<?php 
include 'common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$select_query = "DELETE FROM users_items WHERE users_items.user_id='$user_id' AND users_items.item_id='$item_id'";
$select_query_result= mysqli_query($con, $select_query);
header('location: cart.php');
?>
