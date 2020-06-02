  <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">DHC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appointment.php">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <?php
                if($user->is_loggedin()) {
                echo "<div id='wrap'>
                    <div class='dropdown-menu dropdown-menu-right demo dropdown'>
                    <a class='dropdown-item' href='patient_details.php'>Account details</a>
                    <a class='dropdown-item' href='patient_logout.php'>Logout</a>
                  </div>
                    </div>";
                } else {
                    echo "<div class='dropdown-menu dropdown-menu-right demo dropdown'>
                    <a class='dropdown-item' href='patient_login.php'>Login</a>
                    <a class='dropdown-item' href='patient_register.php'>Sign up</a>
                  </div>
                  </div>";
                }
                ?>

              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
