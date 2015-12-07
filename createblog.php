<?php
if(!isset($_SESSION))
{
	session_start();
}

if (array_key_exists("blogname", $_POST)) {

	echo "blogname: " . $_POST["blogname"] . "<br/>";
		
	include('core/blog.php');
	$newblog = new Blog();
	$newblog->setTitle($_POST["blogname"]);
	include('core/storage.php');
	include('core/user.php');
	$newstorage = new Storage();
	$newstorage->loadStorage('data/storage.txt');
	$user = $newstorage->checkUsername($_SESSION['username']);
	print(count($newstorage->getAllUsers()));
	if ($user) {
		$user->addBlog($newblog);
		$newstorage->saveStorage('data/storage.txt');
	}
	else {
		echo("Hier wird Ihre Fehlermeldung stehen!");
	}

	if (empty($newblog->getTitle())){


	}
	/*if ($newblog->getTitle() = empty()
		echo ("ist leer");*/
		
	 print_r ($newblog->getTitle());
}
	$tmp_content = 'templates/blog.html.php';	
	include('templates/layout.nav.html.php');

?>



