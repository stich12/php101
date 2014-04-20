<?php defined('BASEPATH') || exit('No direct script access allowed');

require_once '../config/security.php';
require_once '../config/database.php';

if (!isset($_POST['csrfToken']) && strcmp($_POST['csrfToken'], CSRFToken()) !== 0) {
    setSessionVars($_POST);
    redirect($_SERVER['HTTP_REFERER']);
} else {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['username'], FILTER_SANITIZE_STRING);

    $user = getUser($username);
    // check password
    // if invalid redirect
    // else logged in
}
