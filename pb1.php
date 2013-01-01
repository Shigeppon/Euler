<?php
$MAX = 10000;
$resultArray = array();

for($i = 0; $i < $MAX; $i++){
    if($i % 3 == 0 || $i % 5 == 0){
        $resultArray[] = $i;
    }
}
printf("result = %d\n",array_sum($resultArray));
?>
