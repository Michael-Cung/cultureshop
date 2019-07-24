<?php
    require 'connection.php';
    session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
move_uploaded_file($_FILES["file"]["tmp_name"],"img/".$_FILES["file"]["name"]);
$pname=$_POST['pname'];
$price=$_POST['price'];
$decreption=$_POST['decreption'];
$picture=$_FILES["file"]["name"];
$user_id=$_SESSION['id'];
$result=mysqli_query($con,"insert into product(name,price,description,ownerid,picture) values ('$pname','$price','$decreption',$user_id,'$picture')") or die(mysqli_error($con));
header('location: index.php');
?>
</body>
</html>