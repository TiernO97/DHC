<?php
  include 'includes/database.php';

  if(isset($_POST['submit'])) {
    $ms_number = $_POST['ms_number'];
    $ms_name = $_POST['ms_name'];
    $ms_phone = $_POST['ms_phone'];
    $ms_address = $_POST['ms_address'];
    $ms_type = $_POST['ms_type'];
    $ms_email = $_POST['ms_email'];
    $ms_password = $_POST['ms_password'];
    $ms_em_name = $_POST['ms_em_name'];
    $ms_em_number = $_POST['ms_em_number'];

    $crud->addStaff($ms_number, $ms_name, $ms_phone, $ms_address, $ms_type, $ms_email, $ms_password, $ms_em_name, $ms_em_number);
    header("Location: viewStaff.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <br>
    <div class="container">
      <div class="form-container">
        <form class="form" action="" method="post">
          <div class="form-group">
            <label>Staff Employee Number:</label>
            <input type="text" name="ms_number" value="">
          </div>
          <div class="form-group">
            <label>Staff Name:</label>
            <input type="text" name="ms_name" value="">
          </div>
          <div class="form-group">
            <label>Staff Contact Number:</label>
            <input type="text" name="ms_phone" value="">
          </div>
          <div class="form-group">
            <label>Staff Address:</label>
            <input type="text" name="ms_address" value="">
          </div>
          <div class="form-group">
            <label>Staff Type:</label>
            <select class="form-control" name="ms_type">
              <option value="Nurse">Nurse</option>
              <option value="GP">GP</option>
              <option value="Doctor">Doctor</option>
            </select>
          </div>
          <div class="form-group">
            <label>Staff Email:</label>
            <input type="text" name="ms_email" value="">
          </div>
          <div class="form-group">
            <label>Staff Password:</label>
            <input type="text" name="ms_password" value="">
          </div>
          <div class="form-group">
            <label>Staff Emergancy Name:</label>
            <input type="text" name="ms_em_name" value="">
          </div>
          <div class="form-group">
            <label>Staff Emergancy Number:</label>
            <input type="text" name="ms_em_number" value="">
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          </div>

        </form>
        <a href="admin_staff_home.php">Go back</a>
      </div>
    </div>
  </body>
</html>
