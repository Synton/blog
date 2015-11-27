<?php
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
	public function addBlogentry($newblogentries){
		$this->blogentries[] = $newblogentries;
	}
	public function getAllBlogentries(){
		return $this->blogentries;
	}

}


?>