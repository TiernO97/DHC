<?php
   include 'includes/database.php';

   if(isset($_POST['submit'])) {
     if(isset($_POST['search-value'])) {
       $queryName = $_POST['search-value'];
     }
     if(isset($_POST['searchBy'])) {
       $queryType = $_POST['searchBy'];
     }

     if($queryType == "Practitioner") {
       $id = $crud->get_medStaff_id($queryName);
       $results = $crud->getMedStaffAppointments($id);
     } elseif($queryType == "Patient") {
       $id = $crud->get_patient_id($queryName);
       $results = $crud->getPatientAppointments($id);
     }
     else $id = "not found";
   }

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
          echo "<h4> Showing appoitments for ".$queryType.": <br>".$queryName.".</h4><br>";

          if(sizeof($results) <= 0) {
            echo "<h3> No results found</h3>";
          } else {

            echo "<table class='table'>
                    <tr>
                      <th>ID</th>
                      <th>Patient ID</th>
                      <th>Patient Name</th>
                      <th>Medical Staff ID</th>
                      <th>Medical Staff Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Actions</th>
                    </tr>";

            foreach ($results as $r) {
              $id = $r['app_id'];
              echo "
                      <tr>
                        <td>".$id."</td>
                        <td>".$r['p_id']."</td>
                        <td>".$crud->get_patient_name($r['p_id'])."</td>
                        <td>".$r['ms_id']."</td>
                        <td>".$crud->get_medStaff_name($r['p_id'])."</td>
                        <td>".$r['app_date']."</td>
                        <td>".$r['app_time']."</td>
                        <td><p><a href='amendAppointment.php?id=$id'>Amend</a>
                        | <a href='deleteAppointment.php?id=$id'>Delete</a></p></td>
                      </tr>";

            }
            echo "</table>";
          }

        ?>
        <h5><a href="searchAppointments.php">Go back</a></h5>
      </div>
      <?php
         include 'includes/footer.php';
         ?><!-- Footer -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="vendor/js/sliding.form.js"></script>
   </body>
</html>
