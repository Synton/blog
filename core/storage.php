<?php
//Hier wird die Klasse Storage erstellt mit den entsprechenden Attributen
//Es werden setters und getters definiert:
	//Diese werden gesetzt damit ich in den anderen Dateien die Funktionen aufrufen kann.
class Storage
{
	private $user = array();	

	//Hier wird ein User dem Userarray hinzugefügt.
	public function addUser($newuser){
		$this->user[] = $newuser;
	}

	//Mit dieser Funktion kann ich alle User auslesen.
	public function getAllUsers(){
		return $this->user;
	}

	//Mit dieser Funktion kann ich alle Blogs auslesen.
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

	//Hier wird der ganze Storage serialisiert, d.h. das Objekt wird als String
	//in eine Datei geschrieben.
	public function saveStorage($file){
		$ser_storage = serialize($this->user);
		file_put_contents($file, $ser_storage) or die("save: unable to open File");		
	} 

	//Hier wird der ganze Storage wider unserialisiert, d.h. das der String wird wider zum Objekt.
	public function loadStorage($file){
		$this->user = unserialize(file_get_contents($file));
	}

	public function getIndexByObject($blog){
		return array_search($blog, $this->getAllBlogs());
	}

	/*Diese Funktion ist da damit ich den Blog mit dem Index bekomme,
	*/
	public function getBlogByIndex($index){
		return $this->getAllBlogs()[$index];
	}

	/*Hier werden alle Usernamen überprüft.
	*/
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