<?php

function solution($N)
{
    $factors = 0;

    for($i=1; $i<=$N; $i++) {
        if (0 === ($N % $i)) {
            $factors++;
        }
    }

    return $factors;
}

echo solution(24); // 8