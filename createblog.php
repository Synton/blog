<?php

include("constants.php");
//Es wird überprüft ob die Session aktiv ist oder nicht, falls diese nicht Aktiv ist,
//wird eine Session gestartet.
if(!isset($_SESSION))
{
	session_start();
}
if (isset($_SESSION['username'])){
	//Hier wird der Storage eingebunden damit ich die getters und setters benutzen kann.
	include('core/storage.php');
	//Hier wird der User eingebunden damit ich die getters und setters benutzen kann.
	include('core/user.php');
	//Hier wird der Blog eingebunden damit ich die getters und setters benutzen kann.
	include('core/blog.php');
	//Hier werden die Blogeinträge eingebunden damit ich die getters und setters benutzen kann.
	include('core/blogEntry.php');
	//Es wird ein neues Storage Objekt erstellt und diese wird dann in nie Variable $newstorage geschrieben.
	$newstorage = new Storage();
	//Der Storage wird hier geladen.
	$newstorage->loadStorage(STORAGE_FILE);
	$user = $newstorage->checkUsername($_SESSION['username']);

	if (array_key_exists("blogname", $_POST)) {

		echo "blogname: " . $_POST["blogname"] . "<br/>";
			
		
		$newblog = new Blog();
		// Hier wird der Titel des neuen Blogs gesetzt
		$newblog->setTitle($_POST["blogname"]);
		print(count($newstorage->getAllUsers()));
		if ($user) {
			$user->addBlog($newblog);
			$newstorage->saveStorage(STORAGE_FILE);
			header('Location: main.php?userblog=true');
		}
		else {
			echo("Hier wird Ihre Fehlermeldung stehen!");
		}
	}
	else {
		if($user && $user->getBlog() == NULL){
			$tmp_content = 'templates/blog.html.php';
		}
		else{
			
			header('Location: main.php?userblog=true&exists=true');
			//$tmp_globalmessage[] = "Es existiert bereits ein Blog.";

		}
	}
}
else {
	//Es wird auf das Login.php falls keine Session aktiv ist.
	header('Location: login.php');	
}

	
include('templates/layout.nav.html.php');
?>



