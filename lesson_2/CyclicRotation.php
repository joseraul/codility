<?php
/**
 * A zero-indexed array A consisting of N integers is given.
 * Rotation of the array means that each element is shifted right by one index,
 * and the last element of the array is moved to the first place.
 * For example, the rotation of array A = [3, 8, 9, 7, 6] is [6, 3, 8, 9, 7]
 * (elements are shifted right by one index and 6 is moved to the first place).
 *
 * @param $array_to_rotate
 * @param $times
 * @return array
 */
function solution($array_to_rotate, $times)
{
    if(0 === count($array_to_rotate)){
        return [];
    }

    for($i=0; $i<$times; $i++) {
        array_unshift($array_to_rotate, array_pop($array_to_rotate));
    }
    return $array_to_rotate;
}

// Correctness tests
// extreme_empty
echo solution([], 0);
echo solution([], 1);

// single
echo solution([-4], 0);
echo solution([0], 0);
echo solution([1000], 0);