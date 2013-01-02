<?php
$MIN = 100;
$MAX = 999;
$resultArray = array();


//print_r($resultArray);
//printf("result = %d\n", max($resultArray));

for($i = $MIN; $i <= $MAX; $i++){
    for($j = $i; $j <= $MAX; $j++){
        if($i * $j == strrev($i * $j)){
            $resultArray[] = array($i * $j, $i, $j);
            //printf("(i, j) = (%d, %d):%d\n", $i, $j, $i * $j);
        }
    }
}
//print_r($resultArray);
print_r(max($resultArray));
?>
