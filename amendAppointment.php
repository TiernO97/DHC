<?php
  include 'includes/database.php';

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  $results = $crud->getAppointmentsById($id);

  if(isset($_POST['submit'])) {
    $p_name = $_POST['updated_patient_name'];
    $p_id = $crud->get_patient_id($p_name);
    $ms_name = $_POST['updated_prac_name'];
    $ms_id = $crud->get_medStaff_id($ms_name);
    $a_id = $_SESSION['user_session'];
    $app_date = $_POST['updated_date'];
    $app_time = $_POST['updated_time'];

    $crud->updateAppointment($p_id, $ms_id, $a_id, $app_time, $app_date, $id);
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
        <form class="form-group" action="" method="post">
          <?php foreach ($results as $r) { ?>
          <div class="form-group">
            <label>Patient Name:</label>
            <input type="text" name="updated_patient_name" value="<?=$crud->get_patient_name($r['p_id']);?>">
          </div>
          <div class="form-group">
            <h5>Practitioner Name</h5>
            <input type="text" name="updated_prac_name" value="<?=$crud->get_medStaff_name($r['ms_id']);?>">
          </div>
          <div class="form-group">
            <h5>Appontment Date</h5>
            <input type="text" name="updated_date" value="<?=$r['app_date'];?>">
          </div>
          <div class="form-group">
            <h5>Appointment Time</h5>
            <input type="text" name="updated_time" value="<?=$r['app_time'];?>">
          </div>
          <?php } ?>
          <div class="clearfix"></div><hr />
          <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
        </form>
      </div>
    </div>
  </body>
</html>
