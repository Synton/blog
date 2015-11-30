<?php
	echo "blogname: " . $_POST["blogname"] . "<br/>";
	echo "text:        " . $_POST["text"] . "<br/>";
	
	include('core/blog.php');
	$newblog = new blog();
	$newblog->setTitle($_POST["blogname"]);

	if (empty($newblog->getTitle())){
		print_r ("ist leer");


	}
	/*if ($newblog->getTitle() = empty()
		echo ("ist leer");*/
		
	 print_r ($newblog->getTitle());

?>



