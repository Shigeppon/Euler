<?php
$MAX = 13195;
$MAX = 600851475143;
$resultArray = array();


for($i = 2; $i <= sqrt($MAX); $i++){
    $isExist = false;
    //すでに割り切れる数が見つかっているか判定
    foreach($resultArray as $val){
        if($i % $val == 0){
            $isExist = true;
        }
    }
    if($MAX % $i == 0 && !$isExist){
        $resultArray[] = $i;
    }
}
print_r($resultArray);
printf("result = %d\n", max($resultArray));
?>
