<?php
class Comment
{
	private $text, $created, $userid, $title;
	
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
		$this->title = $newuserid;
	}
	public function getTitle(){
		return $this->title;
	}

?>