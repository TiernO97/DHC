<?php
require_once 'includes/database.php';


if($user->is_loggedin()!="")
{
 $user->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
 $umail = $_POST['txt_uname_email'];
 $upass = $_POST['txt_password'];


 //VALIDATION

 if($user->patient_login($umail,$upass))
 {
  $user->redirect('index.php');
 }
 else
 {
  $error = "Wrong Details !";
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>L'amour | Sign In</title>
<script src="js/script.js" type="text/javascript"></script>

<link href="css/forms.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link href="css/modern-business.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
     <?php
      include 'includes/header.php';
    ?>
    <br></br><br></br>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2 class="formTitle">Sign in</h2><hr />
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
            <label>Username/Email:</label>
             <input type="text" class="form-control" name="txt_uname_email" placeholder="jason23 or jason@gmail.com" required />
            </div>
            <div class="form-group">
                <label>Password:</label>
            <!--CLIENT SIDE VALIDATION-->
             <input type="password" class="form-control" name="txt_password" placeholder="*****" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                </button>
            </div>
            <br />
            <label>Don't have account yet? <a href="sign-up.php">Sign Up</a></label>
        </form>
       </div>
</div>

     <?php
      include 'includes/footer.php';
    ?>

                    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
