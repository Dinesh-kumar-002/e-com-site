<?php 
    session_start(); 
    include("connectdb.php");
    $_SESSION['cart']="";
          
                if(isset($_POST['submit'])){
                    $_SESSION['cart']="myproduct";
                    $p_id= $_POST['product_id'];
                    $sql_query="select * from products where product_id=$p_id";
                    $result=mysqli_query($conn,$sql_query);
                    $rows=mysqli_fetch_assoc($result);
            }
        
?>
<?php


?>
<?php 
    include("headerforcart.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

body {
  font-family: 'Manrope', sans-serif;
  background-size: cover;
    background-image: url('images/extensive-ecommerce-banner.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
}

.size span {
  font-size: 11px;
}

.color span {
  font-size: 11px;
}

.product-deta {
  margin-right: 70px;
}

.gift-card:focus {
  box-shadow: none;
}

.pay-button {
  color: #fff;
}

.pay-button:hover {
  color: #fff;
}

.pay-button:focus {
  color: #fff;
  box-shadow: none;
}

.text-grey {
  color: #a39f9f;
}

.qty i {
  font-size: 11px;
}
    @media only screen and (max-width: 520px){
    .pay-button,.button_pay{
        width: 100% !important;

    }
    
}
    </style>
</head>
<body style="background-color:gray" >


<div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <?php if(!isset($_SESSION['username'])){
                          echo 
                          strtoupper("loggin to buy");
                        }
                        else{
                          '<h4>'.trim($_SESSION["username"],"@gmail.com").'s'." cart".'</h4>';
                        }
                        ?>
                          
                        
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                       <div class="mr-1"><img class="rounded" src="images/<?php echo $rows['product_image']; ?>" width="70"></div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold"><?php echo $rows["product_name"]; ?></span>
                            <div class="d-flex flex-row product-desc">
                                <div class="size mr-1"><span class="text-grey">price:</span><span class="font-weight-bold"><?php echo $rows["product_price"]; ?></span></div>  
                                <div class="color"><span class="text-grey">quantity:</span><span class="font-weight-bold"><?php echo $_POST["quantity"]; ?></span></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                    </div>
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="number" class="form-control w-100" placeholder='<?php echo $rows["product_price"]*$_POST["quantity"];?>' disabled><button class="btn btn-outline-danger btn-sm ml-2" type="button">delete</button></div>
                    

                </div>
            </div>
        </div>
        <div class="container-fluid mt-4">
        <div class="d-flex flex-column align-items-center p-2 bg-white rounded w-25 button_pay m-auto"><button class="btn btn-success btn-block btn-lg pay-button w-100" type="button">Proceed to Pay</button></div>
</div>
        
        
</body>
</html>
