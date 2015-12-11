<?php
//Es wird überprüft ob die Session aktiv ist oder nicht, falls diese nicht Aktiv ist,
//wird eine Session gestartet.
if(!isset($_SESSION))
{
  session_start();
}
//Wenn die Session gesetzt ist mit dem korrekten Usernamen
if (isset($_SESSION['username'])){
	//Es wird der Storage eingebunden.
	include('core/storage.php');
	//Es wird der User eingebunden.
  	include('core/user.php');
  	//Es wird der Blog eingebunden.
  	include('core/blog.php');
  	//Es wird der Blogeintrag eingebunden.
  	include('core/blogEntry.php');
  }

else {
	//falls das if nicht stimmt wird der Benutzer auf die Login Seite weitergeleitet.
    header('Location: login.php');  
}
  $tmp_content = ('templates/blogoverview.html.php');
  //Es wird das Template layout.nav.html.php eingebunden.
  include('templates/layout.nav.html.php');
?>