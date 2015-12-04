<?php

if (array_key_exists("blogname", $_POST)) {

	echo "blogname: " . $_POST["blogname"] . "<br/>";
	echo "text:        " . $_POST["text"] . "<br/>";
		
	include('core/blog.php');
	$newblog = new blog();
	$newblog->setTitle($_POST["blogname"]);


	if (empty($newblog->getTitle())){


	}
	/*if ($newblog->getTitle() = empty()
		echo ("ist leer");*/
		
	 print_r ($newblog->getTitle());
}
	$tmp_content = 'templates/blog.html.php';	
	include('templates/layout.nav.html.php');

?>



