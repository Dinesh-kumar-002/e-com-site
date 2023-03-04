<?php
    include("connectdb.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        
            body{
            background-image: url("images/background_edited.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            overflow-x:hidden;
            overflow-y:hidden;
        }

    </style>
    </head>

<body >
    <?php
    include("header2.php");
    ?>
    <div class="pt-5">  
<div class="container">  
                <div class="row">  
                    <div class="col-md-5 mx-auto">  
                        <div class="card card-body">  
                        <div class="header">
                            <h3 class="text d-flex justify-content-center" >ADMIN</h3>
                        </div>
                        <div class="d-flex justify-content-center flex-column">
  <button type="button" class="btn btn-dark mt-3" onclick="window.location.href='insert_data.php';">INSERT</button>
  <button type="button" class="btn btn-dark mt-3" onclick="window.location.href='edit_data.php';">EDIT</button>
  <button type="button" class="btn btn-dark mt-3" onclick="window.location.href='delete_data.php';">DELETE</button>
        </div>
             
                        </div>  
                    </div>  
                </div>  
            </div>  
</div> 
    
       
            
    <script src="javascript.js"></script>
</body>
</html>