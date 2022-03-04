<?php
//traits
trait hello{
	public function sayHello(){
		echo "Hello Everyone".'</br>';
	}
	public function sayHi(){
		echo "Hi Everyone".'</br>';
	}
}
trait bye{
	public function sayBye(){
		echo "Bye bye Everyone".'</br>';
	}
}

class base{
	use hello, bye;
}

class base2{
	use hello;
}

$test= new base();
$test2 = new base2();

$test->sayHello();
$test->sayBye();

$test2->sayHello();
$test2->sayHi();



?>