<?php
 include("connectdb.php");
 $sql="select * from products order by product_name ASC";
$products= mysqli_query($conn,$sql);
?>








<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
   <link rel="stylesheet" href="css\bootstrap.min.css">
    
    <title>e-com site</title>
  <style>
body{
    background-size: cover;
    background-image: url('images/background_edited.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
}

.logo{
    border-radius: 50%;
}
    </style>
</head>
<body>
<!-- navigation bar -->
<?php
  include("header.php"); 
  ?>
 
<!-- carousal images -->
<?php 
include("carosal.php");
?>
<div class="scrolltext"><marquee class="text-white" scrollamount=10 ><h3>OFFER OFFER OFFER !!! FISRT 100 CUSTOMERS WILL GET 50% OFF!!!</h3></marquee></div>
<?php if($_SESSION['username']=""){
  echo '';
} 
else{
  $user_name= $_SESSION['username']; 
} ?>
<div class="container product-container">
  <div class="row py-5">
<?php
      while($row=mysqli_fetch_assoc($products)){
      ?>


    <div class="col-6 col-md-3 my-3 my-md-0 " id="product_link">
      <form action="cart_validate.php" method="post">
        <div class="card rounded mt-5">
          <img class="card-img-top products mt-5" src="images/<?php echo $row['product_image']; ?>" alt="Card image cap" height="200px">
          <h4 class="title ps-3" name="product_name"><?php echo $row['product_name']; ?></h4>
          <div class="stars ps-3" >
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>            
          </div>
          <div class="price text-start ps-3">
            <div class="text text-dark d-flex pt-3">
            <?php echo "Rs.".$row['product_price']; ?>
              <small class="text text-secondary ps-4 pt-1"><s><?php echo "Rs.".$row['product_strike_price']; ?></s></small>
            </div>
          </div>
          <div class="addtocart d-flex justify-content-center pb-3 ms-2 me-2 mt-2">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
            <button class="btn btn-success " name="submit" value="submit" >add to cart</button>
            <input type="number" id="quantity" name="quantity" min="1" max="5" value="1" class="border-0 bg-secondary ms-2 rounded">
            
          </div>
        </div>
      </form>
    </div>
    <?php
      }
        ?>


</div>
</div>





<!-- footer part -->
<?php
  include("footer.php");

?>
<script src="js/bootstrap.min.js"></script>
<script src="javascript.js"></script>

</body>
</html>