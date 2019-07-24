<?php
    require 'connection.php';
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/toy.jpg" />
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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Culture Shop!</h1>
                    <p>We have the best culture product for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                        $result=mysqli_query($con,"select productid,name,picture,price from product where isconfirm='1'") or die(mysqli_error($con));
                            $no_of_products= mysqli_num_rows($result);
                            if($no_of_products==0){
                                ?>
                                <script>
                                    window.alert("Items not available");
                                </script>
                                <?php
                                 }else{
                                    while ($row=mysqli_fetch_array($result)) {                                                                    ?> 
                                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/<?php echo $row['picture']?>"  height="100px" width="100px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><?php echo $row['name']?></h3>
                                    <p>Price: Ks.<?php echo $row['price']?></p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button"  class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart($row['productid']) || $sessiontype=="owner"){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=<?php echo $row['productid']?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary" name="<?php echo $row[productid]?>">Add to cart</a>
                                                <?php
                                            }
                                        }


                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <?php
                    }

                                }
                                ?>
                                 </div>
            </div>
            <br><br><br><br><br><br><br><br>
            <?php
            require 'footer.php';
           ?>
        </div>
    </body>
</html>
