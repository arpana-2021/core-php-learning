<?php
//spaceship operator
// function sort ($a,$b)
//     {
//        return $a < = > $b;
//     }

//     sort(45,32);


    class base{
    	public $name;
    	public function __construct($value='John'){
    	 $this->name= $value;

    	}
    	public function getName(){
    		echo $this->name;
    	}
    }

    // $objbase = new base();
  // $objbase->getName();

     class child extends base{
    	 public function __construct($value='Ram'){
    	 	//parent::__construct();
    	 $this->name= $value;

    	}
    	public function getName(){
    		echo $this->name;
    	}
    }

    $objchild = new child();
    $objchild->getName();

    //The parent’s construct function is being overridden by the child. The PHP manual on OOP (Object Oriented Programming) notes this :

?>