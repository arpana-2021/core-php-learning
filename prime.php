<?php
function primeChk($n){
    $flag=0;
    for($div= 2; $div<=$n/2;$div++){
        if($n%2==0){
            $flag=1;
            break;
        }
    }
    if($n==1 || $n==0){
        echo "Not a Prime";
    }
    else{
        if($flag==1){
             echo "Not a prime No";
        }
        else{
            echo "Prime No";
        }      
    }
}
     primeChk(3);   
        

?>
