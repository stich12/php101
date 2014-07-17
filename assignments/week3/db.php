<?php

	/**
	 * Class CCDatabase provides a "database" of blog data.
	 * It is also responsible with filling up the database with some
	 * default data.
	 */
	class CCDatabase {
		private $blogs = array();

		/**
		 * I am called automatically every time we use `new CCDatabase()`
		 */
		public function __construct() {
			$this->bootstrapData();
		}

		/**
		 * @return array
		 */
		public function getBlogs() {
			return $this->blogs;
		}

		/*
		 * @return Blog
		 */
		public function getBlog($id = 0) {
			return $this->blogs[$id];
		}

		/**
		 * @return null
		 */
		public function addBlog($blog) {
			$this->blogs[] = $blog;
		}

		/**
		 * @return null
		 */
		private function bootstrapData() {
			$blog = new Blog();
			$blog->title = 'A day with my dogs';
			$this->addBlog($blog);

			$blog = new Blog();
			$blog->title = 'My review of Charleston, SC';
			$this->addBlog($blog);
		}
	}