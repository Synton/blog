<?php






include_once('core/storage.php');
include_once('core/user.php');
$newstore = new Storage();
session_start();

if (array_key_exists("txtUser", $_POST)) {
	$newstore->loadStorage('data/storage.txt');
	$validateuser = $newstore->checkUsername($_POST["txtUser"]);
	if ($validateuser == false) {
		echo ("User exsistiert nicht"); 
	}
	else {
		if ($validateuser->getPassword() == $_POST["txtPassword"]) {
			$_SESSION['username'] = $validateuser->getUsername();
			header('Location: main.php');
		}
		else {
			echo ("Passwort wurde falsch eingegeben");
		}
	}
}

if(array_key_exists('username', $_SESSION) && array_key_exists('logout', $_GET)) 
{
	unset($_SESSION['username']);
}

$tmp_content = 'templates/login.html.php';	
include('templates/layout.html.php');
?>