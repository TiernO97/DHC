<?php
   include 'includes/database.php';

   $id = $_GET['id'];

   $results = $crud->getNotes($id);

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
      <div id="content">
        <?php
          echo "<h4> Showing notes for appointment id: ".$id."</h4><br>";

          if(sizeof($results) <= 0) {
            echo "<h3> No results found</h3>";
          } else {

            echo "<table class='table'>
                    <tr>
                      <th>ID</th>
                      <th>Patient ID</th>
                      <th>Patient Name</th>
                      <th>Appointment ID</th>
                      <th>Treatment</th>
                      <th>Prescription Name</th>
                      <th>Prescription Dosage</th>
                      <th>Prescription Length</th>
                      <th>Actions</th>
                    </tr>";

            foreach ($results as $r) {
              $id = $r['pr_id'];
              echo "
                      <tr>
                        <td>".$id."</td>
                        <td>".$r['p_id']."</td>
                        <td>".$crud->get_patient_name($r['p_id'])."</td>
                        <td>".$r['app_id']."</td>
                        <td>".$r['treatment']."</td>
                        <td>".$r['pres_name']."</td>
                        <td>".$r['pres_dosage']."</td>
                        <td>".$r['pres_duration']."</td>
                        <td><p><a href='deleteRecord.php?id=$id'>Delete</a></p></td>
                      </tr>";

            }
            echo "</table>";
          }

        ?>
        <h5><a href="medStaff_view_apps.php">Go back</a></h5>
      </div>
      <?php
         include 'includes/footer.php';
         ?><!-- Footer -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="vendor/js/sliding.form.js"></script>
   </body>
</html>
