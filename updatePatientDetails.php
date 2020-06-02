<?php
  include 'includes/database.php';

  $id = $_SESSION['user_session'];

  $results = $crud->getPatientById($id);

  if(isset($_POST['submit'])) {
    $p_pps = $_POST['updated_patient_pps'];
    $p_name = $_POST['updated_patient_name'];
    $p_address = $_POST['updated_patient_address'];
    $p_number = $_POST['updated_patient_number'];
    $p_dob = $_POST['updated_patient_dob'];
    $p_email = $_POST['updated_patient_email'];
    $p_password = $_POST['updated_patient_password'];
    $p_medcard = $_POST['updated_patient_medcard'];
    $p_emName = $_POST['updated_patient_emName'];
    $p_emNum = $_POST['updated_patient_emNum'];

    $crud->updatePatient($p_pps, $p_name, $p_address, $p_number, $p_dob, $p_email, $p_password, $p_medcard, $p_emName, $p_emNum, $id);
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
            <label>Patient PPS</label>
            <input type="text" name="updated_patient_pps" value="<?=$r['p_pps']?>">
          </div>
          <div class="form-group">
            <label>Patient Name</label>
            <input type="text" name="updated_patient_name" value="<?=$r['p_name']?>">
          </div>
          <div class="form-group">
            <h5>Patient Address</h5>
            <input type="text" name="updated_patient_address" value="<?=$r['p_address']?>">
          </div>
          <div class="form-group">
            <h5>Patient Number</h5>
            <input type="text" name="updated_patient_number" value="<?=$r['p_number']?>">
          </div>
          <div class="form-group">
            <h5>Patient DOB</h5>
            <input type="date" name="updated_patient_dob" value="<?=$r['p_dob'];?>">
          </div>
          <div class="form-group">
            <h5>Patient Email</h5>
            <input type="email" name="updated_patient_email" value="<?=$r['p_email'];?>">
          </div>
          <div class="form-group">
            <h5>Patient Password</h5>
            <input type="text" name="updated_patient_password" value="<?=$r['p_password'];?>">
          </div>
          <div class="form-group">
            <h5>Patient Med Card Number</h5>
            <input type="text" name="updated_patient_medcard" value="<?=$r['p_medcard'];?>">
          </div>
          <div class="form-group">
            <h5>Patient Emergancy Name</h5>
            <input type="text" name="updated_patient_emName" value="<?=$r['p_em_name'];?>">
          </div>
          <div class="form-group">
            <h5>Patient Emergancy Number</h5>
            <input type="text" name="updated_patient_emNum" value="<?=$r['p_em_number'];?>">
          </div>
          <?php } ?>
          <div class="clearfix"></div><hr />
          <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
        </form>
      </div>
    </div>
  </body>
</html>
