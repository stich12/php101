<?php
require_once 'security.php';

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