<?php
    require_once("connectdb.php");
    $username = $_POST['user_name'];
    $userpassword = $_POST['user_password'];
    $useremail = $_POST['user_email'];
    $userphonenumber = $_POST['user_phone_number'];
    $useraddress = $_POST['user_address'];

    $sql="insert into users(user_name,user_email,user_password,user_phone_number,user_address) values('$username','$useremail','$userpassword','$userphonenumber','$useraddress')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:index.php");
    }
    die('error');
   

    

   


?>


