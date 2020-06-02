<?php
    include 'includes/database.php';

    $pracs = $crud->getPractitioners();
    $patients = $crud->getPatients();

    if(isset($_POST['submit'])) {
      $patient_name = $_POST['patient'];
      $p_id = $crud->get_patient_id($patient_name);
      $ms_name = $_POST['prac'];
      $ms_id = $crud->get_medStaff_id($ms_name);
      $a_id = $_SESSION['user_session'];
      $app_date = $_POST['date'];
      $app_time = $_POST['time'];

      $crud->addAppointment($p_id, $ms_id, $a_id, $app_time, $app_date);
      header("Location: searchAppointments.php");
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

    <div class="container">
      <div class="form-container">
        <form class="" action="" method="post">
          <div class="form-group">
            <label>Patient</label>
            <select class="form-control" name="patient" value="">
              <?php
                foreach ($patients as $pat) {
                  echo "<option>".$pat['p_name']."</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Select Practitioner:</label>
            <select class="form-control" name="prac">
              <?php
                foreach ($pracs as $p) {
                  echo "<option>".$p['ms_name']."</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" value="date">
          </div>
          <div class="form-group">
            <label>Time:</label>
            <input type="time" name="time" value="">
          </div>
          <div class="clearfix"></div><hr />
          <div class="form-group">
            <input type="submit" name="submit" value="Submit!" class="btn btn-primary">
          </div>
          <a href="admin_staff_home.php">Go back</a>
        </form>
      </div>
    </div>
  </body>
</html>
