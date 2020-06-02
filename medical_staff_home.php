<?php
 include 'includes/database.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
<style>
.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    padding: 10 10px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}
</style>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dundalk Healthcare Service</title>

    <!-- Bootstrap core CSS -->


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <?php
      include 'includes/header.php';
    ?>
<!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Medical Staff
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
      </ol>

<button class="collapsible"><h5>Appointments</h5></button>
<div class="content">
  <h5><a href = "medStaff_view_apps.php"> View Appointment </a></h5></br>

</div>
<button class="collapsible"><h5>Patients</h5></button>
<div class="content">
  <h5><a href = "searchPatientsMedStaff.php"> View Patient </a></h5></br>
</div>

    </div>
    <!-- /.container -->
	</br></br></br>

    <!-- Footer -->
    <?php
      include 'includes/footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
  </body>

</html>
