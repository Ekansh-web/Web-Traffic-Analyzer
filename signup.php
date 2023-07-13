<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Office Cafeteria App | HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        
        <nav class="navbar-fixed-top">
            <?php include 'header.php'; ?>
        </nav>
        
        <div style="margin-top: 5%;" class="one_line"></div>
        <div class="one_line"></div>
        
        <div class="container">
            
            <div style="margin-top: 5%;" class="col-sm-4">
                <img src="img/sign_up_main.png" width="90%"/>
            </div> 
            
            <div class="col-sm-5">
                <h2 style="color: #cb202d"><b>SIGN UP</b></h2>
                    <form method="post" action="signup_script.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required="true">  
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Organization Name" name="org_name" required="true">  
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Employee Id Number" name="emp_id" required="true">
                        </div>
                        <div class="form-group">
                             <input type="tel" class="form-control" placeholder="Mobile Number" name="phone" required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-Mail" name="email" required="true">
                        </div>
                    
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                        <button type="submit" class="btn btn-danger" value="submit" name="upload">Submit</button>
                        
                        <div style="margin-top: 50px;  font-family: 'Balsamiq Sans', cursive; color: #cb202d">
                            <h4>You have to Upload ID Card (Formats: png, jpeg) in next page</h4>
                        </div>
                    </form>
        </div>
            <div class="col-sm-2 col-sm-offset-1">
              <img src="img/sign_up_side.png" width="100%"/>
        </div>
        </div>
    
        <div class="one_line"></div>
        <div class="one_line"></div>
    <center>
        <h3 style="font-family: sofia; color: #cb202d">--- Give us a chance ---</h3></center>
         <?php include 'footer.php';?>
    </body>
</html>
