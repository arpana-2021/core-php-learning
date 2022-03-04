<?php
//Dependency Injection
class First_Class{
	public $var1 = "First class value";

	public function getValue(){
		return $this->var1;
	}
}

class Second_Class{
	public $var2 = "Second class value";

	function __construct(First_Class $class1){
		//$this->var2= $class1->var1;	
		echo $class1->getValue(); //First class value	
	}
}

// $clas1 = new First_Class();
// $class2 = new Second_Class($clas1);
$class2= new Second_Class(new First_Class());
//echo $class2->var2; //First class value
echo $class2->var2; //Second class value

?>