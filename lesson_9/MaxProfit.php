<?php

function solution($A)
{
    $sum = 0;
    for($i=0; $i < count($A); $i++) {
        for($z=($i+1); $z < count($A); $z++) {
            if (($A[$z] - $A[$i]) > $sum) {
                $sum = ($A[$z] - $A[$i]);
            }
        }
    }
    return $sum;
}

echo solution([23171, 21011, 21123, 21366, 21013, 21367]); // 356