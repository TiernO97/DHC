<?php
  if(isset($_GET['error_message'])) {
    $err_msg = $_GET['error_message'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include "includes/header.php"; ?>

    <div class="container my-4">
      <p><?php echo $err_msg ?></p>
    </div>
  </body>
</html>
