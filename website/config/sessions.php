<?php defined('BASEPATH') || exit('No direct script access allowed');

if (!session_id()) {
    session_start();
}

function endSession()
{
    session_destroy();
}

function setSessionVars($postArray)
{
  foreach ($postArray as $key => $value) {
    $_SESSION[$key] = $value;
  }
}

function unsetSessionVars($postArray)
{
    foreach ($postArray as $key => $value) {
        if (array_key_exists($key, $_SESSION)) {
            unset($_SESSION[$key]);
        }
    }
}

function setFlashMessage($message)
{
    $_SESSION['flash_message'] = $message;
}

function hasFlashMessage()
{
    return isset($_SESSION['flash_message']) ? true : false;
}

function getFlashMessage()
{
    echo $_SESSION['flash_message'] = $message;
    unset($_SESSION['flash_message']);
}