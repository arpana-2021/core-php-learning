<?php 
//Type Hinting
// $str= "Hi";
// echo $str +1;

// function sum(int $value)
// {
// 	echo $value+10;
// }
//  sum(10);


 // function fruits(array $names){
 // 	foreach($names as $name){
 // 		echo $name. '</br>';
 // 	}
 // }

 // $test= ["Apple", "Banana", "Orange"];
 // fruits($test);

class school{
	public function getNames(student $names){
		foreach($names->name() as $name){
			echo $name . "</br>";
		}
		
	}
}
class student{
	public function name(){
		return["Ram", "Krishan","Gopal"];
	}
}

class Library{

}

$lib= new Library();
$sch = new school();
$stu = new student();


$sch->getNames($stu);



?>