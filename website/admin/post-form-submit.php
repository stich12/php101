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
    $title = $_POST['title'];
    $content = $_POST['content'];

    $post = array(
        'title' => filter_var($title, FILTER_SANITIZE_STRING),
        'content' => filter_var($content, FILTER_SANITIZE_STRING),
        'datetime' => date('Y-m-d h:i:s a')
    );

    $result = createPost($post);

    if ($result['success'] !== false) {
        unsetSessionVars($_POST);
        setFlashMessage('Post saved');
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        setSessionVars($_POST);
        setFlashMessage($result['message']);
        redirect($_SERVER['HTTP_REFERER']);
    }
}