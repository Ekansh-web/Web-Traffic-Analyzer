<?php
include 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Profile | Cafeteria</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
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
        ?>
        
        <div class="container" style="color: #cb202d; font-family: 'Balsamiq Sans', cursive;">
            <div class="col-md-4">
            <center>
        <?php
        $qry = "select * from images";
    $result = mysqli_query($con,$qry);
    while($row = mysqli_fetch_array($result))
    {
        if($row[3]==$_SESSION['user_id'])
        {
        echo '<img height="280" width="280" src="data:image;base64,'.$row[2].' ">';
        }
    }
        ?>
            </center>
            </div>
        
        
        <?php
        $user_id = $_SESSION['user_id'];
        $qry = "select * from users where register_id = $user_id";
        $result = mysqli_query($con,$qry);
        while($row = mysqli_fetch_array($result))
    {
        ?>
        <br>
         
            <div class="col-md-8">
            <h3>Name : <?php echo $row[1];?></h3>
            <h3>Register Id : <?php echo $row[0];?></h3>
            <h3>Organization Name : <?php echo $row[2];?></h3>
            <h3>Employee Id Number : <?php echo $row[3];?></h3>
            <h3>Mobile Number : <?php echo $row[4];?></h3>
            <h3>E-Mail : <?php echo $row[5];?></h3>
            <h3>Registered On : <?php echo $row[7];?></h3>
            </div>
        </div>
    <?php } ?>
        <br>
        <div class="one_line"></div>
        <div class="one_line"></div>
        
         <div class="container content">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 style="color: #38C2D2"><b>Change Password</b></h2>
                    <form action="settings_script.php" method="post">  
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="old_password" required="true"/>
                        </div>
                        <div class="form-group"> 
                            <input type="password" class="form-control" placeholder="New Password" name="new_password" required="true"/>
                        </div>
                          <div class="form-group"> 
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="r_new_password" required="true"/>
                          </div>  
                        <button type="submit" class="btn btn-primary" value="submit">Change</button>
                         
                    </form>
                </div>
                <div class="col-sm-6 col-sm-offset-6"><i><?php if(isset($_GET['pass'])){ echo $_GET['pass']; } ?>
                 <?php if(isset($_GET['retpass'])) { echo $_GET['retpass']; } ?>
                <?php if(isset($_GET['suc'])) { echo $_GET['suc']; } ?></i> </div>
                </div>
                </div>
        <br>
        <div class="one_line"></div>
        <div class="one_line"></div><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
