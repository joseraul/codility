<?php
/**
 * A non-empty zero-indexed array A consisting of N integers is given.
 * The array contains an odd number of elements, and each element of
 * the array can be paired with another element that has the same value,
 * except for one element that is left unpaired.
 *
 * @param $A
 * @return mixed
 */
function solution($A) {
    print_r($A);
    $pair_numbers = [];
    foreach($A as $number) {
        if (isset($pair_numbers[$number])) {
            unset($pair_numbers[$number]);
        } else {
            $pair_numbers[$number] = true;
        }
    }

    $odd_number = array_keys($pair_numbers);
    return array_pop($odd_number);
}

echo solution([9, 3, 9, 3, 9, 7, 9]);

// Correctness tests
// simple1
echo solution([2, 2, 3, 3, 4]);

// simple2
echo solution([2, 1, 3, 2, 1, 2, 2, 3, 4, 1, 1]);

// extreme_single_item
echo solution([42]);