<?php

	/**
	 * A simple blog entry.
	 */
	class Blog {

		/** @var string **/
		var $title;


	}

	$blog1 = new Blog();
	$blog1->title = 'My first blog. In this episode, we take a look at classes and arrays!';

	$blog2 = new Blog();
	$blog2->title = 'My second blog. This week our PHP buzzword is instantiation!';

	$blogs = array ();

	foreach ($blogs as $blog) {
		print $blog->getShortTitle();
	}

	/**
	 * Challenge 1: Can you run this script from the command line?
	 * Tip: Use the `cd` command to move into the same directory.
	 * Then you can run `php index.php`
	 */

	/**
	 * Challenge 2: We are looping through an array, but the array is empty!
	 * Can you add our two blog instances into the array?
	 * What happens if you add them more than once?
	 */

	/**
	 * Challenge 3: Our titles are too long for our new blog.
	 * In our foreach() loop, we refer to getShortTitle(), but it's broken!
	 * Can you add a class method that returns a shortened version of the title?
	 * Hint: PHP has a built-in function called `strpos()`
	 */