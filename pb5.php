<?php
$MAX = 20;

$i = 1;
$result = 1;

for($i = $MAX; $i > 1; $i--){
    if($result % $i != 0){
        $result = $result * $i;
        printf("%d %d\n", $i, $result);
    }
}
printf("result = %d\n", $result);
?>
