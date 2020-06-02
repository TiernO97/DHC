<?php
    include 'includes/database.php';

    if(isset($_POST['submit'])) {
      $b_title = $_POST['title'];
      $b_image = "img/".$_POST['image'];
      $b_text = $_POST['text'];
      $b_date = new Date('today');
      $b_poster = $_SESSION['user_session'];

      $crud->addBlog($b_title, $b_image, $b_text, $b_date, $b_poster);
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
          <div class="form-group">
            <label>Blog Title</label>
            <input class="form-control" type="text" name="title" value="">
          </div>
          <div class="custom-file">
            <label>Blog Image</label>
            <input class="form-control" type="file" name="image" value="">
          </div>
          <div class="form-group">
            <label>Blog Text</label>
            <textarea class="form-control" name="text" rows="8" cols="80"></textarea>
          </div>
          <div class="clearfix"></div>
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
      <a href="admin_staff_home.php">Go back</a>
    </div>
  </body>
</html>
