<?php

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();


include_once 'includes/database.php';
if(!$user->is_loggedin())
{
 $user->redirect('index.php');
}
?>
