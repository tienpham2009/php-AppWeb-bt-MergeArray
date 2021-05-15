<?php

$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9,10];
$array3 =[];


for ($step = 0 ; $step < count($array1) ; $step++){
    array_push($array3, $array1[$step]);
}

for ($step = 0 ; $step < count($array2) ; $step++){
    array_push($array3, $array2[$step]);
}

echo implode(",",$array3);