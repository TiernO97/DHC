<?php
  include 'includes/database.php';

  $id = $_SESSION['user_session'];

  $results = $crud->getPatientById($id);
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
    <link href="css/style.css" rel="stylesheet">
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
      <?php

      echo "<h4> Showing details for patient <br>".$crud->get_patient_name($id)."</h4><br>";

      if(sizeof($results) <= 0) {
        echo "<h3>Unable to get data</h3>";
      } else {

        echo "<table class='table'>
                <tr>
                  <th>ID</th>
                  <th>Patient PPS</th>
                  <th>Patient Name</th>
                  <th>Patient Address</th>
                  <th>Patient Number</th>
                  <th>Patient D/O/B</th>
                  <th>Patient Email</th>
                  <th>Patient Password</th>
                  <th>Patient Medcard Number</th>
                  <th>Patient Emergancy Name</th>
                  <th>Patient Emergancy Number</th>
                  <th>Actions</th>
                </tr>";

        foreach ($results as $r) {
          $id = $r['p_id'];
          echo "
                  <tr>
                    <td>".$id."</td>
                    <td>".$r['p_pps']."</td>
                    <td>".$r['p_name']."</td>
                    <td>".$r['p_address']."</td>
                    <td>".$r['p_number']."</td>
                    <td>".$r['p_dob']."</td>
                    <td>".$r['p_email']."</td>
                    <td>".$r['p_password']."</td>
                    <td>".$r['p_medcard']."</td>
                    <td>".$r['p_em_name']."</td>
                    <td>".$r['p_em_number']."</td>
                    <td><p><a href='updatePatientDetails.php?id=$id'>Edit</a></p></td>
                  </tr>";

        }
        echo "</table>";
      }

    ?>
    </div>
  </body>
</html>
