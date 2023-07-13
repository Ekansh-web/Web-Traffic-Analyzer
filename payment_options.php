<?php
 require 'common.php';
 if(!isset($_SESSION['email']))
 {
     header('location:signup.php');
 }
 ?>

<html>
    
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Payment Options | Page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        
        <?php
            $con1 = mysqli_connect("localhost","root","","newd") or die("Error in database connection");

            $client = $_SERVER['HTTP_USER_AGENT'];
            $operatingsystem = explode(";",$client)[1];
            $temp = explode(" ",$client);
            $browser = end($temp);
            $browsername = explode("/",$browser)[0];
            $browserversion = explode("/",$browser)[1];

            $timenow = date("Y-m-d H:i:s");
            $today = date("Y-m-d");

            if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
            }    
            else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } 
            else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }

            $country = 'INDIA';

            $pageurl = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

            if(mysqli_num_rows(mysqli_query($con1,"SELECT id FROM analytics WHERE ip_address='$ip' AND page_url='$pageurl' AND entry_time LIKE '%$today%'")) < 1){
 
                $query = "INSERT INTO analytics(page_url,entry_time,ip_address,country,operating_system,browser,browser_version) VALUES('$pageurl','$timenow','$ip','$country','$operatingsystem','$browsername','$browserversion')";
                $select_query_result = mysqli_query($con1, $query);
            }
        ?>
        
        
      <nav class="navbar-fixed-top">
    <?php include 'header.php'; ?>
    </nav>
    
    <div style="margin-top: 60px" class="container">
             <div class="alert alert-success alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Thanks for giving us a Chance</strong>
              </div>
        </div>
    
    <div  class="container" style="color: #cb202d; font-family: 'Balsamiq Sans', cursive;"> 
        <h2><b>Payment Options : </b></h2><br>
        <h4>Pay with credit/debit cards :- </h4>
        <br><br>
        <div class="col-sm-6">
        <img src="img/credit-debit.png"/>
        </div>
        <div class="col-sm-3 col-sm-offset-3"> <a href="success.php" class="btn btn-danger">Pay Now</a></div>
    </div>
        
        <br><br>
        
        <div  class="container" style="color: #cb202d; font-family: 'Balsamiq Sans', cursive;"> 
        <h4>Pay with UPI/ GPay/ Paytm :- </h4>
        <br><br>
        <div class="col-sm-6">
            <img src="img/gpaypaytm.png"/>
        </div>
        <div class="col-sm-3 col-sm-offset-3"> <a href="success.php" class="btn btn-danger">Pay Now</a></div>
        </div>
         
    
    <br>

    <?php include 'footer.php'; ?>
    
    </body>
</html>
