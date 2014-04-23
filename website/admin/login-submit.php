<?php
require_once '../config/access.php';
require_once '../config/security.php';
require_once '../config/database.php';
require_once '../config/redirect.php';

if (!isset($_POST['csrfToken']) && strcmp($_POST['csrfToken'], CSRFToken()) !== 0) {
    setSessionVars($_POST);
    redirect($_SERVER['HTTP_REFERER']);
} else {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $user = getUser($username);
    $savedPassword = substr($user[0]['password'], 28);

    if (strcmp($savedPassword, getPasswordHash($password)) === 0) {
        $_SESSION['user'] = $user[0]['username'];
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        setSessionVars($_POST);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
