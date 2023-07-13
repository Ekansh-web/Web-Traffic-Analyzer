<nav class="navbar navbar-default" style="background-color: #cb202d; padding : 4px; ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand" style="color: #F1C40F; font-family: Sofia; font-size: 200%">Office Cafeteria</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['email'])) {?>
                    <li><a href="index.php" style="color: #FBFCFC"><span class="glyphicon glyphicon-cutlery"></span> Home</a></li>
                    <li><a href="cart.php" style="color: #FBFCFC"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php" style="color: #FBFCFC"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="log_out.php" style="color: #FBFCFC"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php } else{?>
                    <li><a href="index.php" style="color: #FBFCFC"><span class="glyphicon glyphicon-cutlery"></span> Home</a></li>
                    <li><a href="#"data-toggle="modal" data-target="#loginModal" style="color: #FBFCFC"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="signup.php" style="color: #FBFCFC"><span class="glyphicon glyphicon-user"></span> Create an account</a></li>
                    <?php }?>
                </ul>
              </div>
        </div>
        </nav>