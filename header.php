<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <a href="index.php" class="navbar-brand" style="color:white;font-size: 25px;">Culture Shop</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                      
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <?php
        $sessionemail=$_SESSION['email'];
        $sessionid=$_SESSION['id'];
        $sessiontype=$_SESSION['usertype'];?>
        <li style="color: white;"><?php echo $sessiontype;?></li>
      <li style="color: white;"> <?php echo $sessionid;?></li>
        <li style="color: white;"><?php echo $sessionemail;?></li>
                           <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Shop</a></li>
                           <li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Menu</a>
                            <ul class="dropdown-menu">
                              
                              <?php
                                if ($sessiontype=="customer") {
                              ?>
                              <li><a href="vieworder.php">View Order</a></li>
                              <?php } ?>
                              <?php 
                              if ($sessiontype=="owner") {
                              ?>
                              <li><a href="add.php">Add product</a></li>
                              <li><a href="viewproduct.php">Update product</a></li>
                              <li><a href="delete.php">Delete product</a></li>
                              <?php }
                              ?>
                            </ul>
                           </li>
                           <?php
                                if ($sessiontype=="customer") {
                              ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <?php }
                              ?>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="index.php">Home</a></li>
                             <li><a href="products.php">Shop</a></li>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
             </nav>