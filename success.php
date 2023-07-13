<?php 
include 'common.php';
?>

<html>
    <head>
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Success | Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
    <body>
        <?php include 'header.php';
        $user_id=$_SESSION['user_id'];
        $select_query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
        $select_query_result=  mysqli_query($con, $select_query);
        ?> 
        
        
        <div style="margin-top: 25px" class="container">
             <div class="alert alert-success alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>PAYMENT SUCCESSFUL</strong>
              </div>
        </div>
        
        
         <div class="container content">
             <div class="row">
                 <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1" style="border-bottom-style: solid ;border-bottom-width: 0.5px; border-bottom-color: #DAD8D8">
                     <center>Thanks for ordering. The order shall be delivered to you shortly.</center><br>
                 </div>
             </div>
             <h5> <center><br>To Order more food items <a href="index.php"><span class="glyphicon glyphicon-cutlery"></span> here</a></center></h5>
        </div>
        
        <div style="margin-top: 350px;">
        <?php
        include 'footer.php';
        ?></div>
    </body>
</html>
