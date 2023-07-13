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
        
        <title>Cart | Page</title>
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
        
        
        <?php       
        
        include 'header.php';
        $user_id = $_SESSION['user_id'];
        $select_query = "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.Pid WHERE users_items.user_id='$user_id'";
        $select_query_result = mysqli_query($con, $select_query);
        $select_query_count = mysqli_num_rows($select_query_result);
        $sum=0;
        $id=1;
        $st_check = 1;
        ?>
        
        
        <div class="container content">
         <div class="col-sm-8 col-sm-offset-2">
          <div class="table-responsive">
           <table class="table table-striped table-bordered">
             
               <?php  if($select_query_count==0) 
                    {  ?><center><h4 style="color: #38C2D2"><i> Add items to cart first _ <span class="glyphicon glyphicon-shopping-cart"></span> </i></h4></center> <?php } 
                    else { ?>
               
               <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                
                
             <?php
             while($row =  mysqli_fetch_array($select_query_result)) 
                     {
                        ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['status']; if($row['status'] != "Confirmed"){$st_check = 0;}?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row['Pid'];?>" class='remove_item_link'> Remove</a></td>
                    <?php
                    $id++;
                    $sum = $sum + $row['price']; ?>
                </tr>
                <?php } ?>
        
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Rs <?php echo $sum; ?>/-</td>
                    <td></td>
                    <?php if($st_check == 0) {?>
                    <td><a href="payment_options.php" class="btn btn-primary">Confirm Order</a></td> <?php } ?>
                </tr>
           <?php } ?>
            </table>
        </div>
        </div>
        </div>
       
        <div style="margin-top: 500px;">
        <?php include 'footer.php'; ?>
        </div>
    </body>
</html>
