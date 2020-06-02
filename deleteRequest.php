<?php
  include 'includes/database.php';

  $id = $_GET['id'];

  $crud->deleteRequest($id);
  header("Location: viewRequests.php");


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
