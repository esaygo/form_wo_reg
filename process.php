<?php
session_start();
$errors = array();

if(isset($_POST['action']) && $_POST['action'] == 'register') {

  $_SESSION['email'] = $_POST['email'];
  $_SESSION['first_name'] = $_POST['first_name'];
  $_SESSION['last_name1'] = $_POST['last_name1'];
  $_SESSION['password1'] = $_POST['password1'];
  $_SESSION['confirm_password'] = $_POST['confirm_password'];
  $_SESSION['birth_date'] = $_POST['birth_date'];

  if(isset($_POST['email']) && $_POST['email'] != null ) {
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[] = "This is not a valid email";
    }
  } else if($_POST['email'] == "") {
    $errors[] = "Email should not be empty";
  }

  if(!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
    exit();
  } else {
    echo "you are logged in";
    header('Location: success.php');
    exit();
  }

}







?>
