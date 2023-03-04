<?php include("connectdb.php");
    if(isset($_POST['submit'])){
        $p_name= $_POST['product_id'];
        // $p_id= $_POST['product_id'];
        $sql2="insert into cart (product_id) select product_id from products where product_id='$p_name' ";    
        $result2=mysqli_query($conn,$sql2);
        if(mysqli_query($conn,$sql2)){
            echo "inserted";
        
    // $sql="insert into cart(product_name) values('$p_name')";
    // $result=mysqli_query($conn,$sql);
    };
    // }
};


?>
