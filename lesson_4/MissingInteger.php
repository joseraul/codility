<?php

function solution($A)
{
    $found = 1;
    $smallest_number = 1;
    $array_flipped = array_flip($A);

    while($found) {
        if (!isset($array_flipped[$smallest_number])) {
            return $smallest_number;
        }
        $smallest_number++;
    }
}

echo solution([]);
echo solution([1, 3, 6, 4, 1, 2]);
echo solution([1, 2, 3]);
echo solution([-1, -3]);