<?php
$str = "I love my India";
echo $str;

echo "-Word count is: ".str_word_count($str); //Word count is: 4

echo "</br>Reverse of word is: ". strrev($str)."</br>";

echo "position of my is: ".strpos("I love my India","my")."</br>"; //position of my is 7

echo "Replace India by country: ".str_replace("India","country", "I love my India")."</br>"; 
//Replace India by country: I love my country

echo "Returns parts of string..", substr("I love my India",5)."</br>"; //e my India //starting from the given position to last string
echo substr("You are great",8)."</br>"; //great

echo substr("Babli",2)."</br>";//bli

echo substr("Arpana",3)."</br>"; //ana

echo strstr("I love my India love","love")."</br>"; //showing from first occurence searched string to last string//love my India

echo strstr("this is dog, it is black","dog")."</br>"; //dog, it is black

echo strstr("this is dog, it is black","is")."</br>"; //is dog, it is black

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ", $arr)."</br>"; //convert array to string
$a = "PHP";
$a = $a + 1;
echo $a; //1 warning error

?>