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
			$blog = $newuser->getBlog();
			if ($blog){
				$blogs[] = $blog;
			}
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

	public function getIndexByObject($blog){
		return array_search($blog, $this->getAllBlogs());
	}


	public function getBlogByIndex($index){
		return $this->getAllBlogs()[$index];
	}

	public function checkUsername($username){
		if (count($this->user) == 0) {
			return false;
			
		}
		foreach ($this->user as $newusername) {
			if ($newusername->getUsername() == $username){

					return $newusername;

			}
		}
		return false;
	}

}	
?>