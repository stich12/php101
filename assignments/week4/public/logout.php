<?php

	require_once '../app.php';

	unset($_SESSION['signed-in']);

	header('Location: /');