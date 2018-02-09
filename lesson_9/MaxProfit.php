<?php
function solution($A)
{
    $max_sum = 0;
    $min = $A[0];

    for($i=1; $i < count($A); $i++) {
        $min = min($min, $A[$i]);
        $max_sum = max($max_sum, ($A[$i]-$min));
    }
    return $max_sum;
}

echo solution([23171, 21011, 21123, 21366, 21013, 21367]); // 356