<?php
  include 'includes/database.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dundalk Healthcare Centre </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <?php
      include 'includes/header.php';
    ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Admin Login
        <small>login</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Staff lOGIN</li>
      </ol>

      <div class="row">
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100 staff" id="clickable">
              <img class="card-img-top" src="img/a.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title text-center">Staff Login</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item" >
          <div class="card h-100 admin" id="clickable">
            <img class="card-img-top" src="img/s0.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Admin Login</h4>
            </div>
          </div>
        </div>
        </div>
    </div>>

      <!-- /.row -->
 <?php
      include 'includes/footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="vendor/jquery/main.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
