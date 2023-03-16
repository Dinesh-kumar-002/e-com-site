<?php include("connectdb.php");
    if(isset($_POST['submit'])){
        $p_id= $_POST['product_id'];

        // $p_id= $_POST['product_id'];
        $sql2="insert into cart (p_id,user_name) values('$p_id','$user_name')";    
        
        if(mysqli_query($conn,$sql2)){
            header("Location:index.php");
            
        
    // $sql="insert into cart(product_name) values('$p_name')";
    // $result=mysqli_query($conn,$sql);
    };
    // }
};


?>

<!-- ,product_name,product_quantity,product_price
,'$p_name','$p_quanity','$p_price' -->
