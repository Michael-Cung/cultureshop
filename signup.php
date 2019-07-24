<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Culture Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body style="background:url(img/edit.jpg);">
        <div>
            <?php
                require 'header.php';
            ?>

            <br><br>
        
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Sign Up</h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(at least 6 characters)" required="true" pattern=".{6,}">

                             </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="phone" placeholder="Phone number" required="true">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign up as customer" class="btn btn-primary" name="customer">
                                <input type="submit" value="Sign up as owner" class="btn btn-primary" name="owner">
                                <input type="reset" value="Cancel" class="btn btn-light">
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <br><br><br><br><br><br>
           <?php
            require 'footer.php';
           ?>

        </div>
    </body>
</html>
