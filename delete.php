<?php
include("connectdb.php");
   

    if(isset($_POST['submit'])){
        
     
      $sqli= "delete from products where product_name='$p_name'";
      if(mysqli_query($conn,$sqli)){

         header("Location:admin.php");
       
      }
     }
  
 ?>  