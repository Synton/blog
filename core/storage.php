<?php
class Storage
{
	private $user = array();	


	public function addUser($newuser){
		$this->user[] = $newuser;
	}
	public function getAllUsers(){
		return $this->user;
	}

	public function getAllBlogs(){
		$blogs = array();
		foreach ($this->user as $newuser){
			$blogs[] = $newuser->getBlog();
		}
		return $blogs;		
	}

	public function saveStorage($file){
		$ser_storage = serialize($this->user);
		file_put_contents($file, $ser_storage) or die("save: unable to open File");		
	} 


	public function loadStorage($file){
		$this->user = unserialize(file_get_contents($file));
	}
}	
?>