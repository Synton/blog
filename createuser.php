<?php
include("constants.php");
include('core/storage.php');
include('core/user.php');

$storage = new Storage();
$storage->loadStorage(STORAGE_FILE);
echo count($storage->getAllUsers());
$user = $storage->checkUsername($_POST["txtUser"]);
if ($user == false) {
	$user = new User();

	$user->setUsername($_POST["txtUser"]);
	$user->setPassword($_POST["txtPassword"]);
	$user->setFirstname($_POST["txtVorname"]);
	$user->setLastname($_POST["txtNachname"]);
	$user->setStreet($_POST["txtStrasse"]);
	$user->setCity($_POST["txtPLZOrt"]);
	$storage->addUser($user);
	$storage->saveStorage(STORAGE_FILE);
}
//Es wird auf das Login.php falls keine Session aktiv ist.
header('Location: login.php');

?>