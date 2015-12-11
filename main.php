<?php

include("constants.php");
//Es wird überprüft ob die Session aktiv ist oder nicht, falls diese nicht Aktiv ist,
//wird eine Session gestartet.
if(!isset($_SESSION))
{
	session_start();
}
if (isset($_SESSION['username'])){
	//Es wird der Storage eingebunden.
	include('core/storage.php');
	//Es wird der User eingebunden.
	include('core/user.php');
	//Es wird der Blog eingebunden.
	include('core/blog.php');
	//Es wird der Blogeintrag eingebunden.
	include('core/blogEntry.php');

	//Es wird ein neues Objekt Storage erstellt
	$storage = new Storage();
	
	//Es wird der Storage geladen.
	$storage->loadStorage(STORAGE_FILE);

	if (array_key_exists("textarea_blogentry", $_POST) && array_key_exists("title", $_POST)) {
		if (isset($_SESSION['username'])) {
			$blogentry = new BlogEntry();
			$blogentry->setTitle($_POST["title"]);
			$blogentry->setCategory($_POST["dropdown"]);
			$blogentry->setText($_POST["textarea_blogentry"]);
			$timestamp = time();
			$datum = date("d.m.Y G:i:s",$timestamp);
			$blogentry->setCreated($datum);
			$user = $storage->checkUsername($_SESSION['username']);
			if ($user) {
				$blog = $user->getBlog();
				$blog->addBlogentry($blogentry);
				$storage->saveStorage(STORAGE_FILE);
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
		if ($user->getBlog() == NULL) {
			header('Location: createblog.php');
		}
		if(array_key_exists("exists", $_GET) && $_GET['exists'] == true){
			$tmp_globalmessage[] = "Es existiert bereits ein Blog.";
		}
		$blogs = array($user->getBlog());			
	}
	if(array_key_exists("deleteblogentry", $_GET) && isset($_SESSION['username'])){
		$user = $storage->checkUsername($_SESSION['username']);
		$user->getBlog()->removeBlogentryByIndex($_GET['deleteblogentry']);
		$storage->saveStorage(STORAGE_FILE);
		$blogs = array($user->getBlog());			
	}
	if(array_key_exists("editsend", $_POST) && isset($_SESSION['username'])){
		$user = $storage->checkUsername($_SESSION['username']);
		$blogentry = $user->getBlog()->getBlogentryByIndex($_POST['editsend']);
		$blogentry->setTitle($_POST['blogtitle']);
		$blogentry->setCategory($_POST["dropdown"]);
		$blogentry->setText($_POST['blogtext']);
		$storage->saveStorage(STORAGE_FILE);
	}


	$tmp_blogs = $blogs;
	$actual_user = $storage->checkUsername($_SESSION['username']);
	$actual_user_blog = NULL;
	if($actual_user){
		$actual_user_blog = $actual_user->getBlog();
	}
	$tmp_content = 'templates/main.html.php';

	//Hier wird das Layout.nav.html.php eingebunden.	
	include('templates/layout.nav.html.php');
}
else {
	//Es wird auf das Login.php falls keine Session aktiv ist.
	header('Location: login.php');	
}
?>