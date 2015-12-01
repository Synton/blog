<?php

include('core/storage.php');
include('core/user.php');
print_r($_REQUEST);
$storage = new Storage();
$storage->loadStorage('data/storage.txt');
echo count($storage->getAllUsers());
$user4 = $storage->checkUsername($_POST["txtUser"]);
if ($user4 == false) {
	$user4 = new User();

	$user4->setUsername($_POST["txtUser"]);
	$user4->setPassword($_POST["txtPassword"]);
	$user4->setFirstname($_POST["txtVorname"]);
	$user4->setLastname($_POST["txtNachname"]);
	$user4->setStreet($_POST["txtStrasse"]);
	$user4->setCity($_POST["txtPLZOrt"]);
	$storage->addUser($user4);
	$storage->saveStorage('data/storage.txt');
}

echo "&nbsp";
echo count($storage->getAllUsers());

?>