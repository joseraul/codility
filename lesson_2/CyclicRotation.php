<?php

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