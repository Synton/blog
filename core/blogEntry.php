<?php
class BlogEntry
{
	private $text, $created, $userid, $title, $comments;
	
	public function setText($text){
		$this->text = $text;
	}
	public function getText(){
		return $this->text;
	}

	public function setCreated($created){
		$this->created = $created;
	}
	public function getCreated(){
		return $this->created;
	}

	public function setUserid($userid){
		$this->userid = $userid;
	}
	public function getUserid(){
		return $this->userid;
	}

	public function setTitle($title){
		$this->title = $userid;
	}
	public function getTitle(){
		return $this->title;

	public function setComments($comments){
		$this->comments = $comments;
	}
	public function getComments(){
		return $comments->comments;
?>