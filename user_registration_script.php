<?php
    require 'connection.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $phone=$_POST['phone'];
    $address=mysqli_real_escape_string($con,$_POST['address']);


    if(isset($_POST['customer'])){
    $duplicate_user_query="select customerid from customer where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into customer(name,email,password,phno,address) values ('$name','$email','$password','$phone','$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        ?>
        <script>
            window.alert("Registration is successfully.");
        </script>        
        <?php
        $create_customer_query="select customerid from customer where email='$email'";
        $create_customer_result=mysqli_query($con,$create_customer_query) or die(mysqli_error($con));
        $row_customer=mysqli_fetch_array($create_customer_result);
         $_SESSION['email']=$email;
        $_SESSION['id']=$row_customer['customerid'];
        $_SESSION['usertype']="customer"; 
        //header('location: products.php');
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
}
  if(isset($_POST['owner'])){
    
    $duplicate_owner_query="select ownerid from owner where email='$email'";
    $duplicate_owner_result=mysqli_query($con,$duplicate_owner_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_owner_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $owner_registration_query="insert into owner(name,email,password,phone,address) values ('$name','$email','$password','$phone','$address')";
        //die($user_registration_query);
        $owner_registration_result=mysqli_query($con,$owner_registration_query) or die(mysqli_error($con));
        ?>
        <script>
            window.alert("Registration is successfully.");
        </script>        
        <?php
        $create_owner_query="select ownerid from owner where email='$email'";
        $create_owner_result=mysqli_query($con,$create_owner_query) or die(mysqli_error($con));
        $row_owner=mysqli_fetch_array($create_owner_result);
         $_SESSION['email']=$email;
        $_SESSION['id']=$row_owner['ownerid'];
        $_SESSION['usertype']="owner";
        //header('location: products.php');
        ?>
        <meta http-equiv="refresh" content="3;url=index.php" />
        <?php
    }
}?>