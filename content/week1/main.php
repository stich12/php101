<?php

	$input = $argv[1];

	function multiplyText($str) {
		$result = '';

		for ($i = 1; $i <= 10; $i++) {
			$result .= $i . ': ' . $str . PHP_EOL;
		}

		return $result;
	}

	if ($input === null) {
		echo "You did not say anything!\n";
	} else {
		echo "Your string is this long: " . strlen($input) . PHP_EOL;
		echo "Your string backwards: " . strrev($input) . PHP_EOL;
		echo "Your string uppercase: " . strtoupper($input) . PHP_EOL;

		echo multiplyText($input);
	}