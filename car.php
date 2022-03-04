class Car{
	public $name;

	public function getName($val){
		echo $this->name = $val;
	}
}

$obj = new Car();
$obj->getName("Benz");
