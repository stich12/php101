<?php defined('BASEPATH') || exit('No direct script access allowed');

function theExcerpt($content)
{
    return substr($content, 0, 20);
}

function redirect($url)
{
    header('Location: ' . $url);
}