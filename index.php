
<?php require 'common.php'; ?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Office Cafeteria App | HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="whole">
      
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
        
        
       <?php include 'check_if_added.php';?>
        
        <nav class="navbar-fixed-top">
            <?php include 'header.php'; ?>
        </nav>
        
        <div class="container-fluid">
            <img src="img/cof.png" width="40%"/><img src="img/pasta.jpg" width="60%"/>
            <div class="centered"> Welcome </div>
            <br><br>
        </div>
        
        
        <?php if(isset($_GET['login_error'])) { ?>
        <div style="margin-top: 60px" class="container">
             <div class="alert alert-danger alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Login Failed!</strong> No user Found with this email and password.
              </div>
        </div>
        <?php } ?>
        
        <?php if(isset($_GET['login_success']))
         { ?>
        
        
        <div style="margin-top: 60px" class="container">
             <div class="alert alert-success alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Welcome <?php echo $_SESSION['name']; ?></strong>
              </div>
        </div>
        <?php } ?>
        
        <div class="one_line"></div>
        <div class="one_line"></div>
        
        
        
    <div class="container"> 
    <center>
        <h2 class="for_head">FOODS</h2><br>
    </center>
   
        <img src="img/plain-maggi.jpg" width="60%"/><img src="img/pasta_menu.jpg" width="40%"/><br>
        <div class="col-xs-4"><h4>PLAIN MAGGI</h4>
            <?php if(check_if_added_to_cart(1)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
            <a href="cart-add.php?id=1" class="btn btn-danger">Rs. 50</a> <?php } ?> </div> 
        <div class="col-xs-4 col-xs-offset-3"><h4>PLAIN PASTA</h4>
            <?php if(check_if_added_to_cart(2)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
            <a href="cart-add.php?id=2" class="btn btn-danger">Rs. 60</a> <?php } ?> </div><br>   
    </div>
        
        
        
    <br><br><div class="one_line"></div><br>
    
    
    
    <div class="container"> 
    <img src="img/cheese-maggi.jpg" width="50%"/><img src="img/white-sauce-pasta.jpg" width="50%"/><br>
    <div class="col-xs-4"><h4>CHEESE MAGGI</h4> 
        <?php if(check_if_added_to_cart(3)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=3" class="btn btn-danger">Rs. 100</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h5>WHITE SAUCE PASTA</h5>
        <?php if(check_if_added_to_cart(4)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=4" class="btn btn-danger">Rs. 120</a> <?php } ?> </div><br>
    </div>
    
    <br><br><div class="one_line"></div><br>
    
    
    
    <div class="container">
    <img src="img/chick_pasta.jpg" width="50%"/><img src="img/cheese-burger.jpg" width="50%"/><br>
    <div class="col-xs-4"><h4>CHICKEN PASTA</h4>
        <?php if(check_if_added_to_cart(5)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=5" class="btn btn-danger">Rs. 170</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>CHEESE BURGER</h4>
        <?php if(check_if_added_to_cart(6)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=6" class="btn btn-danger">Rs. 200</a> <?php } ?> </div><br>
    </div>
    
    <br><br><div class="one_line"></div><br>
    
     <div class="container">
    <img src="img/pepperoni-pizza-pasta-bake.png" width="33%"/><img src="img/chick_buger.jfif" width="33%"/><img src="img/noodles_menu.jpg" width="33%"/><br>
    <div class="col-xs-4"><h6>PEPPERONI PIZZA PASTA BAKE</h6>
        <?php if(check_if_added_to_cart(7)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=7" class="btn btn-danger">Rs. 250</a> <?php } ?> </div>
    <div class="col-xs-3"><h6>CHICKEN BURGER</h6>
        <?php if(check_if_added_to_cart(8)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=8" class="btn btn-danger">Rs. 260</a> <?php } ?> </div>
    <div class="col-xs-3 col-xs-offset-1"><h6>NOODLES</h6>
        <?php if(check_if_added_to_cart(9)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=9" class="btn btn-danger">Rs. 70</a> <?php } ?> </div><br>
     </div>
        
    <br><br><div class="one_line"></div><br>
    
     <div class="container">
    <img src="img/pan-pizza.jpg" width="50%"/><img src="img/chick_pizza.jpg" width="50%"/><br>
    <div class="col-xs-4"><h4>PAN PIZZA</h4>
        <?php if(check_if_added_to_cart(10)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=10" class="btn btn-danger">Rs. 210</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>CHICKEN PIZZA</h4>
        <?php if(check_if_added_to_cart(11)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=11" class="btn btn-danger">Rs. 300</a> <?php } ?> </div><br>
     </div>
    
    <br><br><div class="one_line"></div><br>
        
     <div class="container">
    <img src="img/sandwich.webp" width="50%"/><img src="img/chicken-sandwich.jpg" width="50%"/><br>
    <div class="col-xs-4"><h4>SANDWICH</h4>
        <?php if(check_if_added_to_cart(12)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=12" class="btn btn-danger">Rs. 150</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>CHICKEN SANDWICH</h4>
        <?php if(check_if_added_to_cart(13)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=13" class="btn btn-danger">Rs. 230</a> <?php } ?> </div><br>
     </div>
    
     <br><br><div class="one_line"></div><br>
        
     <div class="container">    
    <img id="nat" src="img/chole-bhat.webp" width="50%"/><img src="img/french-fries.jpg" width="50%"/><br>
    <div class="col-xs-4"><h4>CHOLE BHATURE</h4>
        <?php if(check_if_added_to_cart(14)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=14" class="btn btn-danger">Rs. 110</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>FRENCH FRIES</h4>
        <?php if(check_if_added_to_cart(15)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=15" class="btn btn-danger">Rs. 130</a> <?php } ?> </div><br>
     </div>
    
    <br><br><div class="one_line"></div><br>
    
     <div class="container">
    <img src="img/egg_omelet.jpg" width="50%"/><img src="img/hakka-noodles.jfif" width="50%"/><br>
    <div class="col-xs-4"><h4>EGG OMELET</h4>
        <?php if(check_if_added_to_cart(16)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=16" class="btn btn-danger">Rs. 140</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>HAKKA NOODLES</h4>
        <?php if(check_if_added_to_cart(17)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=17" class="btn btn-danger">Rs. 180</a> <?php } ?> </div><br>
     </div>
    
    <br><br><div class="one_line"></div><br>    
    
    <div class="container">   
    <img src="img/idli.jpg" width="50%"/><img src="img/plain-dosa.webp" width="50%"/><br>
    <div class="col-xs-4"><h4>IDLI</h4>
        <?php if(check_if_added_to_cart(18)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=18" class="btn btn-danger">Rs. 80</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>PLAIN DOSA</h4>
        <?php if(check_if_added_to_cart(19)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=19" class="btn btn-danger">Rs. 100</a> <?php } ?> </div><br>
    </div>
    
    <br><br><div class="one_line"></div><br>
    
    <div class="container">
    <img src="img/masala-dosa.jpg" width="48%"/><img src="img/momos.jpg" width="52%"/><br>
    <div class="col-xs-4"><h4>MASALA DOSA</h4>
        <?php if(check_if_added_to_cart(20)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=20" class="btn btn-danger">Rs. 150</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>MOMOS</h4>
        <?php if(check_if_added_to_cart(21)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=21" class="btn btn-danger">Rs. 200</a> <?php } ?> </div><br>
    </div>
    
    <br><br><div class="one_line"></div><div class="one_line"></div><br>
    
    <div class="container">
    <center>
        <h2 class="for_head">DRINKS</h2>
    </center>
    <img src="img/Darjeeling-Tea.jpg" width="50%"/><img src="img/Mixed-Fruit-Juice.jpg" width="50%"/><br>
    <div class="col-xs-4"><h4>DARJEELING TEA</h4>
        <?php if(check_if_added_to_cart(22)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=22" class="btn btn-danger">Rs. 30</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>MIXED FRUIT JUICE</h4>
        <?php if(check_if_added_to_cart(23)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=23" class="btn btn-danger">Rs. 50</a> <?php } ?> </div><br>
    </div>
    
    <br><br><div class="one_line"></div><br>
    
    <div class="container">
    <img src="img/applejuice.jpg" width="52%"/><img src="img/cappuccino.jpg" width="48%"/><br>
    <div class="col-xs-4"><h4>APPLE JUICE</h4>
        <?php if(check_if_added_to_cart(24)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=24" class="btn btn-danger">Rs. 80</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>CAPPUCCINO</h4>
        <?php if(check_if_added_to_cart(25)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=25" class="btn btn-danger">Rs. 70</a> <?php } ?> </div><br>
    </div>
    
    <br><br><div class="one_line"></div><br>
    
    <div class="container">    
    <img src="img/coke.jpg" width="54%"/><img src="img/cold-coffee.jpg" width="46%"/><br>
    <div class="col-xs-4"><h4>COKE</h4>
        <?php if(check_if_added_to_cart(26)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=26" class="btn btn-danger">Rs. 40</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-3"><h4>COLD COFFEE</h4>
        <?php if(check_if_added_to_cart(27)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=27" class="btn btn-danger">Rs. 80</a> <?php } ?> </div><br>
    </div>
      
    <br><br><div class="one_line"></div><br>
    
    <div class="container">    
    <img src="img/dalgona_coffee.jfif" width="50%"/><img src="img/orangejuice.jfif" width="50%"/><br>
    <div class="col-xs-4"><h4>DALGONA COFFEE</h4>
        <?php if(check_if_added_to_cart(28)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=28" class="btn btn-danger">Rs. 50</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-2"><h4>ORANGE JUICE</h4>
        <?php if(check_if_added_to_cart(29)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=29" class="btn btn-danger">Rs. 40</a> <?php } ?> </div><br>
    </div>
       
    <br><br><div class="one_line"></div><br>
     
    <div class="container">    
    <img src="img/oreo-shake.jpg" width="56%"/><img src="img/pepsi.jpeg" width="44%"/><br>
    <div class="col-xs-4"><h4>OREO SHAKE</h4>
        <?php if(check_if_added_to_cart(30)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=30" class="btn btn-danger">Rs. 90</a> <?php } ?> </div>
    <div class="col-xs-4 col-xs-offset-3"><h4>PEPSI</h4>
        <?php if(check_if_added_to_cart(31)) { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php  }     else  {  ?>
        <a href="cart-add.php?id=31" class="btn btn-danger">Rs. 30</a> <?php } ?> </div><br>
    </div>
    
    <br><br><div class="one_line"></div><br>
            <?php include 'footer.php';?>
    </body>
</html>