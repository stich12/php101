<?php
require '../config/security.php';

if (! isset($_POST['csrfToken']) && strcmp($_POST['csrfToken'], $_SESSION['csrfToken']) !== 0) {
  setSessionVars($_POST);
  redirect($_SERVER['HTTP_REFERER']);
} else {
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['message'];

  $emailResult = filter_var($email, FILTER_VALIDATE_EMAIL);

  if ($emailResult === false) {
    setSessionVars($_POST);
    redirect($_SERVER['HTTP_REFERER']);
  } else {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);


    mail('81dublin@gmail.com', $name . '<' . $email . '>', $message);
  }
}
