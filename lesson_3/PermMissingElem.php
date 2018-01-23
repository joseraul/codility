<?php
/**
 * A zero-indexed array A consisting of N different integers is given.
 * The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.
 * Your goal is to find that missing element.
 *
 * @param array $A
 * @return integer
 */
function solution($A) {
    if (0 === count($A)) {
        return 1;
    }

    $array_flipped = array_flip($A);
    $last_element = count($A);
    for($i=1; $i<=$last_element; $i++) {
        if (!isset($array_flipped[$i])) {
            return $i;
        }
    }

    return ($last_element + 1);
}

echo solution([2, 3, 1, 5]); // 4

// Correctness tests

// empty_and_single
echo solution([]); // 1
echo solution([1]); // 2

// missing_first_or_last
echo solution([1, 2, 3, 4, 5]); // 6
echo solution([2, 3, 4, 5, 6]); // 1

// single
echo solution([1]); // 2
echo solution([2]); // 1

// double
echo solution([1, 2]); // 3
echo solution([3, 1]); // 2
echo solution([3, 2]); // 1

// simple
echo solution([4, 2, 3, 5, 1, 6, 8, 9]); // 7


