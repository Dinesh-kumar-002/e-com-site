<?php include("connectdb.php");
        if(isset($_POST['submit'])){
            $p_id= $_POST['product_id'];
            $p_name=$_POST['product_name'];
            $p_quantity=$_POST['quantity'];
            $p_price= $_POST['p_price'];
            // $user_name= $_SESSION["username"];
            $sql2="insert into cart (p_id,p_name,p_quantity,p_price) values('$p_id','$p_name','$p_quantity','$p_price')";    
            
            if(!(mysqli_query($conn,$sql2))){
                // header("Location:index.php");
                echo '<script>';
                echo 'window.alert("login to buy")';
                echo '</script>';
            
        // $sql="insert into cart(product_name) values('$p_name')";
        // $result=mysqli_query($conn,$sql);
        };
        // }
    };
       
    


?>

<!-- ,product_name,product_quantity,product_price
,'$p_name','$p_quanity','$p_price' -->
