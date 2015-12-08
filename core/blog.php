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

	public function removeBlogentryByIndex($index){
		usort($this->blogentries, "sortByDate");
		unset($this->blogentries[intval($index)]);
		$this->blogentries = array_values($this->blogentries);
	}

	public function getBlogentryByIndex($index){
		usort($this->blogentries, "sortByDate");
		return $this->blogentries[intval($index)];

	}
	

	public function getAllBlogentries(){

		usort($this->blogentries, "sortByDate");
		return $this->blogentries;
	}
}

	function sortByDate($a, $b){
		if ($a->getCreated() < $b->getCreated()) {
			return 1;
		}
		return -1;
	}

?>