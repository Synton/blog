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

	if (array_key_exists("textarea_blogentry", $_POST) && array_key_exists("title", $_POST)) {
		if (isset($_SESSION['username'])) {
			$blogentry = new BlogEntry();
			$blogentry->setTitle($_POST["title"]);

			$blogentry->setText($_POST["textarea_blogentry"]);
			$timestamp = time();
			$datum = date("d.m.Y G:i:s",$timestamp);
			$blogentry->setCreated($datum);
			$user = $storage->checkUsername($_SESSION['username']);
			if ($user) {
				$blog = $user->getBlog();
				$blog->addBlogentry($blogentry);
				$storage->saveStorage('data/storage.txt');
				header('Location: main.php?userblog=true');
			}		
		}
	}
	
	if (array_key_exists("blog", $_GET)) {
		$index = $_GET["blog"];
		$blogs = array ($storage->getBlogByIndex($index)); 
	 	
	}


	if(array_key_exists("overview", $_GET) && $_GET['overview'] == true){
		header('Location: blogoverview.php');	
	}
	if(array_key_exists("userblog", $_GET) && $_GET['userblog'] == true && isset($_SESSION['username'])){
		$user = $storage->checkUsername($_SESSION['username']);
		$blogs = array($user->getBlog());			
	}
	if(array_key_exists("deleteblogentry", $_GET) && isset($_SESSION['username'])){
		$user = $storage->checkUsername($_SESSION['username']);
		$user->getBlog()->removeBlogentryByIndex($_GET['deleteblogentry']);
		$storage->saveStorage('data/storage.txt');
		$blogs = array($user->getBlog());			
	}
	if(array_key_exists("editsend", $_POST) && isset($_SESSION['username'])){
		$user = $storage->checkUsername($_SESSION['username']);
		$blogentry = $user->getBlog()->getBlogentryByIndex($_POST['editsend']);
		$blogentry->setTitle($_POST['blogtitle']);
		$blogentry->setText($_POST['blogtext']);
		$storage->saveStorage('data/storage.txt');
	}


	$tmp_blogs = $blogs;
	$actual_user = $storage->checkUsername($_SESSION['username']);
	$actual_user_blog = NULL;
	if($actual_user){
		$actual_user_blog = $actual_user->getBlog();
	}
	$tmp_content = 'templates/main.html.php';	
	include('templates/layout.nav.html.php');
}
else {
	header('Location: login.php');	
}
?>