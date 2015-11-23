<?php

class Test {

   private $attr1;
   public $attr2;


   public function holundersirup(){

   	return 'holundersirup';
   }



   public function setAttr1($attr){
     $this->attr1 = $attr;
   }

   public function getAttr1(){
     return $this->attr1;
   }
}


$test1 = new Test();
$test2 = new Test();

$test2->attr2 = 'PHP macht mir heute kein Spass';
$test1->attr2 = 'PHP macht spass';
echo 'attr2: '. $test2->attr2;



$test3 = new Test();
$test3->setAttr1('Bad World');


echo $test3->getAttr1();

print_r($test1);



?>