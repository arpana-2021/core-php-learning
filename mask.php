<?php
$number= "1111222233334444";

function ccMasking($number, $maskingCharacter = 'X') {
    return  str_repeat($maskingCharacter, strlen($number) - 8) . substr($number, -4);
}
echo ccMasking("1111222233334444");
?>