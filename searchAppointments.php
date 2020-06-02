<?php
   include 'includes/database.php';
?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
      <meta name="author" content="">
      <title>Dundalk Healthcare Centre</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/blog.css" rel="stylesheet" type="text/css"/>
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link href="css/mystyle.css" rel="stylesheet">
      <link href="css/appointmentStyles.css" rel="stylesheet">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="description" content="Fancy Sliding Form with jQuery" />
      <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
   </head>
   <body>
      <?php
         include 'includes/header.php';
         ?>
      <div class="container">
          <h3>Search for appointment!</h3>
          <div class="form-container">
            <form class="" action="displayAppointments.php" method="post">
              <div class="form-group">
                <label>Search data:</label>
                <input type="text" name="search-value" value="">
              </div>
              <div class="form-group">
                <label>Search Type:</label>
                <select class="form-control" name="searchBy" value="">
                  <option name="prac">Practitioner</option>
                  <option name="patient">Patient</option>
                </select>
              </div>
              <div class="clearfix"></div><hr />
              <div class="form-group">
                <input type="submit" name="submit" value="Search!" class="btn btn-primary">
              </div>
            </form>
          </div>
          <h5><a href="admin_staff_home.php">Go back</a></h5>
      </div>
      <?php
         include 'includes/footer.php';
         ?><!-- Footer -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="vendor/js/sliding.form.js"></script>
   </body>
</html>
