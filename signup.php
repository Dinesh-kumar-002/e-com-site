<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
        
    background-size: cover;
    background-image: url('images/background_edited.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
        }
    

        </style>
</head>
<body>
<?php
include("header2.php");
?>
<div class="pt-5">  
    
<div class="container">  
                <div class="row">  
                    <div class="col-md-5 mx-auto">  
                        <div class="card card-body">  
                      <form id="submitForm" name="signup" action="signup_validate.php" method="post" onsubmit="return validatePassword()">  
                      <h1 class="text-center">Signup</h1>  
                   <div class="form-group required">  
              <label for="user_name"> Enter your Name </label>  
             <input type="text" class="form-control text-lowercase" id="username" required name="user_name" autocomplete=on>  
               </div>
               <div class="form-group required">  
              <label for="user_email"> Enter your Email </label>  
             <input type="email" class="form-control text-lowercase" id="useremail" required name="user_email" autocomplete=on>  
               </div>
               <div class="form-group required">  
              <label for="user_password"> create password</label>  
             <input type="password" class="form-control text-lowercase" id="userpassword" required name="user_password" autocomplete=off>  
               </div> 
               <div class="form-group required">  
              <label for="user_password"> confirm password</label>  
             <input type="password" class="form-control text-lowercase" id="userpassword2" required name="user_password2" autocomplete=off>  
               </div>
               <div class="form-group required">  
              <label for="user_phone_number"> Enter phone number</label>  
             <input type="number" class="form-control text-lowercase" id="userphonenumber" required name="user_phone_number" autocomplete=off maxlength="10">  
               </div>
               <div class="form-group required">  
              <label for="user_address">Enter address</label>  
             <textarea class="form-control text-lowercase" id="useraddress" required name="user_address" autocomplete=on></textarea>  
               </div>                     
         
       <div class="form-group pt-3 d-flex justify-content-center">  
        <input type="submit" name="submit" class="bg-success text-white" >
              </div>  
          
               </form>  
             <p class="small-xl pt-3 text-center">  
       <span class="text-muted"> already a member? </span>  
        <a href="login.php"> login </a>  
                        </p>  
                        </div>  
                    </div>  
                </div>  
            </div>  
</div>  
<?php
include("footer.php");
?>
<script type="text/javascript">
function validatePassword(){
  var phone_validate= document.forms["signup"]["user_phone_number"].value.length;
  var pass1=document.forms["signup"]["user_password"].value;
  var pass2=document.forms["signup"]["user_password2"].value;
  if(phone_validate>10 && phone_validate<10){
    window.alert("Enter valid phonenumber");
    return false;
  }
  if(pass1!=pass2){
      window.alert("password mismatch");
      return false;
    }
  
  }
       
</script>
</body>
</html>
