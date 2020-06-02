<?php
require_once 'includes/database.php';

if($user->is_loggedin()!="")
{
    $user->redirect('index.php');
}
//VALIDATION
if(isset($_POST['btn-signup']))
{
   $p_pps = trim($_POST['p_pps']);
   $p_fname = trim($_POST['p_fname']);
   $p_lname = trim($_POST['p_lname']);
   $p_address = trim($_POST['p_address']);
   $p_number = trim($_POST['p_number']);
   $p_dob = trim($_POST['p_dob']);
   $p_email = trim($_POST['p_email']);
   $p_password = trim($_POST['p_pass']);
   $p_medcard = trim($_POST['p_medcard']);
   $p_em_name = trim($_POST['p_em_name']);
   $p_em_number = trim($_POST['p_em_number']);

   if($p_pps=="") {
      $error[] = "Please provide a pps number!";
   }
   else if($p_fname=="") {
      $error[] = "Please provide a first name!";
   }
   else if($p_lname=="") {
      $error[] = "Please provide a last name!";
   }
   else if($p_address=="") {
      $error[] = "Please provide an address!";
   }
   else if($p_number=="") {
      $error[] = "Please provide a phone number!";
   }
   else if($p_dob=="") {
      $error[] = "Please provide a date of birth!";
   }
   else if($p_email=="") {
      $error[] = "provide email id !";
   }
   else if(!filter_var($p_email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
   }
   else if($p_password=="") {
      $error[] = "provide password !";
   }
   else if(strlen($p_password) < 6){
      $error[] = "Password must be atleast 6 characters";
   }
   else if($p_em_name=="") {
      $error[] = "Please provide the name of your emergancy contact!";
   }
   else if($p_em_number=="") {
      $error[] = "Please provide the number of your emergancy contact!";
   }
   else
   {
      try
      {
         $stmt = $db->prepare("SELECT p_pps,p_email FROM patient WHERE p_pps=:pps OR p_email=:email");
         $stmt->execute(array(':pps'=>$p_pps, ':email'=>$p_email));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);

         if($row['p_pps']==$p_pps) {
            $error[] = "Sorry, an account with the entered PPS is already active. Please contact us to resolve any issues.";
         }
         else if($row['p_email']==$p_email) {
            $error[] = "Sorry, email id already taken!";
         }
         else
         {
            if($user->patient_register($p_pps, $p_fname, $p_lname, $p_address, $p_number, $p_dob, $p_email, $p_password, $p_medcard, $p_em_name, $p_em_number))
            {
                $user->redirect('patient_register.php?joined');
            }
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Form</title>
<script src="js/script.js" type="text/javascript"></script>
<link href="css/modern-business.css" rel="stylesheet" type="text/css"/>
<link href="css/forms.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php
    include'includes/header.php';
    ?>
    <br><br><br><br>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2 class="formTitle">Sign up</h2><hr />
            <?php
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                  </div>
                  <?php
               }
            }
            else if(isset($_GET['joined']))
            {
                 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
            }
            ?>
            <div class="form-group">
                <label>PPS No:</label>
            <input type="text" class="form-control" name="p_pps" placeholder="1234567A" value="<?php if(isset($error)){echo $p_pps;}?>" required />
            </div>
            <div class="form-group">
                <label>First Name:</label>
            <input type="text" class="form-control" name="p_fname" placeholder="John" value="<?php if(isset($error)){echo $p_fname;}?>" required />
            </div>
            <div class="form-group">
                <label>Last Name:</label>
            <input type="text" class="form-control" name="p_lname" placeholder="Smith" value="<?php if(isset($error)){echo $p_lname;}?>" required />
            </div>
            <div class="form-group">
                <label>Address:</label>
            <input type="text" class="form-control" name="p_address" value="<?php if(isset($error)){echo $p_address;}?>" required />
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
            <input type="text" class="form-control" name="p_number" placeholder="" value="<?php if(isset($error)){echo $p_number;}?>" required />
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
            <input type="text" class="form-control" name="p_dob" placeholder="xx-xx-xxxx" value="<?php if(isset($error)){echo $p_dob;}?>" />
            </div>
            <div class="form-group">
                <label>Email:</label>
            <input type="text" class="form-control" name="p_email" placeholder="john@gmail.com" value="<?php if(isset($error)){echo $p_email;}?>" />
            </div>
            <div class="form-group">
                <label>Password:</label>
             <input type="password" class="form-control" name="p_pass" placeholder="*******" />
            </div>
            <div class="form-group">
                <label>Medical Card No:</label>
            <input type="text" class="form-control" name="p_medcard" />
            </div>
            <div class="form-group">
                <label>Emergancy Contact Name:</label>
            <input type="text" class="form-control" name="p_em_name" placeholder="" value="<?php if(isset($error)){echo $p_em_name;}?>" />
            </div>
            <div class="form-group">
                <label>Emergancy Contact Number:</label>
            <input type="text" class="form-control" name="p_em_number" placeholder="" value="<?php if(isset($error)){echo $p_em_number;}?>" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">
                 <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
            <label>Already have an account? <a href="signIn.php" id="sign">Sign In</a></label>
        </form>
       </div>
</div>

         </head>
    <?php
    include'includes/footer.php';
    ?>

                    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
