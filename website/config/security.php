<?php defined('BASEPATH') || exit('No direct script access allowed');

if ( ! session_id()) {
  session_start();
}

function setCSRFToken() {
  $_SESSION['csrfToken'] = md5(uniqid(mt_rand(), true));
}

function CSRFToken() {
  return $_SESSION['csrfToken'];
}

function inputCSRF() {
  setCSRFToken();

  return '<input type="hidden" name="csrfToken" value="' . CSRFToken() . '" />';
}