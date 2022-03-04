<?php

function __autoload($name){
	include_once("classes/$name.php");
}
$abc= new ABC();
$abc->getValue();

$xyz = new XYZ();

?>