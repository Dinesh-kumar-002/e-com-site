<?php

include("connectdb.php");   

    if(isset($_POST['submit'])){
      $product_name= $_POST['p_name'];
      $product_image= $_POST['p_image'];
      $product_price= $_POST['p_price'];
      $product_strike_price= $_POST['p_price_strike'];
      $product_desc= $_POST['p_desc'];
      $sql= "insert into products(product_name,product_image,product_price,product_strike_price,product_decs) values('$product_name','$product_image','$product_price','$product_strike_price','$product_desc')";
      if(mysqli_query($conn,$sql)){
         header("Location:admin.php");
       
      }
     }
  
 ?>  
    