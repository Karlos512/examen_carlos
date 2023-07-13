<?php

$a = [17, 28, 30];
$b = [99, 16, 8];
$points = [0, 0];

foreach ($a as $key => $value) {
    if ($a[$key] <= 100) {
        if ($b[$key] <= 100) {
            if ($a[$key] > $b[$key]) {
                $points[0] += 1;
            } else if ($a[$key] < $b[$key]) {
                $points[1] += 1;
            }
        } else {
            echo "El valor {$b[$key]} es mayor a 100";
        }
    } else {
        echo "El valor {$a[$key]} es mayor a 100";
    }
}

print_r($points);
