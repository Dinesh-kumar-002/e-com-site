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
    

        </style>
    
</head>
<?php
include("header2.php");
?>
<div class="pt-5">  
  
<div class="container">  
                <div class="row">  
                    <div class="col-md-5 mx-auto">  
                        <div class="card card-body">  
                      <form id="submitForm" action="admin_login_validate.php" method="post" >  
                      <h1 class="text-center">Admin Login</h1>    
                   <div class="form-group required">  
              <label for="user_name">Admin name </label>  
             <input type="text" class="form-control text-lowercase" id="username" required="" name="user_name" autocomplete=off>  
               </div>                      
       <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" for="password">Admin Password   
    </label>  
<input type="password" class="form-control" required="" id="password" name="password" autocomplete=off>  
       </div>  
       <div class="form-group pt-3 d-flex justify-content-center">  
      <input type="submit" name="submit" class="bg-success text-white" value="login">   
                  </div> 
              </div>  
          
               </form>   
                        </div>  
                    </div>  
                </div>  
            </div>  
</div>  
<?php
include("footer.php");
?>
</body>
</html>