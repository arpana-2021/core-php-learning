<?php
function my_function($item_values)
{
	if ($item_values>100)
	{
	return true;
	}
	return false;
}

$item_list = array("Item1" => 100, "Item2" => 200, "Item3" => 125, "Item4" => 100);

print_r(array_filter($item_list,"my_function"));


//output:: Array ( [Item2] => 200 [Item3] => 125 )

echo "</br>";
foreach(array_filter($item_list,"my_function") as $a){
	echo "Filter elements are: " .$a."</br>";
}


function age($var){
	if (age>=18){
		return true;
	}
}

$agelist= array("23")

?>