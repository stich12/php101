<?php

	// Homework 1

	$input = $argv;

	function concatenateString($list){
		// $length = count($input);
		$name = '';
		$counter = 0;
		
		foreach($list as $part) {

			if ($counter > 0) {
			$name .= $part;
		
			}

			$counter++;
		}

		return $name;
	}

	function multiplyText($str) {
		$result = '';

		for ($i = 1; $i <= 10; $i++) {
			$result .= $i . ': ' . $str . PHP_EOL;
		}

		return $result;
	}


	if ($argv[1] === null) {
		echo "You did not say anything!\n";
	} else {

		foreach ($argv as $val) {
			echo $val;
		}

		$name = concatenateString($argv);
		echo "Your string is this long: " . strlen($name) . PHP_EOL;
		echo "Your string backwards: " . strrev($name) . PHP_EOL;
		echo "Your string uppercase: " . strtoupper($name) . PHP_EOL;

		echo multiplyText($name);
	}

