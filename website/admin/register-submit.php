<?php
require_once '../config/access.php';
require_once '../config/security.php';
require_once '../config/database.php';
require_once '../config/sessions.php';
require_once '../config/helper-functions.php';

if (!isset($_POST['csrfToken']) && strcmp($_POST['csrfToken'], CSRFToken()) !== 0) {
    setSessionVars($_POST);
    redirect($_SERVER['HTTP_REFERER']);
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $color = $_POST['color'];

    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $color = filter_var($color, FILTER_SANITIZE_STRING);

    $newUser = array(
        'username' => $username,
        'password' => hashPassword($password),
        'color' => $color
    );

    $result = createUser($newUser);

    if ($result['success'] !== false) {
        setcookie('color', $result['color'], 0, '/');
        unsetSessionVars($_POST);
        setFlashMessage($result['message']);
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        setSessionVars($_POST);
        setFlashMessage($result['message']);
        redirect($_SERVER['HTTP_REFERER']);
    }
}