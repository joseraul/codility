<?php

function solution($X, $A) {
    $road = [];

    for($i=0; $i<count($A); $i++) {

        if ($A[$i] <= $X) {
            $road[$A[$i]] = true;
        }

        if ($X === (count($road))) {

            return $i;
        }
    }

    return -1;
}

echo solution(5, [1, 3, 1, 4, 2, 3, 5, 4]); // 6
