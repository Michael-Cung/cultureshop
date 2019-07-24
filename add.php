<?php
    session_start();
?>

<!DOCTYPE html>
<html>
	<head><title>Add Product</title>
		<link rel="shortcut icon" href="img/umbrella.jpg" />
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
    	
    	<?php
            require 'header.php';
           ?>
           <div  class="container"> 


<div class="col-xs-6 col-xs-offset-3">
           	<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Add product</h3>
                            </div>
                            <div class="panel-body">
    <form action="add_product.php" method="post" class="form" enctype="multipart/form-data">
	<table class="table table-bordered table-striped">
		<tbody>
		<tr>
		<td>ProductName:</td><td><input type="text" class="form-control"  name="pname"></td>
		</tr>
</div>
<div class="form-group">

		<tr>
		<td>Price:</td><td><input type="text" class="form-control" name="price"></td>
		</tr>
</div>
<div class="form-group">

		<tr>
		<td>Picture<td><input type="file" class="form-control-file" name="file" id="file" /></td>
		</tr>
</div>
<div class="form-group">

		<tr>
		<td>Decreption:
         </td><td><textarea name="decreption" class="form-control-area" width="100%"></textarea></td>
		</tr>
</div>
		<div class="form-group">

		<tr>
		<td><input type="submit" class="btn btn-primary" name="submit" value="Submit"></td>
		<td><input type="reset"  class="btn btn-secondary" name="cancel" value="Cancel"></td>
		</tr>

</div>
		</tbody>
		</table>

	</div>
</div>
		</form>

        </div>
		<?php
            require 'footer.php';
           ?>


           </div>
    </body>
</html>
