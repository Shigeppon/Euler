<?php
$MAX = 4000000;
$fi = 1;//第1項
$se = 2;//第2項
$resultArray = array($fi);

while($fi + $se < $MAX){

    $tmp = $fi;
    $fi = $se;
    $se = $tmp + $fi;
    if($se % 2 == 0){
        $resultArray[] = $se;
    }
}
print_r($resultArray);
printf("result = %d\n",array_sum($resultArray));
?>
