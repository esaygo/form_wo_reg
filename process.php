
<?php session_start();



$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$birth_date = $_POST['birth_date'];


function validateName() {
  if(!ctype_alpha($first_name)) {
    $_SESSION['first_name'] = 'numeric';
    return false;
  }
  return true;
}

function validatePassword() {
  if(strlen($password) < 6) {
    $_SESSION['password'] = 'error';
    return false;
  }
  return true;
}



validateName();
validatePassword();

header('Location: index.php');
exit();

?>
