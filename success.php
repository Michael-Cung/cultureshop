<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_SESSION['id'];
        $total_price=$_GET['sum'];
        $date=date('Y-m-d H:i:s');



        $set_order_query="insert into orderline (customerid,totalprice,orderdate) values ($user_id,'$total_price','$date')";
        mysqli_query($con,$set_order_query)  or die(mysqli_error($con));
        $orderidquery="select orderid from orderline where orderdate='$date'";
               $orderidresult= mysqli_query($con,$orderidquery)  or die(mysqli_error($con));
                $row=mysqli_fetch_array($orderidresult);
                $oid=$row['orderid'];

         $order_item_query="select productid from cart where userid='$user_id'";
         $item_result=mysqli_query($con,$order_item_query)  or die(mysqli_error($con));


            while($rows=mysqli_fetch_array($item_result)){
$pid=$rows['productid'];
                $query="insert into orderdetail(orderid,productid) values ($oid,$pid)";
                mysqli_query($con,$query)  or die(mysqli_error($con));


                $delete_query="delete from cart where userid='$user_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    //header('location: products.php');
       }
        
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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to order any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require 'footer.php';
           ?>
        </div>
    </body>
</html>
