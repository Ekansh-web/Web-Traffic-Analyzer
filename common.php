<?php
$con = mysqli_connect("localhost", "root", "", "office_cafe") or die(mysqli_error($con));
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>