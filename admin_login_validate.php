<?php 
include("connectdb.php");

    if (isset($_POST["submit"])) {
        $name = $_POST['user_name'];
        $password =$_POST['password'];
    
        $sql="select * from admin where admin_name='$name' && admin_password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            header("Location:admin.php");
        }
        else{
            
            header("location:admin_login.php");
        }
    }

?>
