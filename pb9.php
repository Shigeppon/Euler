<?php
$MAX = 1000;
$resultArray = array();

for($a = 1; $a < $MAX; $a++){
    for($b = $a + 1; $b < $MAX - $a; $b++){
        $c = $MAX - $a - $b;
        //printf("a = %d, b = %d, c = %d\n", $a, $b, $c);
        if(pow($a, 2) + pow($b, 2) == pow($c, 2)){
            $resultArray[] = array('a' => $a,
                                   'b' => $b,
                                   'c' => $c,
                                   'abc' => $a * $b * $c
                                   );
        }
    }
}
print_r($resultArray);
?>
