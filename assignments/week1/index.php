<?php

	$name			= 'Chris';
	$age			= 30;
	$iceCreamWeight	= 0.5;
	$totalWeight	= 184 + $iceCreamWeight;

	$blog = array();
	$blog['title']			= 'Charleston adds more ice cream';
	$blog['body']			= "Jeni's ice cream has opened on King Street.";
	$blog['status']			= 'published';

	switch ($blog['status']) {
		case 'published':
			$msg = 'The post is published.';
			break;
		case 'draft':
			$msg = 'The post is a draft.';
			break;
		default:
			$msg = 'The post is something else!';
			break;
	}

	function printStrong($string) {
		print '<strong>' . $string . '</strong>';
	}

	print_r($blog);

	echo '<hr>';

	var_dump($name);

	var_dump($age);

	var_dump($iceCreamWeight);

	var_dump($totalWeight);

	echo '<hr>';

	printStrong($msg);