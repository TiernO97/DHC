<?php
   include 'includes/database.php';

   $results = $crud->getStaff();

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
          echo "<h4> Showing all Staff</h4><br>";

          if(sizeof($results) <= 0) {
            echo "<h3> No results found</h3>";
          } else {

            echo "<table class='table'>
                    <tr>
                      <th>ID</th>
                      <th>Staff Employee Number</th>
                      <th>Staff Name</th>
                      <th>Staff Number</th>
                      <th>Staff Address</th>
                      <th>Staff Type</th>
                      <th>Staff Email</th>
                      <th>Staff Password</th>
                      <th>Staff Emergancy Name</th>
                      <th>taff Emergancy Number</th>
                      <th>Actions</th>
                    </tr>";

            foreach ($results as $r) {
              $id = $r['ms_id'];
              echo "
                      <tr>
                        <td>".$id."</td>
                        <td>".$r['ms_empNumber']."</td>
                        <td>".$r['ms_name']."</td>
                        <td>".$r['ms_number']."</td>
                        <td>".$r['ms_address']."</td>
                        <td>".$r['ms_type']."</td>
                        <td>".$r['ms_email']."</td>
                        <td>".$r['ms_password']."</td>
                        <td>".$r['ms_em_name']."</td>
                        <td>".$r['ms_em_number']."</td>
                        <td><p><a href='deleteStaff.php?id=$id'>Delete</a></p></td>
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
