<?php

	// Require all the files in the ./inc directory
	$files = glob('./inc/*.php');
	foreach ($files as $file) {
		require_once $file;
	}

	require_once './vendor/autoload.php';
	require_once './db.php';

	// Load up the twig environment
	$loader	= new Twig_Loader_Filesystem('templates');
	$twig	= new Twig_Environment($loader);

	// Give us an instance of a database that we can use later
	$db		= new CCDatabase();