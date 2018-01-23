<?php

function solution($A)
{
    $passing_cars = 0;
    $A_len = count($A);

    for($i=0; $i<$A_len; $i++) {
        $car = $A[$i];

        if (0 === $car) {

            for($z=(1+$i); $z<$A_len; $z++) {

                if($A[$z] === 1) {
                    $passing_cars++;

                    if (1000000000 < $passing_cars) {
                        return -1;
                    }
                }
            }
        }
    }

    return $passing_cars;
}

echo solution([0, 1, 0, 1, 1]);
echo solution([]);