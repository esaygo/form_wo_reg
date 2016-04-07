<?php
session_start();

$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$birth_date = $_POST['birth_date'];

// variables declared outside of a function don't scope through functions, unlike many other languages, so you have to pass them trhough as arguments.

function validateName($first_name) {
  if(!ctype_alpha($first_name)) {
    $_SESSION['first_name'] = 'numeric';
    // return false;
  }
  // return true;
}

function validatePassword($password) {
  if(strlen($password) < 6) {
    $_SESSION['password'] = 'error';
  }
}



validateName($first_name);
validatePassword($password);

header('Location: index.php');
exit();

?>
