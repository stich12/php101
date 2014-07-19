<?php

	require_once '../app.php';

	$blog = new Blog();
	$blog->title = $_POST['title'];

	$db->saveBlog($blog);

	header('Location: /admin.php');