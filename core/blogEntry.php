<?php
//Hier wird die Klasse BlogEntry erstellt mit den entsprechenden Attributen
//Es werden setters und getters definiert:
	//Diese werden gesetzt damit ich in den anderen Dateien die Funktionen aufrufen kann.
class BlogEntry


{
	private $text, $created, $userid, $title, $comments, $category;
	
	public function getAll(){
			 $this->text;
	}

	//Mit der Funktion setText wird der Text des Blogeintrages gesetzt.
	public function setText($newtext){
		$this->text = $newtext;
	}
	//Mit der Funktion getText wird der gesetzt Text des Blogeintrages wieder ausgelesen.
	public function getText(){
		return $this->text;
	}

	//Diese Funktion dient des setzen des Datums für den Blogeintrag
	public function setCreated($newcreated){
		$this->created = $newcreated;
	}

	//Mit der Funktion getText wird das gesetzt Datum des Blogeintrages wieder ausgelesen.
	public function getCreated(){
		return $this->created;
	}

	//Falls nötig kann ich eine Userid setzen.
	public function setUserid($newuserid){
		$this->userid = $newuserid;
	}

	//Falls nötig kann ich die Userid auslesen.
	public function getUserid(){
		return $this->userid;
	}

	//Mit dieser Funktion wird der Titel des BLogeintrages erstellt.
	public function setTitle($newtitle){
		$this->title = $newtitle;
	}

	//Mit dieser Funktion wird der Titel des BLogeintrages ausgelesen.
	public function getTitle(){
		return $this->title;
	}

	//Falls nötig kann ich mit dieser Funktion noch Kommentare setzen.
	public function setComments($newcomments){
		$this->comments = $newcomments;
	}

	//Falls nötig kann ich mit dieser Funktion noch Kommentare auslesen.
	public function getComments(){
		return $this->comments;
	}

	//Mit dieser Funktion kann man die Kategorie setzen.
	public function setCategory($newcategory){
		$this->category = $newcategory;
	}

	//Mit dieser Funktion kann man die Kategorie auslesen.
	public function getCategory(){
		return $this->category;
	}
}
?>