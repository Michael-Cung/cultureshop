<!DOCTYPE html>
<html>
	<head><title>Culture Shop(Update) </title>
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

    <body bgcolor="#999999">
    	<?php
    	session_start();
            require 'header.php';
           ?>
    <form action="" method="post">
	<table border="1" width="90%" height="100%" style="margin:0 auto; background-color: #e6e6fa">
    	
    	<tr height="60%">
   		<td align="center">
		
		<font color="blueviolet"><h2>Update Form</h2></font>
		<table>
		<tr>
			<td>Product Name:</td>
			<td><input type="textarea" name="address"></td>
		</tr>
		<tr>
			<td>Price:</td>
			<td><input type="text" name="phno"></td>
		</tr>
		<tr>
			<td>Decreption:</td>
			<td><textarea name="address" width="100%"></textarea></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="update" value="Update">
			</td>
			<td>
				<input type="reset" name="cancel" value="Cancel">
			</td>
		</tr>
		</table>
		
		</td>
    
    	</tr>
    </table>
	</form>
	<?php 
		include("footer.php");
		?>
    </body>
</html>
