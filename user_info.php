<?php    
session_start();
    include("connectdb.php");
    if(!isset($_SESSION['username'])){
        
        echo 'you are not logged in';
    }
    else{
        include("header2.php");
        $user_name=$_SESSION['username'];
        $sql1="select * from users where user_email='$user_name'";
        $result1=mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_array($result1)){
            echo '<html>
            <head>
                <title>user_information</title>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>header</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
            </head>
            <body class="container-fluid bg-dark d-flex flex-column justify-content-center w-50 mt-5">
            
                <div class="card mt-5 bg-success">
                <div class="head">
                <h1 class="heading text-white text-center bg-danger">User Information</h1>
                </div>
                
                <p class="card-data text-center">'.$row['user_name'].'</p>
                <p class="card-data text-center">'.$row['user_email'].'</p>
                <p class="card-data text-center">'.$row['user_phone_number'].'</p>
                <p class="card-data text-center">'.$row['user_address'].'</p>
                </div>
                <button class="btn" href="index.php">Go to shop</button>
            </body>
            </html>';
        }
    }
        
      
        // echo $_SESSION['username'];
    // }


  
?>
