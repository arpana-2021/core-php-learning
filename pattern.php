<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "</br>";
}



// *
// **
// ***
// ****
// *****

echo "</br>";

for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "</br>";
}

// *****
// ****
// ***
// **
// *

echo "</br>";

 
for($i=0; $i<5; $i++)
{  
    for($k=5; $k>$i+1; $k--){
        echo " ";
    }
    for($j=0; $j<=$i; $j++)
    {  
        echo "*";  
    }  
 echo "</br>";  
}  

?>