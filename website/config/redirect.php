<?php
require_once 'security.php';

function redirect($url)
{
  header('Location: ' . $url);
}

function setSessionVars($postArrary)
{
  foreach ($postArrary as $key => $value) {
    $_SESSION[$key] = $value;
  }
}