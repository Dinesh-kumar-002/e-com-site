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
    background-image: url('images/background_edited.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
}
        .card{
            background-color: rgb(199, 199, 222);
        }
        #loading-animation {
  display: none;
  /* Add any other styles you like */
}
.spinner {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 3px solid rgba(0, 0, 0, 0.2);
  border-top-color: #3498db;
  animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to { transform: rotate(360deg); }
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
                      <form id="myForm" action="login_validate.php" method="post" >  
                      <h1 class="text-center">Login</h1>  
                   <div class="form-group required">  
              <label for="user_name">Email </label>  
             <input type="text" class="form-control text-lowercase" id="username" required="" name="user_name" autocomplete=off>  
               </div> 
               
               <div id="loading-animation">
                  <div class="spinner"></div>
              </div>
                    
       <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" for="password">Password   
    </label>  
<input type="password" class="form-control" required="" id="password" name="password" autpcomplete=off>  
       </div>  
       <div class="form-group pt-3 d-flex justify-content-center">  
      <input type="submit" name="submit" class="bg-success text-white px-3" value="login" >  
         
                  </div> 
                  <p class="px-3 text-center pt-3">  
       <span class="text-muted"> not a member? </span>  
        <a href="signup.php"> sign up</a>  
                        </p>
              
          
               </form>  
             
                        </div>  
                    </div>  
                </div>  
            </div>  
</div>  

<?php
include("footer.php");
?>
<script src="javascript.js"></script> 
</body>
</html>
