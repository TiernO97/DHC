<?php
   include 'includes/database.php';

   $id = $_GET['id'];

   $results = $crud->getNotes($id);

   if(isset($_POST['submit'])) {
     $treatment = $_POST['treatment'];
     $pres_name = $_POST['pres_name'];
     $pres_dosage = $_POST['pres_dosage'];
     $pres_length = $_POST['pres_length'];

     $crud->addAppRecord($p_id, $id, $treatment, $pres_name, $pres_dosage, $pres_length);
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
          <form class="form" action="" method="post">
            <?php foreach ($results as $r) { ?>
            <div class="form-group">
              <br>
              <label>Treatment</label>
              <textarea class="form-control" name="treatment">
                <?php echo $r['treatment']; ?>
              </textarea>
            </div>
            <div class="form-group">
              <label>Prescription Given: (leave blank if N/A)</label>
              <input class="form-control sm-input" type="text" name="pres_name" value="<?=$r['pres_name']?>">
            </div>
            <div class="form-group">
              <label>Prescription Dosage</label>
              <input class="form-control" type="text" name="pres_dosage" value="<?=$r['pres_dosage']?>">
            </div>
            <div class="form-group">
              <label>Prescription Length</label>
              <input class="form-control" type="text" name="pres_length" value="<?=$r['pres_duration']?>">
            </div>
            <?php } ?>
            <div class="clearfix"></div>
            <div class="form-group">
              <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
          </form>
        </div>

        <h5><a href="medStaff_view_apps.php">Go back</a></h5>
      </div>
      <?php
         include 'includes/footer.php';
         ?><!-- Footer -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="vendor/js/sliding.form.js"></script>
   </body>
</html>
