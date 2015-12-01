<?php

include_once('core/storage.php');

$newstore = new Store();
$newstore-> loadStorage('data/storage.txt');
$validateuser = $newstore->checkUsername($_POST["txtUser"]);
if ($validateuser == false) {
	echo ("User exsistiert nicht"); 
}
else {
	if ($validateuser->getPassword() == $_POST["txtPassword"]) {
		header("main.php");
	}
	else {
		echo ("Passwort wurde falsch eingegeben");
	}
}


$tmp_content = 'templates/login.html.php';	
include('templates/layout.html.php');
?>