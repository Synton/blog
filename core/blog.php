<?php
class Blog
{
	private $created, $userid, $title, $blogentries;
	

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

	public function setBlogentries($newblogentries){
		$this->blogentries = $newblogentries;
	}
	public function getBlogentries(){
		return $blogentries->blogentries;
	}
?>