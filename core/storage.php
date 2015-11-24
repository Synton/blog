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

		
	}

	
?>