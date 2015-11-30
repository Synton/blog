<?php

include('core/storage.php');
include('core/user.php');
include('core/blog.php');
include('core/blogEntry.php');


$storage = new Storage();
$user = new User();
$user2 = new User();
$blog = new Blog();
$blog2 = new Blog();
$blogentry = new BlogEntry();
$blogentry2 = new BlogEntry();
$blogentry22 = new BlogEntry();

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

date_default_timezone_set("Europe/Berlin");
	$timestamp = time();
	$datum = date("d.m.Y",$timestamp);
	$uhrzeit = date("H:i",$timestamp);

$blogentry2->setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse magna libero, varius ac elit non, iaculis viverra sem. Morbi lectus nunc, pulvinar sit amet eros vel, condimentum tincidunt arcu. Fusce posuere placerat eros, nec posuere mauris faucibus vitae. Nulla in ipsum lacus. Integer accumsan nibh vel nisi tincidunt, vestibulum facilisis dui auctor. In condimentum nec purus eget elementum. Aenean finibus vestibulum enim, non tristique nibh congue tincidunt. Mauris sagittis ut erat quis dapibus. In ac dignissim mauris, non dapibus libero. Nam auctor augue sit amet magna auctor porttitor. Quisque vitae semper velit. Etiam congue non metus quis interdum. Mauris venenatis.");
$blogentry2->setCreated($datum);
$blogentry22->setText("Super Lorem!!!! ctus nunc, pulvinar sit amet eros vel, condimentum tincidunt arcu. Fusce posuere placerat eros, nec posuere mauris faucibus vitae. Nulla in ipsum lacus. Integer accumsan nibh vel nisi tincidunt, vestibulum facilisis dui auctor. In condimentum nec purus eget elementum. Aenean finibus vestibulum enim, non tristique nibh congue tincidunt. Mauris sagittis ut erat quis dapibus. In ac dignissim mauris, non dapibus libero. Nam auctor augue sit amet magna auctor porttitor. Quisque vitae semper velit. Etiam congue non metus quis interdum. Mauris venenatis.");
$blogentry22->setCreated($datum);




//funktionsaufruf für Datum
$blogentry2->setUserid("002");
$blogentry2->setTitle("Erster Blog2");

$blog2->setCreated($datum);
$blog2->setUserid("Useridblog001222");
$blog2->setTitle("Blogtittel222");


$user2->setUsername("Exoco222n");
$user2->setPassword("pw12322456");
$user2->setFirstname("Mar22c");
$user2->setLastname("Eska22ndar");
$user2->setStreet("2222 11a");
$user2->setCity("2222");


$blog2->addBlogentry($blogentry22);
$blog2->addBlogentry($blogentry2);
$user2->setBlog($blog2);
$storage->addUser($user2);



$storage->saveStorage('data/storage.txt');




//$storage = new Storage();
//$storage->loadStorage('data/storage.txt');
if (array_key_exists("blog", $_GET)) {
	$index = $_GET["blog"];
	$blogs = array ($storage->getBlogByIndex($index)); 
 
}

else{
	$blogs = $storage->getAllBlogs();
}

$tmp_blogs = $blogs;
$tmp_content = 'templates/main.html.php';	
include('templates/layout.nav.html.php');




?>