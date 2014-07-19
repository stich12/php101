<?php

	require_once '../app.php';

	// If they didn't POST data to use, we don't want them here!

	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		header('Location: /');
	}

	// Make sure they have supplied the data we need

	if (!isset($_POST['username']) || !isset($_POST['password'])) {
		header('Location: /login.php');
	}

	$password_hashed = md5($_POST['password']);

	if ($password_hashed === CCDatabase::getPasswordByUsername($_POST['username'])) {
		$_SESSION['signed-in'] = true;
		header('Location: /admin.php');
	} else {
		header('Location: /login.php');
	}