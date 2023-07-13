<?php require 'common.php'; ?>

<html> 
  
<head> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Image Upload</title> 
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
    
    <div style="margin-top: 60px" class="container">
             <div class="alert alert-success alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Welcome <?php echo $_SESSION['name']; ?></strong>
              </div>
        </div>
    
    <div  class="container" style="color: #cb202d; font-family: 'Balsamiq Sans', cursive;"> 
        <h2><b>UPLOAD : </b></h2><br>
        <h4>Upload Id Card (Formats: png, jpeg) :- </h4>
        <br><br>
        <form method="POST" action="upload_script.php" enctype="multipart/form-data"> 
            <div class="col-sm-4 col-sm-offset-3">
                <input class="btn btn-success" type="file" name="image" /> 
            </div>
            <br>
            <div class="col-sm-4"> 
                <input class="bn btn-danger" type="submit" name="sumit" value="Upload"> 
            </div> 
        </form> 
    </div>
    <br>
    <div style="margin-top: 400px;">
    <?php include 'footer.php'; ?>
    </div>
</body> 
  
</html> 

