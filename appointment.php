  <?php
 include 'includes/database.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dundalk Healthcare Service</title>

    <!-- Bootstrap core CSS -->


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  </head>
  </head>
<body>

<?php
 include 'includes/header.php';
?>


<div class="container">
      <div id="wrapper">
            <?php
              if($user->is_loggedin()) {
                echo "
                <form class='form form-group' action='app_confirm.php' method='post'>
                  <div style='margin:50px 0px;' class='form-group'>
                    Step 1: Consultation Type
                    <select class='form-control' name='consultation' placeholder='Please select a consultation type..'>
                      <option value='General Consultation'>General Consultation</option>
                      <option value='Blood Test with Consultation'>Blood Test with Consultation</option>
                      <option value='Full Sexual Health Screen'>Full Sexual Health Screen</option>
                      <option value='Hair Loss PRP Treatment'>Hair Loss PRP Treatment</option>
                      <option value='Executive Health Screening'>Executive Health Screening</option>
                      <option value='Flu Vaccination'>Flu Vaccination</option>
                      <option value='Other'>Other</option>
                    </select>
                  </div>
                  <div style='margin:50px 0px;' class='form-group'>
                    Step 2: Provider
                    <select  class='form-control' name='provider' placeholder='Please select a provider type..'>
                      <option value='Dr. Kevin O Connell'>Dr. Kevin O Connell</option>
                      <option value='Dr. Rachel Fitzgerald'>Dr. Rachel Fitzgerald</option>
                      <option value='Nurse Sandra Kelly'>Nurse Sandra Kelly</option>
                      <option value='Dr. Niamh O'Rourke'>Dr. Niamh O'Rourke</option>
                    </select>
                  </div>

                  <div style='margin:50px 0px;' class='form-group'>
                    Step 3: Date<br>
                    <input class='form-control' type='date' name='date' value=''>
                  </div>
                  <div class='formElem'>
                    <input type='submit' name='submit' value='submit' class='btn btn-primary'>
                  </div>
                </form>
            ";
          } else {
            header("Location:patient_login.php");
          }
            ?>
      </div>
	</div>
  <?php
    include 'includes/footer.php';
  ?>
  </body>
</html>
