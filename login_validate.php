<?php 


session_start();
$_SESSION['username'] = "";
include('connectdb.php');
    if (isset($_POST["submit"])) {
        
        $email = $_POST['user_name'];
        $password =$_POST['password'];
        $sql="select * from users where user_email='$email' && user_password='$password'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0){
            $_SESSION['username'] = $email;
            sleep(2);
            header("Location:index.php");
            echo '<scrpit>
            window.alert("successfully logged in..");
            </script>';
            
        }
        else{
            header("location:login.php");
        }
        
    }
    

?>
