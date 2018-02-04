<?php

function solution($A) {
    if (empty($A)) {
        return -1;
    }

    $number_occurrences = [];
    $number_position = [];

    foreach($A as $position => $number) {
        if (isset($number_occurrences[$number])) {
            $number_occurrences[$number]++;
        } else {
            $number_occurrences[$number] = 1;
            $number_position[$number] = $position;
        }
    }
    asort($number_occurrences);
    end($number_occurrences);
    $number = key($number_occurrences);

    if ((count($A)/2) < $number_occurrences[$number]) {
        return $number_position[$number];
    }

    return -1;
}

echo solution([3, 4, 3, 2, 3, -1, 3, 3]); // 0
echo solution([]); // -1
echo solution([2, 1, 1, 3]); // -1
echo solution([1, 2, 1]); // 0