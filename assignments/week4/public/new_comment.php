<?php

	require_once '../app.php';

	$comment = new Comment();
	$comment->body		= $_POST['body'];
	$comment->blog_id	= $_POST['blogID'];

	$db->saveComment($comment);

	$data = array (
		'comment' => $comment,
	);

	echo $twig->render('comment.html', $data);