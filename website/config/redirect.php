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