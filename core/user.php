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

	


}
?>