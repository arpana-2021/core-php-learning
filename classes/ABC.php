<?php
class ABC{
	public $value;

	public function getValue(){
		echo "Value = ". $this->value;
	}

	public function __construct(){
	 	//$this->value= $var+10;
	 	echo "This is construct method";
	 }
}

$obj= new ABC();
//$obj->getValue();
?>
