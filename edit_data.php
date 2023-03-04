<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="0"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Edit Products</title>
    <style>
        .card{
    background-color: rgb(199, 199, 222);
    
}
.main{
    width:100%;
}

.input-group,.btn{
    margin-top: 15px;
}
.btn:hover{
    background-color: white;
    color: black;
}
.card{
    width:35%;
}
body{
    background-size: cover;
    background-image: url('images/background_edited.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
}
@media only screen and (max-width: 420px){
    .card{
        width: 100%;

    }
}
    </style>
</head>
<body>
<?php include("header2.php") ?>
    <!-- php code -->
    <div class="container-fluid ">
        <div class="d-flex justify-content-center align-items-center ">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="d-flex justify-content-center text-success m-3">Edit Product</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="edit.php">
                    <div class="input-group form-group">
                            <input type="text" class="form-control" id="form-control-name" placeholder="p_name_to_be_update" name="p_name_to_be_update" required>   
                        </div>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" id="form-control-name" placeholder="p_name" name="p_name" required>   
                        </div>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" id="form-control-email" placeholder="product image path" name="p_image" required>
                        </div>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" id="form-control-password" placeholder="product price" name="p_price" required>
                        </div>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" id="form-control-phone-number" placeholder="Strike out price" name="p_price_strike" required>   
                        </div>
                        <div class="input-group form-group">
                            <textarea type="text" class="form-control" id="form-control-address" placeholder="product description" name="p_desc"  rows="3" cols="20" style="resize:none;" required></textarea>  
                        </div>
                        <div class="login-button d-flex justify-content-center">
                        <input type="reset" id="reset" class="btn btn-danger" name="Reset">
                            <input type="submit" id="submit" class="btn btn-success ms-2" name="submit" value="EDIT">
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
