<?php

	require_once './app.php';

	$data = array (
		'blogs' => $db->getBlogs()
	);

	echo $twig->render('index.html', $data);