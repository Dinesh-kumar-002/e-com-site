<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title>Login</title>
    <style>
        body{
          
    background-size: cover;
    background-image: url('images/extensive-ecommerce-banner.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
        .container2{
          width:35%;
          height:400px;
          margin:auto;
          margin-top:200px;
          background-color:rgba(0,0,0,0.5);
          padding:0 15px;
          
        }
        .input-email input,.input-password input{
          border: 0;
          border-bottom:1px solid;
          border-color:white;
          border-radius:0;
          
        }
        .input-email,.input-password{
          padding:10px 50px;
        }
        
        @media only screen and (max-width: 520px){
    .container2{
        width: 90%;
        height:450px;
        margin-top:100px;

    }
    .footer{
      margin-top:150px;
    }
  }
        
      </style>
</head>
<body>

<?php
  include("header2.php");
?>
<div class="container2 d-flex flex-column justify-content-center ">
<form id="myForm" name="myForm" action="login_validate.php" method="POST" >

  <div class="head d-flex justify-content-center">
  <h3 class="heading text text-white">LOGIN</h3>
  </div>
  <div class="input-fields">
  <div class="input-email">
  <input type="text" class="form-control text-lowercase bg-transparent text-white" id="username" required placeholder="xyz@gmail.com"  name="user_name" autocomplete=off>
</div>
<div class="input-password">
<input type="password" class="form-control bg-transparent text-white " required placeholder="XYZxyz@13127" id="password" name="password" autpcomplete=off>
</div>
  </div>
<div class="submit d-flex justify-content-center mt-3" >
<button type="submit" name="submit" class="bg-transparent btn btn-outline-light rounded-0 text-white px-3 w-75 pt-2 pb-2" >LOGIN</button>
</div>
<div class="signup">
<p class="px-3 text-center pt-3">  
       <span class="text-white"> not a member? </span>  
        <a href="signup.php"> sign up</a>  
                        </p>
</div>
      


      </form>
      </div>
             
<div class="footer">
<?php
include("footer.php");
?>
</div>
<script>
  var cursor=document.myForm.user_name.focus();
</script>
<script src="javascript.js"></script> 
</body>
</html>
