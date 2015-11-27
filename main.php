<?php

include('core/storage.php');
include('core/user.php');
include('core/blog.php');
include('core/blogEntry.php');


$storage = new Storage();
$user = new User();
$blog = new Blog();
$blogentry = new BlogEntry();


date_default_timezone_set("Europe/Berlin");
	$timestamp = time();
	$datum = date("d.m.Y",$timestamp);
	$uhrzeit = date("H:i",$timestamp);

$blogentry->setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse magna libero, varius ac elit non, iaculis viverra sem. Morbi lectus nunc, pulvinar sit amet eros vel, condimentum tincidunt arcu. Fusce posuere placerat eros, nec posuere mauris faucibus vitae. Nulla in ipsum lacus. Integer accumsan nibh vel nisi tincidunt, vestibulum facilisis dui auctor. In condimentum nec purus eget elementum. Aenean finibus vestibulum enim, non tristique nibh congue tincidunt. Mauris sagittis ut erat quis dapibus. In ac dignissim mauris, non dapibus libero. Nam auctor augue sit amet magna auctor porttitor. Quisque vitae semper velit. Etiam congue non metus quis interdum. Mauris venenatis.");
$blogentry->setCreated($datum);
	
	




//funktionsaufruf für Datum
$blogentry->setUserid("001");
$blogentry->setTitle("Erster Blog");

$blog->setCreated($datum);
$blog->setUserid("Useridblog001");
$blog->setTitle("Blogtittel");


$user->setUsername("Exocon");
$user->setPassword("pw123456");
$user->setFirstname("Marc");
$user->setLastname("Eskandar");
$user->setStreet("Zeughausstrasse 11a");
$user->setCity("Lyss");


$blog->addBlogentry($blogentry);
$user->setBlog($blog);
$storage->addUser($user);






//$storage = new Storage();
//$storage->loadStorage('data/storage.txt');
$blogs = $storage->getAllBlogs();




$tmp_blogs = array('Erstes', 'zweites', 'drittes');
$tmp_content = 'templates/main.html.php';	
include('templates/layout.nav.html.php');

$storage->saveStorage('data/storage.txt');



?>