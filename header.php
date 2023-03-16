<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
          overflow-x:hidden;
        }
        .user_logo{
          cursor: pointer;
        }
        .email{
          cursor:not-allowed;
          user-select:none;
        }
      </style>
  
</head>
<body>
<nav class="bg-dark p-2">
<div class="container d-flex justify-content-between">
<div class="title d-flex justify-content-between">
<a class="navbar-brand" href="#">
      <img class="logo" src="images/favicon.ico" alt="" width="40" height="40">
    </a>
<a class="navbar-brand text-decoration-none text-white" href="#">e-com site</a>
<a class="navbar-brand" href="cart_info.php">
      <img class="logo ms-2 p-1 bg-white rounded-circle pe-2" src="images\icons8-shopping-cart-50.png" alt="cart_image" width="40" height="40">
       </a>

</div>
<div class="links">
    <ul class="list-unstyled d-flex px-3 ">
    
    <?php 
    if(!isset($_SESSION['username'])){
     echo '<a class="user_logo ms-2 px-3 py-1 bg-success rounded text-decoration-none text-white" href="login.php">'. "login".'</a>';
      }
      else{
        echo '<p class="text text-white me-3">'.'welcome'.'</p>'.'<a class="user_logo ms-2 p-2 py-0 fs-4 bg-success rounded-circle text-decoration-none text-white" onclick="user_info()">'. strtoupper($_SESSION["username"][0]) .'</a>'  ;
        echo '<form class="d-flex" action="logout.php" method="POST">';
        echo '<input type="submit" name="submit" value="logout" class="bg-success rounded mx-3">'; 
        echo '</form>';
      }
        
        ?>
        
        
      
      
      <li class="text text-white px-3 me-4"><a href="#product_link" class="link text-white text-decoration-none">shop</a></li>
      <li class="text text-white px-3 me-4"><a href="aboutus2.php" class="link text-white text-decoration-none">Aboutus</a></li>
      <!-- <li class="text text-white px-3"><button class="btn btn-danger"><a href="logout.php" class="text-decoration-none text-white">logout</a></button></li> -->
    </ul>
  </div>
  </div>
  
</nav>
</body>

  <script src="js/bootstrap.min.js"></script>
  <script>
    function user_info(){
      window.alert("<?php echo 'logged in as  '. $_SESSION["username"]; ?>");
    
    }

  </script>
</html>