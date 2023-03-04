<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success sticky-top">
  <div class="container-fluid m-3">
    <a class="navbar-brand text-light" href="index.php">E-com site</a>
    <div>
      <span class="material-symbols-outlined pt-2 rounded cart-logo">
        <a href="#" class="logo  text-decoration-none p-2 rounded cart-anchor text-white">shopping_cart</a>
        </span>
      <button class="navbar-toggler btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">   
        <span class="material-symbols-outlined bg-light rounded p-1">
          menu
          </span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"></a></li>
            <a class="nav-link active text-success home " aria-current="page" href="login.php">Home</a>
            <a class="nav-link text-success shop " href=".card">Shop</a>
          </ul>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-light" type="search">Search</button>
      </form> -->
      <button type="button" class="btn btn-success me-2 logout btn-outline-light"><a href="logout.php" class="text-light text-decoration-none ">logout</a></button>
    </div>
  </div>
</nav>
<!-- <nav class="navbar bg-success">
  <div class="container-fluid">
    <a class="navbar-brand text-white">Navbar</a>
      
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light text-dark" type="submit">Search</button>
    </form>
  </div>
</nav> -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>