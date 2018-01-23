<?php

function solution($A)
{
    $passing_cars = 0;
    $east_cars = 0;

    foreach($A as $car) {
        if (0 === $car) {
            $east_cars++;
        } else {
            $passing_cars += $east_cars;
            if (1000000000 < $passing_cars) {
                return -1;
            }
        }
    }

    return $passing_cars;
}

echo solution([0, 1, 0, 1, 1]);