<?php

$data = array(1, 5, -8, 55, 0, -8, -3, 7);
$result = sumpow($data);

echo $result;

function sumpow($data){
    $sum = 0;

    foreach ($data as $num){
        if ($num > 0)
            $sum += pow($num, 2);
    }

    return $sum;
}
