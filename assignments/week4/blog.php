<?php

	require_once './app.php';

	$data = array (
		'blog'	=> $db->getBlog($_GET['id'])
	);

	echo $twig->render('blog.html', $data);