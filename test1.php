<!DOCTYPE html>
<html>
<head>
	<title>test1</title>
</head>
<body>
	<?php
    require 'connection.php';
    session_start();
   $result=mysqli_query($con,"select picture from product where productid='6'") or die(mysqli_error($con));

   $row=mysqli_fetch_array($result);
?> 
<img src="img/<?php echo $row['picture']?>" height="100px" width="100px">
</body>
</html>