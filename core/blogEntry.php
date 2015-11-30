<?php
class BlogEntry
{
	private $text, $created, $userid, $title, $comments;
	
	public function getAll(){
			 $this->text;
	}

	public function setText($newtext){
		$this->text = $newtext;
	}
	public function getText(){
		return $this->text;
	}

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

	public function setComments($newcomments){
		$this->comments = $newcomments;
	}
	public function getComments(){
		return $comments->comments;
	}
}
?>