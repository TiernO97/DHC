<?php
  include 'includes/database.php';

  $id = $_GET['id'];

  $crud->deleteStaff($id);
  header("Location: viewStaff.php");


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
