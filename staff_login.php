<?php
require_once 'includes/database.php';


if($user->is_loggedin()!="")
{
 $user->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
 $staff_number = $_POST['staff_number'];
 $staff_password = $_POST['staff_password'];


 //VALIDATION

 if($user->medStaff_login($staff_number, $staff_password))
 {
  $user->redirect('medical_staff_home.php');
 }
 else
 {
  $error = "Wrong Details !";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet" type="text/css"/>

        <!-- Custom styles for this template -->
        <link href="css/modern-business.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <title>Admin Login</title>
    </head>
    <body>
      <?php
        include 'includes/header.php';
      ?>

        <div class="container">
          <div class="form-container">
             <form method="post">
               <br>
                 <h2 class="formTitle text-center">Sign in</h2><hr />
                 <?php
                 if(isset($error))
                 {
                       ?>
                       <div class="alert alert-danger">
                           <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                       </div>
                       <?php
                 }
                 ?>
                 <div class="form-group">
                 <!--CLIENT SIDE VALIDATION-->
                 <label>Staff Employee Number:</label>
                  <input type="text" class="form-control" name="staff_number" placeholder="john.smith@email.com" required />
                 </div>
                 <div class="form-group">
                     <label>Password:</label>
                 <!--CLIENT SIDE VALIDATION-->
                  <input type="password" class="form-control" name="staff_password" placeholder="*****" required />
                 </div>
                 <div class="clearfix"></div><hr />
                 <div class="form-group">
                  <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                      <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                     </button>
                 </div>
                 <br />
                 <!--<label>Don't have account yet! <a href="sign-up.php">Sign Up</a></label>-->
             </form>
            </div>
        </div>

a
        <?php
        include 'includes/footer.php';
        ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
