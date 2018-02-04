<?php

function solution($S) {
    if (empty($S)) {
        return 1;
    }

    $string = str_split($S);
    $symbols_list = [];

    foreach($string as $symbol) {
        if ('(' === $symbol) {
            $symbols_list[] = $symbol;
        } else {
            $last_symbol = array_pop($symbols_list);
            if ($last_symbol !== '(') {
                return 0;
            }
        }
    }

    if (0 !== count($symbols_list)) {
        return 0;
    }

    return 1;
}
echo solution('(()(())())'); // 1
echo solution('())'); // 0