<?php
if(!isset($_SESSION))
{
	session_start();
	print_r($_SESSION['username']);
}
if (isset($_SESSION['username'])){
	include('core/storage.php');
	include('core/user.php');
	include('core/blog.php');
	include('core/blogEntry.php');


	$storage = new Storage();
	
	$storage->loadStorage('data/storage.txt');

	if (array_key_exists("textarea_blogentry", $_POST)) {
		if (isset($_SESSION['username'])) {
			$blogentry3 = new BlogEntry();
			$blogentry3->setText($_POST["textarea_blogentry"]);
			$timestamp = time();
			$datum = date("d.m.Y G:i",$timestamp);
			$blogentry3->setCreated($datum);
			$user = $storage->checkUsername($_SESSION['username']);
			if ($user) {
				$blog2 = $user->getBlog();
				$blog2->addBlogentry($blogentry3);
				$storage->saveStorage('data/storage.txt');	
			}		
		}
	}

	if (array_key_exists("blog", $_GET)) {
		$index = $_GET["blog"];
		$blogs = array ($storage->getBlogByIndex($index)); 
	 
	}

	else{
		$blogs = $storage->getAllBlogs();
	}
	if (isset($_SESSION['username'])) {
		
	}


	$tmp_blogs = $blogs;
	$tmp_content = 'templates/main.html.php';	
	include('templates/layout.nav.html.php');
}
else {
	header('Location: login.php');	
}
?>