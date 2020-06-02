<?php
 include 'includes/database.php';
?>
<!DOCTYPE html>
<html lang="en">

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

  <body>

    <?php
      include 'includes/header.php';
    ?>



    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/do.png')"></div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/doc.png')"></div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/men.png')"></div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center">WELCOME TO OUR PRACTICE</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Minor Illness</h4>
            <div class="card-body">
              <p class="card-text">You do not have to visit your doctor to get treatment. Book an appointment to see your Doctor,  or visit the practice.</p>
            </div>
            <div class="card-footer">
              <a href="appointment.php" class="btn btn-primary">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Health Problem</h4>
            <div class="card-body">
              <p class="card-text">Mental health is about how we think, feel and behave. It is estimated that in four people has a mental health problem at some point, which can affect their daily life, relationships or physical health.</p>




            </div>
            <div class="card-footer">
              <a href="blog.php" class="btn btn-primary">Read Our Blog</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Family Planning</h4>
            <div class="card-body">
              <p class="card-text">Contraceptive choices have never been greater for women and men. There are more than a dozen options available in Ireland. Options include the pill, contraceptive patches, vaginal rings, diaphragms and condoms, as well as long-term methods like implants, injectables or the coil.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->



      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/item1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Baby Care</a>
              </h4>
              <p class="card-text">To avail of this service, the GP will provide you with an application form, which you and your GP should complete together, and which you should then return to your Local Health Office where it will be processed for inclusion in the scheme.

                The doctor provides an initial examination, if possible before 12 weeks. A further five ante-natal consultations will be due during the pregnancy (6 if it is your second or subsequent child)</p></div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/item2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Women's Health</a>
              </h4>
              <p class="card-text">We offer a broad range of women’s health services. For further information on any of the topics below, or if you have a query regarding any other service, please do not hesitate to ask our reception staff.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/item3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Men's Health</a>
              </h4>
              <p class="card-text">We offer a broad range of men’s health services. For Further information on any of the topics below, or if you have a query regarding any other service, please do not hesitate to ask our reception staff.

                Health Screening Packages available, tailored to your needs: Well Man, Men’s Mini-Medical and Health Screening (CRISP)

              </p>
            </div>
          </div>
        </div>


      </div>
      <br/>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Flu Vaccine Now Available</h2>
          <p>Flue Vaccines are now available and are recommended if you are:</p>
          <ul>
            <li>Pregnant</li>
            <li>Over 65 years</li>
            <li>Over 6months of age with long time health condition</li>
            <li>Healthcare worker</li>
            <li>Resident of a nursing home</li>
          </ul>
          <p>It is important to take flue vacine if you belong to the above group remember flue causes death and hospitalisation every year. Flu vaccine is the best protection against flu..</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="img/about.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Need an appointment? click on the link and we look forward to be of help to you</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-success btn-block" href="appointment.php">Book Appointment</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <?php
      include 'includes/footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
