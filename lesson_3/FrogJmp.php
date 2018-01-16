<?php

/**
 * Get minimal of jumps that the frog needs to arrive to its target.
 *
 * @param $X Position of the frog
 * @param $Y Position where the frog wants to be (>= $Y)
 * @param $D Distance that the grog can jump
 *
 * @return integer
 */
function solution($X, $Y, $D) {
    $distance = $Y - $X;
    return (int) ceil($distance/$D);
}

echo solution(10, 85, 30);