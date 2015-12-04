<?php
class User
{
	private $username, $password, $firstname, $lastname, $street, $city;
	private $blog = array();
	


	public function setUsername($newname){
		$this->username = $newname;
	}
	public function getUsername(){
		return $this->username;
	}

	public function setPassword($newpassword){
		$this->password = $newpassword;
	}
	public function getPassword(){
		return $this->password;
	}

	public function setFirstname($newfirstname){
		$this->firstname = $newfirstname;
	}
	public function getFirstname(){
		return $this->firstname;
	}	

	public function setLastname($newlastname){
		$this->lastname = $newlastname;
	}
	public function getLastname(){
		return $this->lastname;
	}	

	public function setStreet($newstreet){
		$this->street = $newstreet;
	}
	public function getStreet(){
		return $this->street;
	}	

	public function setCity($newcity){
		$this->city = $newcity;
	}
	public function getCity(){
		return $this->city;
	}
	
	public function setBlog($newblog){
			$this->blog = $newblog;
	}
	public function getBlog(){
		if (count($this->blog)){
			return $this->blog[0];
		}
		return NULL;
		
	}

	public function addBlog($addnewblog){
		$this->blog[] = $addnewblog;
	}

	public function removeBlog(){
		$this->blog = array();
	}


}
?>