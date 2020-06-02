<?php
   include 'includes/database.php';

   if(isset($_POST['submit'])) {

     $consultation = $_POST['consultation'];
     $provider = $_POST['provider'];
     $date = $_POST['date'];
     $p_id = $_SESSION['user_session'];
     $number = $crud->get_patient_number($p_id);
     $ms_id = $crud->get_medStaff_id($provider);
     $p_name = $crud->get_patient_name($p_id);

     $crud->add_app_request($p_id, $p_name, $ms_id, $provider, $consultation, $number, $date);

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
         <h4>Thank you, your appointment request has been confirmed!</h4>
         <br>
         <div class="results">
           <h5>Name</h5>
           <p class="data"><?=$p_name;?></p>
           <br>
           <h5>Phone Number</h5>
           <p class="data"><?=$number;?></p>
           <br>
           <h5>Consultation</h5>
           <p class="data"><?=$consultation;?></p>
           <br>
           <h5>Provider</h5>
           <p class="data"><?=$provider;?></p>
           <br>
           <h5>Date</h5>
           <p class="data"><?=$date;?></p>
           <br>
         </div>
      </div>
      <?php
         include 'includes/footer.php';
         ?><!-- Footer -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="vendor/js/sliding.form.js"></script>
   </body>
</html>
