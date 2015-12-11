<?php
//Es wird das constants.php eingebunden.
include("constants.php");
//Es wird das constants.php eingebunden.
include('core/storage.php');
include('core/user.php');
$newstore = new Storage();
session_start();
$tmp_globalmessage = array();

if (array_key_exists("txtUser", $_POST)) {
	$newstore->loadStorage(STORAGE_FILE);
	$validateuser = $newstore->checkUsername($_POST["txtUser"]);
	if ($validateuser == false) {
		$tmp_globalmessage[] = "User exsistiert nicht"; 
	}
	else {
		//falls das Passwort mit dem TextfeldPasswort übereinstimmt
		if ($validateuser->getPassword() == md5($_POST["txtPassword"])) {
			//und die Session Username mit dem Storage überinstimmen
			$_SESSION['username'] = $validateuser->getUsername();
			//wird weitergeleitet auf den angegebenen Link weiter.
			header('Location: main.php?overview=true');
		}
		else {
			$tmp_globalmessage[] = "Passwort wurde falsch eingegeben"; 
		}
	}
}
//Prüft, ob username in dem $_POST Array existiert, Prüft ob logout in dem $_POST Array existiert
if(array_key_exists('username', $_SESSION) && array_key_exists('logout', $_GET)) 
{
	//falls dies zutrifft wird die Variable _Session gelöscht. 
	unset($_SESSION['username']);
}

$tmp_content = 'templates/login.html.php';
//Es wird das Layout.html.php eingebunden.
include('templates/layout.html.php');
?>