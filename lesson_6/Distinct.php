<?php

function solution($A) {
    $array_flipped = array_flip($A);
    return (int) count($array_flipped);
}

echo solution([2, 1, 1, 2, 3, 1]); // 3