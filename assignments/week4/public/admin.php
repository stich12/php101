<?php

	require_once '../app.php';

	if ($_SESSION['signed-in'] !== true) {
		header('Location: /login.php');
	}

	$data = array (
		'blogs' => $db->getBlogs()
	);

	echo $twig->render('admin.html', $data);