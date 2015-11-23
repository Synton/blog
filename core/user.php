<?php
class User
{
	private $username, $password, $firstname, $lastname, $street, $city;
	


	public function setUsername($name){
		$this->username = $name;
	}
	public function getUsername(){
		return $this->username;
	}

	public function setPassword($password){
		$this->password = $password;
	}
	public function getPassword(){
		return $this->password;
	}

	public function setFirstname($firstname){
		$this->firstname = $firstname;
	}
	public function getFirstname(){
		return $this->firstname;
	}	

	public function setLastname($lastname){
		$this->lastname = $lastname;
	}
	public function getLastname(){
		return $this->lastname;
	}	

	public function setStreet($street){
		$this->street = $street;
	}
	public function getStreet(){
		return $this->street;
	}	

	public function setCity($city){
		$this->city = $city;
	}
	public function getCity(){
		return $this->city;
	}	

}
?>