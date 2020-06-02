<?php
   include 'includes/database.php';

   $results = $crud->getRequests();

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
          echo "<h4> Showing all requests!</h4><br>";

          if(sizeof($results) <= 0) {
            echo "<h3> No results found</h3>";
          } else {

            echo "<table class='table'>
                    <tr>
                      <th>ID</th>
                      <th>Patient ID</th>
                      <th>Patient Name</th>
                      <th>Staff ID</th>
                      <th>Staff Name</th>
                      <th>Appointment Type</th>
                      <th>Contact Number</th>
                      <th>Requested Date</th>
                      <th>Actions</th>
                    </tr>";

            foreach ($results as $r) {
              $id = $r['ar_id'];
              echo "
                      <tr>
                        <td>".$id."</td>
                        <td>".$r['p_id']."</td>
                        <td>".$r['p_name']."</td>
                        <td>".$r['ms_id']."</td>
                        <td>".$r['ms_name']."</td>
                        <td>".$r['ar_type']."</td>
                        <td>".$r['ar_number']."</td>
                        <td>".$r['ar_date']."</td>
                        <td><p><a href='deleteRequest.php?id=$id'>Delete</a></p></td>
                      </tr>";

            }
            echo "</table>";
          }

        ?>
        <h5><a href="admin_staff_home.php">Go back</a></h5>
      </div>
      <?php
         include 'includes/footer.php';
         ?><!-- Footer -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="vendor/js/sliding.form.js"></script>
   </body>
</html>
