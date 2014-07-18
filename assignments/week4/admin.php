<?php

	require_once './app.php';

	// require_once './app.php';

	$data = array (
		'blogs' => $db->getBlogs()
	);

	echo $twig->render('admin.html', $data);