<?php
session_start();
if(isset($_POST['product_id'])) {
  $product_id = $_POST['product_id'];
  // Add product to cart
  $_SESSION['cart'][] = $product_id;
}
header("Location: index.php"); // Redirect to product listing page
?>    






<?php 
include("connectdb.php");
    if (isset($_POST["submit"])) {
        $email = $_POST['user_name'];
        $password =$_POST['password'];
    
        $sql="select * from users where user_email='$email' && user_password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
             header("Location:index.php");
        }
        else{
            header("location:login.php");
        }
    }

?>
