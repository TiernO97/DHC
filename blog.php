<?php
 include 'includes/database.php';

 $results = $user->getBlogs();
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

  </head>

  <body>

    <?php
      include 'includes/header.php';
    ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Our Blog
        <small></small>
      </h1>

<!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="img/blog1.png" alt="">

      <!-- Blog

      <!-- Blog Post -->
      <?php
      foreach ($results as $r) {
        echo "
      <div class='card mb-4'>
        <div class='card-body' >
          <div class='row'>
            <div class='col-lg-6'>
              <a href='#'>
                <img class='img-fluid rounded' src='img/blog2.jpg' alt='cold sore'>
              </a>
            </div>
            <div class='col-lg-6'>
              <h2 class='card-title'>".$r['b_title']."</h2>
              <p class='card-text'>".$r['b_text']."</p>
              <button class='btn btn-primary bb'>Read More</button>
            </div>
          </div>
        </div>
        <div class='card-footer text-muted'>
          Posted on ".$r['b_date']." by
          ".$r['b_poster']."
        </div>
      </div>";
    } ?>

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->

    <?php
include 'includes/footer.php';
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>

    $(document).ready(function() {
      var now = new Date();
      var Christmas = new Date("Tuesday 25, 2018");

      if(now < Christmas) // today is before valentine
      {
        alert("Happy Christmas Everyone please keep warm in this weather!💖💖💖");
      }
      else
      {
        alert("Christmas is nearly here, dont forget your flu vaccine!💔💔💔💔💔");
      }
    });

    //I want the line <p class='card-text'>".$r['b_text']."</p> to be slidden up, and slide down when the button underneath is clicked, without effecting the other divs echoed from the same loop
    $("p.card-text").hide();

    $(".bb").click(function() {
      var div = $(this).parent();
      div.find("p.card-text").slideToggle();
    });


  </script>

</body>

</html>
