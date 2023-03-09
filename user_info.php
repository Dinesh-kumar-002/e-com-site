<?php
session_start();

    include("connectdb.php");
    include("header.php");
    $sql="select * from users where user_email='$_SESSION['username']'";
    $result=mysqli_query($conn,$sql);
    
?>
<?php
    while($row=mysqli_fetch_assoc($result)){

?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/carrot.jpg" height="200" width="300" alt="Card image cap">
  <div class="card-body d-flex justify-content_center align-items-center flex-column">
    <h2 class="card-title font-weight-bold"><?php echo $row['user_name']; ?></h2>
    <p class="card-text"><?php echo $row['user_address']; ?></p>
    <p class="font-weight-bold"><?php echo $row['user_phone_number']; ?></p>
    <a href="logout.php" class="btn btn-primary">logout</a>
  </div>
</div>
<?php 
    }
?>