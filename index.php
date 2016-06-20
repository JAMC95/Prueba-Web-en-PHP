<!DOCTYPE html>


<html>
<head>
  <title>Red Stone Shop </title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    </script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
    <a href="/tutorial/index.php" class="navbar-brand" id="text">Red Stone Shop </a>

    <ul class="nav navbar-nav">
  <!--Drop down menu  -->
  <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"> </span></a>
<ul class="dropdown-menu" role="menu">
  <li><a href="#">Shirts</a></li>
  <li><a href="#">Pants</a></li>
  <li><a href="#">Shoes</a></li>
  <li><a href="#">Accessories</a></li>


</ul>
  </li>

    </ul>
  </div>
  </nav>
<!--Insertar imagenes -->

<div id="background-image">
  <div id="image-1"> </div>
  <div id="image-2"> </div>


</div>
<div class="col-md-2"> </div>
<!--main content. productos -->
<div class="col-md-8">
  <div class="row">
    <h2 class="text-center"> Featured Products</h2>
    <div class="col-md-3">
      <h4>Levis Jeans</h4>
      <img src="images/levis.jpg" alt="Levis Jeans" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $24.99</s></p>
      <p class="price">Our Price : $19.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>

    </div>

    <div class="col-md-3">
      <h4>Adidas Football</h4>
      <img src="images/adidas.png" alt="Balon adidas" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $39.99</s></p>
      <p class="price">Our Price : $29.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>

    </div>

    <div class="col-md-3">
      <h4>Watch</h4>
      <img src="images/reloj.jpg" alt="Relojeria" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $20.99</s></p>
      <p class="price">Our Price : $9.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>

    </div>
    <div class="col-md-3">
      <h4>Polo Shirt</h4>
      <img src="images/polo.jpg" alt="Polo" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $21.99</s></p>
      <p class="price">Our Price : $15.00</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>

    </div>

    <div class="col-md-3">
      <h4>Purse</h4>
      <img src="images/bolso.jpg" alt="Bolso" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $24.99</s></p>
      <p class="price">Our Price : $19.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>

    </div>
    <div class="col-md-3">
      <h4>Hoodie</h4>
      <img src="images/hoodie.jpg" alt="Sudadera" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $12.99</s></p>
      <p class="price">Our Price : $7.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>

    </div>

    <div class="col-md-3">
      <h4>Head Band</h4>
      <img src="images/headband.jpg" alt="Banda para cabeza" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $6.99</s></p>
      <p class="price">Our Price : $3.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>

    </div>
    <div class="col-md-3">
      <h4>Skechers for running</h4>
      <img src="images/zapatillas.jpg" alt="Zapatillas de deporte" id="images"/>
      <p class="list-price text-danger"> List Price: <s> $70.99</s></p>
      <p class="price">Our Price : $39.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>

    </div>

  </div>




<footer class="text-center" id="footer">
&copy; Copyright 2016-2017 Red Stone Shop
</footer>
</div>


<!--details modal -->

<?php
include 'details-modal-LevisJeans.php';
include 'details-modal-balon.php';
include 'details-modal-reloj.php';
include 'details-modal-polo.php';
include 'details-modal-bolso.php';
include 'details-modal-sudadera.php';
include 'details-modal-banda.php';
include 'details-modal-zapatillas.php';

?>


</body>

</html>
