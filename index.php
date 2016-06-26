<?php
require_once 'core/init.php';

$sql="SELECT * FROM tbl_products where featured =1";
$featured=$db->query($sql);
 ?>

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


  <?php

  $sql = "SELECT * FROM categories where parent = 0";
  $pquery = $db -> query($sql);

  ?>
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
    <a href="/tutorial/Prueba-Web-en-PHP/index.php" class="navbar-brand" id="text">Red Stone Shop </a>

    <ul class="nav navbar-nav">

      <?php while ($parent=mysqli_fetch_assoc($pquery)):
        # code...

      ?>

      <?php
      $parent_id =$parent['id'];
      $sql2="SELECT * FROM categories WHERE parent='$parent_id'";
      $cquery=$db->query($sql2);

       ?>
  <!--Drop down menu  -->
  <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text"><?php echo $parent['category'] ?><span class="caret"> </span></a>
<ul class="dropdown-menu" role="menu">

  <?php while($child=mysqli_fetch_assoc($cquery)): ?>
  <li><a href="#"><?php echo $child['category']; ?></a></li>
<?php endwhile; ?>



</ul>
  </li>
<?php endwhile; ?>
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
      <?php while ($product=mysqli_fetch_assoc($featured)): ?>

            <h4><?= $product['title']; ?></h4>
      <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" id="images"/>
      <p class="list-price text-danger"> List Price: <s><?= $product['list_price']; ?></s></p>
      <p class="price">Our Price : <?= $product['price']; ?></p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $product['featured']; ?>">Details</button>

    </div>
  <?php endwhile; ?>
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
