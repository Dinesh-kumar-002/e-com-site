<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carosal</title>
    <style>
        @media only screen and(max-width:520px) {
            .banner{
            height:20px !important;
            width:100%;
                }
            
        }
        
        </style>
</head>
<body>
<div class="container-fluid mt-3 mb-3">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active banner1">
        <img src="images/banner4_edited.jpg" class="banner" alt="banner">
      </div>
      <div class="carousel-item">
        <img src="images/banner4_edited.jpg" class="banner" alt="banner">
      </div>
      <div class="carousel-item">
        <img src="images/banner4_edited.jpg" class="banner" alt="banner">
      </div>
      <div class="carousel-item">
        <img src="images/banner4_edited.jpg" class="banner" alt="banner">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
</body>
</html>