<?php

//Hier wird die Klasse Blog erstellt mit den entsprechenden Attributen
//Es werden setters und getters definiert:
	//Diese werden gesetzt damit ich in den anderen Dateien die Funktionen aufrufen kann

class Blog
{
	private $created, $userid, $title;
	private $blogentries = array();
	
	public function setCreated($newcreated){
		$this->created = $newcreated;
	}
	public function getCreated(){
		return $this->created;
	}

	public function setUserid($newuserid){
		$this->userid = $newuserid;
	}
	public function getUserid(){
		return $this->userid;
	}

	public function setTitle($newtitle){
		$this->title = $newtitle;
	}
	public function getTitle(){
		return $this->title;
	}

	//Diese Funktion ist da damit es mir in einem Blog einen Blogeintrag hinzufügen kann
	//Die Blogentrys werden in ein array geschrieben
	public function addBlogentry($newblogentries){
		$this->blogentries[] = $newblogentries;
	}

	/*Diese Funktion ist da damit ich die Blogeinträge löschen kann, diese werden mit dem Index gelöscht,
	  der index wird in der Datei blogoverview.php von 0 heraufgezählt

	*/
	public function removeBlogentryByIndex($index){
		usort($this->blogentries, "sortByDate");
		unset($this->blogentries[intval($index)]);
		$this->blogentries = array_values($this->blogentries);
	}

	/*Diese Funktion ist da damit ich die Blogeinträge mit dem Index bekomme,
	  der index wird in der Datei blogoverview.php von 0 heraufgezählt
	*/
	public function getBlogentryByIndex($index){
		usort($this->blogentries, "sortByDate");
		return $this->blogentries[intval($index)];

	}
	
	//Mit dieser Funktion kann ich alle Blogeinträge erhalten und diese dann mit der Funktion
	//sortByDate sortieren.
	public function getAllBlogentries(){

		usort($this->blogentries, "sortByDate");
		return $this->blogentries;
	}
}
	//Hier werden alle Blogeinträge nach Datum sortiert
	function sortByDate($a, $b){
		if ($a->getCreated() < $b->getCreated()) {
			return 1;
		}
		return -1;
	}

?>