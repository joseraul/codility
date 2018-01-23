<?php


function solution($A) {
    $last_number = count($A);
    $array_flipped = array_flip($A);

    for($i=1; $i<=$last_number; $i++) {
        if (!isset($array_flipped[$i])) {
            return 0;
        }
    }
    return 1;
}

// Test sample
echo solution([4, 3, 2, 1]);
echo solution([4, 3, 1]);

echo solution([1]);