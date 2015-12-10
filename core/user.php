<?php
//Hier wird die Klasse User erstellt mit den entsprechenden Attributen
//Es werden setters und getters definiert:
	//Diese werden gesetzt damit ich in den anderen Dateien die Funktionen aufrufen kann.
class User
{
	private $username, $password, $firstname, $lastname, $street, $city;
	private $blog = array();
	

	//Der Username des Users wird gesetzt.
	public function setUsername($newname){
		$this->username = $newname;
	}

	//Der Username des Users wird ausgelesen.
	public function getUsername(){
		return $this->username;
	}

	//Das Passwort des Users wird gesetzt.
	public function setPassword($newpassword){
		$this->password = $newpassword;
	}

	//Das Passwort des Users wird ausgelesen.
	public function getPassword(){
		return $this->password;
	}

	//Der Vorname des Users wird gesetzt.
	public function setFirstname($newfirstname){
		$this->firstname = $newfirstname;
	}
	public function getFirstname(){
		return $this->firstname;
	}	

	//Der Nachname des Users wird gesetzt.
	public function setLastname($newlastname){
		$this->lastname = $newlastname;
	}

	//Der Nachname des Users wird ausgelesen.
	public function getLastname(){
		return $this->lastname;
	}	

	//Die Strasse des Users wird gesetzt.
	public function setStreet($newstreet){
		$this->street = $newstreet;
	}

	//Die Strasse des Users wird ausgelesen.
	public function getStreet(){
		return $this->street;
	}	

	//Die Stadt des Users  wird gesetzt.
	public function setCity($newcity){
		$this->city = $newcity;
	}

	//Die Stadt des Users wird ausgelesen.
	public function getCity(){
		return $this->city;
	}
	
	//Der Blog des Users wird gesetzt.
	public function setBlog($newblog){
			$this->blog = $newblog;
	}

	//Der Blog des Users wird ausgelesen.
	public function getBlog(){
		if (count($this->blog)){
			return $this->blog[0];
		}
		return NULL;
		
	}
	//Es wird ein neuer Blog hinzugefügt falls nötig.
	public function addBlog($addnewblog){
		$this->blog[] = $addnewblog;
	}

	//Der Blog des Users wird gelöscht.
	public function removeBlog(){
		$this->blog = array();
	}


}
?>