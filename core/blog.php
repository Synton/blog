<?php
class Blog
{
	private $created, $userid, $title, $blogentries;
	

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

	public function setBlogentries($blogentries){
		$this->blogentries = $blogentries;
	}
	public function getBlogentries(){
		return $blogentries->blogentries;
	}
?>