<?php
    require 'connection.php';
    session_start();
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />

        <?php
    }


    
    if(isset($_POST['customer'])){
    $user_authentication_query="select email,customerid from customer where email='$email' and password='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    echo $rows_fetched;
   if($rows_fetched==0){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
        //header('location: login');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['customerid'];
        $_SESSION['usertype']="customer";
       header('location: index.php');
    }
}
 if(isset($_POST['owner'])){
   $owner_authentication_query="select password,ownerid from owner where email='$email' and password='$password'";
    $owner_authentication_result=mysqli_query($con,$owner_authentication_query) or die(mysqli_error($con));
    $owner_rows_fetched=mysqli_num_rows($owner_authentication_result);
   if($owner_rows_fetched==0){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
        //header('location: login.php');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($owner_authentication_result);
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['ownerid'];
        $_SESSION['usertype']="owner"; 
        header('location: index.php');
    }
}
    
 ?>