<?php
require_once '../config/access.php';
require_once '../config/security.php';
require_once '../config/sessions.php';
require_once '../config/helper-functions.php';

if (!isset($_POST['csrfToken']) && strcmp($_POST['csrfToken'], CSRFToken()) !== 0) {
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


        $result = mail('81dublin@gmail.com', $name . '<' . $email . '>', $message);

        if ($result === true) {
            unsetSessionVars($_POST);
            setFlashMessage('Message sent');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            setFlashMessage('There was a problem sending the email');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
