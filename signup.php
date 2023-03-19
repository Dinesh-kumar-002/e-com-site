<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title>signup</title>
    <style>
        body{
    background-size: cover;
    background-image: url('images/extensive-ecommerce-banner.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
        }
        /* .footer{
          position:absolute;
          width: 100%;
          bottom:0;
        }
        .card{
          background-color:red;
          width:50%;

        }
        .container-main{
          background-color:red;
          margin-top:50px;
          height:300px;
        } */

        .container2{
          width:35%;
          margin:auto;
          margin-top:35px;
          background-color:rgba(0,0,0,0.5);
          height:750px;
          
        }
        
        .form-group input,.form-group textarea{
          border: 0;
          border-bottom:1px solid;
          border-color:white;
          border-radius:0;
  }
  .form-control{
    width:100%;
  }
        @media only screen and (max-width: 520px){
    .container2{
        margin-top:5%;
        width:90%;
    }
  }
  .form-group{
    margin-top:20px;
    width:175%;
    
  }
  

        </style>
</head>
<body>
<?php
include("header2.php");
?>
<div class="container2 d-flex justify-content-center ">
    <form id="myForm" name="myForm" action="signup_validate.php" method="POST" class="d-flex justify-content-center align-items-center flex-column">
       <div class="head">
          <h3 class="heading text text-white">SIGNUP</h3>
      </div>
      <div class="form-group">
          <input type="text"placeholder="Xxxxxx yyyy"  class="form-control text-lowercase bg-transparent text-white" id="username" required name="user_name" autocomplete=on>  
      </div>
      <div class="form-group">
          <input type="email" placeholder="xx123@gmail.com" class="form-control text-lowercase bg-transparent text-white" id="useremail" required name="user_email" autocomplete=on>  
      </div>
      <div class="form-group">
          <input type="password" placeholder="Xxxy@123" class="form-control text-lowercase bg-transparent text-white" id="userpassword" required name="user_password" autocomplete=off>  
      </div> 
      <div class="form-group"> 
           <input type="password" placeholder="Xxxy@123" class="form-control text-lowercase bg-transparent text-white" id="userpassword2" required name="user_password2" autocomplete=off>  
      </div>
      <div class="form-group">
            <input type="number" placeholder="123123171" class="form-control text-lowercase bg-transparent text-white" id="userphonenumber" required name="user_phone_number" autocomplete=off maxlength="10">  
     </div>
     <div class="form-group">  
            <textarea placeholder="house:no/street/city/state." class="form-control text-lowercase bg-transparent text-white" id="useraddress" required name="user_address" autocomplete=on></textarea>  
     </div> 
      <div class="submit d-flex w-75justify-content-center mt-3" >
          <button type="submit" name="submit" class="bg-transparent btn btn-outline-light rounded-0 text-white " >SIGNUP</button>
      </div>
      <div class="login">
          <p class="px-3 text-center pt-3"><span class="text-white"> already a member </span><a href="login.php"> login</a></p>
      </div>
    </form>
</div>

<div class="footer">
<?php
include("footer.php");
?>
</div>
<script type="text/javascript">
   var cursor=document.myForm.username.focus();
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
