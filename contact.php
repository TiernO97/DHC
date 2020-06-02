<?php
 include 'includes/database.php';

 if(!$user->is_loggedin()) {
   header("Location: patient_login.php");
 }

 if(isset($_POST['submit'])) {
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $id = $_SESSION['user_session'];

   $crud->insertContact($name, $email, $number, $message);
 }
?>

<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dundalk Healthcare Centre</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>
 <?php
include 'includes/header.php';

            ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact us
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2346.142597718313!2d-6.3970502848658946!3d53.98249193457239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860cc6f64576231%3A0xf8795d2279981345!2sDublin+Rd%2C+Dundalk%2C+Co.+Louth!5e0!3m2!1sen!2sie!4v1541898207184" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            34 Dublin Road
            <br>Dundalk, County Louth
            <br> Ireland
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (353) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">dundalkhealthcare@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>

      <div class="form-container">
        <form class="form" action="" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Number:</label>
            <input type="text" name="number" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="4" cols="80" class="form-control"></textarea>
          </div>
          <div class="clearfix"></div>
          <input type="submit" name="submit" value="Submit!" class="btn btn-pri">
        </form>
      </div>

    </div>
    <?php
      include 'includes/footer.php';
    ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
