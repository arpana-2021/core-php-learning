<?php
class test{
	public $var =10;
	public function show(){
		echo $this->var;
	}

}
	
class test1{
	public $var =20;
	public function show(){
		echo $this->var;
	}
}

$tst = new test();
$tst->show();
$tst1 = new test1();
$tst1->show();
?>