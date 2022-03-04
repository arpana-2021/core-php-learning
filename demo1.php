<?php
$age = array("Peter"=>"37", "Ben"=>"27", "Joe"=>"43");
$n[]= ksort($age);
foreach($n as $val){
    echo $val;
}
echo "</br>";

$a='1';
$b=&$a;
$b="2$b";
echo $a.",$b";
?>