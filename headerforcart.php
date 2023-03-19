
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');
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
        .link:hover{
          background-color:#9fe288;
          color:black !important;
        }
        .navbar{
          position:sticky;
          top:0;
          z-index:3;
        }

        
      </style>
  
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark position-sticky">
<!-- <a class="navbar-brand " href="#"><img class="logo rounded-circle" src="images/favicon.ico" alt="" width="40" height="40"></a> -->

<a class="navbar-brand text-decoration-none text-white" href="#">e-com site</a>

<?php 
    if(!isset($_SESSION['username'])){
     echo '<a class="user_logo ms-2 px-3 py-1 bg-success rounded text-decoration-none text-white d-flex justify-content-center" href="login.php">'. "login".'</a>';
      }
      else{
        echo '<a class="user_logo ms-2 p-2 py-0 fs-4 bg-success rounded-circle text-decoration-none text-white" onclick="user_info()">'. strtoupper($_SESSION["username"][0]) .'</a>'  ;
        echo '<form class="d-flex" action="logout.php" method="POST">';
        echo '<input type="submit" name="submit" value="logout" class="bg-success rounded mx-3">'; 
        echo '</form>';
      }
        
        ?>
  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav list-unstyled d-flex px-3">
     
      <li class="text px-3"><a href="aboutus2.php" class="link text-white text-decoration-none w-100 d-flex justify-content-center ">Aboutus</a></li>    
    </ul>
  </div>  
</nav>
<script src="js/bootstrap.min.js"></script>
  <script>
    function user_info(){
      window.alert("<?php echo 'logged in as  '. $_SESSION["username"]; ?>");
    
    }

  </script>
</body>

  
 
</html>