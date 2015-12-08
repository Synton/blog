<?php
if(!isset($_SESSION))
{
	session_start();
}
if (isset($_SESSION['username'])){
	include('core/storage.php');
	include('core/user.php');
	include('core/blog.php');
	include('core/blogEntry.php');
	$newstorage = new Storage();
	$newstorage->loadStorage('data/storage.txt');
	$user = $newstorage->checkUsername($_SESSION['username']);

	if (array_key_exists("blogname", $_POST)) {

		echo "blogname: " . $_POST["blogname"] . "<br/>";
			
		
		$newblog = new Blog();
		$newblog->setTitle($_POST["blogname"]);
		print(count($newstorage->getAllUsers()));
		if ($user) {
			$user->addBlog($newblog);
			$newstorage->saveStorage('data/storage.txt');
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
			header('Location: main.php?userblog=true');
		}
	}
}
else {
	header('Location: login.php');	
}

	
include('templates/layout.nav.html.php');
?>



