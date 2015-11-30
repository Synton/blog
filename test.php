<?php


class Test{

  public $arr = array();
 
  public function add($a){
  	$this->arr[] = $a;
  }

}

$test = new Test();
$test->add(1);

$test2 = new Test();
$test2->add(2);


print_r($test);


?>