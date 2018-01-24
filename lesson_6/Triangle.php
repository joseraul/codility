<?php

function isTriangle($A, $P, $Q, $R) {
    return (0 <= $P)
    && ($P < $Q)
    && ($Q < $R)
    && (($A[$P] + $A[$Q]) > $A[$R])
    && (($A[$Q] + $A[$R]) > $A[$P])
    && (($A[$R] + $A[$P]) > $A[$Q]);
}

function solution($A) {
    $A_size = count($A);

    for($i=0; $i<$A_size; $i++) {
        $P = $i;

        for($j=(1+$i); $j<$A_size; $j++) {
            $Q = $j;

            for($k=(1+$j); $k<$A_size; $k++) {
                $R = $k;

                if (isTriangle($A, $P, $Q, $R)) {
                    return 1;
                }

            }
        }
    }
    return 0;
}

echo solution([10, 2, 5, 1, 8, 20]); // 1
echo solution([10, 50, 5, 1]); // 0