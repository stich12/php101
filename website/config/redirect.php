<?php defined('BASEPATH') || exit('No direct script access allowed');

function redirect($url)
{
  header('Location: ' . $url);
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