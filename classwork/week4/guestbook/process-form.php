<?php
session_start();

require_once('access.php');
require_once('database.php');

defined('BASEPATH') || exit('No direct script access allowed');

$upload_dir = 'photos/';

// check to see if the $_POST['var'] are not empty
// else return to the form and say there was an error
// make sure to assign the POST data array keys to the SESSION data array keys

if (!empty($_POST['Name']) || !empty($_POST['Email'])) {

  // complete assigning values to the object

  $visitor = new Visitor();
  $visitor->name = $_POST['Name'];
  $visitor->age = $_POST['Age'];

  if (is_uploaded_file($_FILES['Photo']['tmp_name'])) {
    $tmp_name = $_FILES['Photo']['tmp_name'];
    $name = $_FILES['Photo']['name'];
    move_uploaded_file($tmp_name, $upload_dir . $name);
    $visitor->photo_url = $upload_dir . $name;
  }

  $_SESSION['error'] = null;
  saveVisitor($visitor);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
  $_SESSION['error'] = 'The form is incomplete';
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
