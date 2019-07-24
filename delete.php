<!DOCTYPE html>
<html>
<head><title>CultureShow Case(Delete)</title>
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
            require 'header.php';
           ?>
<form action="Deleteform_info.php" method="post">
<table border="1"  width="90%" height="100%" style="margin:0 auto; background-color: #e6e6fa;border-color:blueviolet;">
    	
    <tr height="60%">
       <td align="center" >
	<font color="blueviolet"><h2>Delete Form</h2></font>
	<table >
	<tr>
                    <td>Product Name:</td>
	 <td> <input type="text" name="delete"> </td>
	     </tr>
	     <tr>
	     <td colspan="2"><input type="submit" name="update" value="Delete">
		<input type="reset" name="cancel" value="Cancel"></td>
		 </tr>
	
</form>
<?php
            require 'footer.php';
           ?>
</body>
</html>
