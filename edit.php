<?php
include("connectdb.php");
   

    if(isset($_POST['submit'])){
      $p_name_to_be_update= $_POST['p_name_to_be_update'];
      $p_name= $_POST['p_name'];
      $p_image= $_POST['p_image'];
      $p_price= $_POST['p_price'];
      $p_price_strike= $_POST['p_price_strike'];
      $p_desc= $_POST['p_desc'];
      $sqli= "update products set product_name='$p_name',product_image='$p_image',product_price='$p_price',product_strike_price='$p_price_strike',product_decs='$p_desc' where product_name='$p_name_to_be_update'";
      if(mysqli_query($conn,$sqli)){
         header("Location:admin.php");
       
      }
     }
  
 ?>  