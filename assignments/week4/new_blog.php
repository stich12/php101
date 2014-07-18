<?php

	require_once './app.php';

	// require_once './app.php';

	$blog = new Blog();
	$blog->title = $_POST['title'];

	$db->addBlog($blog);

	header('Location: /admin.php');